<?php
include '../server/connection.php';

header('Content-Type: application/json'); // Ensure JSON response

$response = ['status' => 'error', 'message' => 'An unexpected error occurred.','redirect_url'=>'','paypal_response'=>''];

// Validate and sanitize input
if (isset($_POST['from'])) {
    $name     = $connection->real_escape_string($_POST['name'] ?? '');
    $email    = $connection->real_escape_string($_POST['email'] ?? '');
    $phone    = $connection->real_escape_string($_POST['phone'] ?? '');
   
    $date     = $connection->real_escape_string($_POST['date'] ?? '');
    
    $message  = $connection->real_escape_string($_POST['message'] ?? '');
    $get  = $connection->real_escape_string($_POST['get'] ?? '');

   


    // Basic Validation
    // if (empty($name) || empty($email) || empty($phone) || empty($date) || empty($message)) {
    //     $response['message'] = "All fields are required.";
    //     echo json_encode($response);
    //     exit;
    // }

    
    // Insert data with status 'Pending Payment'
    $sql = mysqli_query($connection,"UPDATE  appointments SET `name`='$name', `email`='$email',  `phone`='$phone', `appointment_date`='$date', `message`='$message' WHERE `uuid`='$get'");

    
            

    if ($sql) {

        $quey = mysqli_query($connection,"SELECT `id`,`amount` FROM `appointments` WHERE uuid='$get'");
        $row = mysqli_fetch_assoc($quey);

        $amount = $row['amount'];
        $appointmentId = $row['id'];

    

        $accessToken = getAccessToken();
        if (! $accessToken || empty($accessToken)) {
            $response = ['status' => 'error', 'message' => 'Error: PayPal access token is empty.'];
            echo json_encode($response);
            exit;
        }

        $paymentData = [
            "intent"              => "CAPTURE",
            "purchase_units"      => [
                [
                    "amount"      => [
                        "currency_code" => "USD",
                        "value"         => $amount,
                    ],
                    "description" => "Donation to Your Website",
                ],
            ],
            "application_context" => [
                "return_url" => "https://mywebsite-firstclass.vercel.app/",
                "cancel_url" => "https://mywebsite-firstclass.vercel.app/",
            ],
        ];

        $ch = curl_init(PAYPAL_API_URL . "/v2/checkout/orders");
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            "Content-Type: application/json",
            "Authorization: Bearer " . $accessToken,
        ]);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($paymentData));

        $responses = curl_exec($ch);
        curl_close($ch);

        $order = json_decode($responses, true);

        if (!$order) {
            $response = [
                'status'  => 'error',
                'message' => 'Invalid PayPal response: ' . $responses,
            ];
            echo json_encode($response);
            exit;
        }

        if (isset($order['links'][1]['href'])) {
            $response['status'] = "success";
            $response['message'] = "";
            $response['redirect_url'] = $order['links'][1]['href']; // Send link to frontend


            $body = "
<html>
<body style='margin: 0; padding: 0; font-family: Roboto, sans-serif; background: #131722;'>
<section style='width: 100%; background-color: #f1f2f3; color: #333;'>
<div style='width: 100%; max-width: 600px; margin: 0 auto;'>

  <div style='padding: 20px; background-color: #131722; text-align: center;'>
    <h2 style='color: #fff; font-size: 24px;'>Welcome, $name </h2>
  </div>

  <div style='padding: 20px; background: #fff; border-radius: 0 0 8px 8px;'>
    <p>Dear $name,</p>
    <p>Thank you for choosing <strong>$sitename</strong> — your home for professional massage therapy and total relaxation.</p>
    <p>We’re thrilled to have you with us! Whether you’re looking to ease tension, relieve stress, or just treat yourself, our experienced therapists are here to provide the best care possible.</p>

    <hr style='margin: 30px 0;'>

    <h3 style='font-size:18px; color:#333;'>💳 How to Pay with PayPal (With or Without an Account)</h3>

    <h4 style='font-size:16px;'>If You Don’t Have a PayPal Account (Pay as Guest):</h4>
    <ol style='padding-left: 20px;'>
      <li>Click the PayPal button on the website.</li>
      <li>Choose <strong>“Pay with Debit or Credit Card”</strong> or <strong>“Check Out as Guest”</strong>.</li>
      <li>Enter your card details, billing address, and email.</li>
      <li>Click <strong>“Continue”</strong> or <strong>“Pay Now”</strong> to complete the transaction.</li>
      <li>You may be offered the option to create a PayPal account — this is optional.</li>
      <li>You’ll be redirected back to our site with confirmation.</li>
    </ol>

    <h4 style='font-size:16px;'>If You Have a PayPal Account:</h4>
    <ol style='padding-left: 20px;'>
      <li>Click the PayPal button on the website.</li>
      <li>Log in using your email and password.</li>
      <li>Choose your preferred payment method (linked card, bank account, or PayPal balance).</li>
      <li>Click <strong>“Pay Now”</strong> to complete your booking.</li>
      <li>You’ll be redirected back to our website with confirmation.</li>
    </ol>

    <p>If you have any questions or need help completing your booking, feel free to contact us at any time.</p>
    <p>We look forward to serving you soon!</p>
    <p>Warm regards,</p>
    <p>The <strong>$sitename</strong> Team</p>
  </div>

  <div style='text-align: center; color: #999; margin-top: 20px; font-size: 12px;'>
    &copy; " . date('Y') . " $sitename. All rights reserved.
  </div>

</div>
</section>
</body>
</html>
";

$subject = " How to Pay with PayPal (With or Without an Account)";

$from_name = "$sitename Payment Step";

smtpmailer($email, $site_email, $from_name, $subject, $body);




        } else {
            $response['status'] = "error";
            $response['message']= "Error: PayPal order response is invalid.";
            $response['paypal_response'] = $order; // Debugging: Log full PayPal response
        }
        echo json_encode($response);
       

    } else {
        $response['message'] = mysqli_error($connection);
    }
}