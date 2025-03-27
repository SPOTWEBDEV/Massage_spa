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


