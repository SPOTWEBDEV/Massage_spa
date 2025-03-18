<?php
include '../server/connection.php';

header('Content-Type: application/json'); // Ensure JSON response

$response = ['status' => 'error', 'message' => 'An unexpected error occurred.','redirect_url'=>'','paypal_response'=>''];

// Validate and sanitize input
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name     = $connection->real_escape_string($_POST['name'] ?? '');
    $email    = $connection->real_escape_string($_POST['email'] ?? '');
    $phone    = $connection->real_escape_string($_POST['phone'] ?? '');
    $services = $connection->real_escape_string($_POST['services'] ?? '');
    $date     = $connection->real_escape_string($_POST['date'] ?? '');
    $amounts  = $connection->real_escape_string($_POST['amount'] ?? '');
    $message  = $connection->real_escape_string($_POST['message'] ?? '');

    $amount = str_replace('$', '', $amounts);

    // Basic Validation
    if (empty($name) || empty($email) || empty($phone) || empty($services) || empty($date) || empty($amount) || empty($message)) {
        $response['message'] = "All fields are required.";
        echo json_encode($response);
        exit;
    }

    // Insert data with status 'Pending Payment'
    $sql = "INSERT INTO appointments (name, email, phone, services, appointment_date, amount, status)
            VALUES ('$name', '$email', '$phone', '$services', '$date', '$amount', 'pending')";

    if ($connection->query($sql) === true) {
        $appointmentId = $connection->insert_id;

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
            $response['redirect_url'] = $order['links'][1]['href']; // Send link to frontend
        } else {
            $response['status'] = "error";
            $response['message']= "Error: PayPal order response is invalid.";
            $response['paypal_response'] = $order; // Debugging: Log full PayPal response
        }
        echo json_encode($response);
        exit;

    } else {
        $response['message'] = mysqli_error($connection);
    }
}

echo json_encode($response);
