<?php
include('../server/connection.php');
header('Content-Type: application/json'); // Ensure JSON response

$response = ['status' => 'error', 'message' => 'An unexpected error occurred.'];

// Validate and sanitize input
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $connection->real_escape_string($_POST['name'] ?? '');
    $email = $connection->real_escape_string($_POST['email'] ?? '');
    $phone = $connection->real_escape_string($_POST['phone'] ?? '');
    $services = $connection->real_escape_string($_POST['services'] ?? '');
    $date = $connection->real_escape_string($_POST['date'] ?? '');
    $amount = $connection->real_escape_string($_POST['amount'] ?? '');
    $message = $connection->real_escape_string($_POST['message'] ?? '');

    // Basic Validation
    if (empty($name) || empty($email) || empty($phone) || empty($services) || empty($date) || empty($amount)) {
        $response['message'] = "All fields are required.";
        echo json_encode($response);
        exit;
    }

    // Insert data with status 'Pending Payment'
    $sql = "INSERT INTO appointments (name, email, phone, services, appointment_date, amount, status) 
            VALUES ('$name', '$email', '$phone', '$services', '$date', '$amount', 'pending')";

    if ($connection->query($sql) === TRUE) {
        $appointmentId = $connection->insert_id;

        // Step 1: Generate Access Token
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://api.sandbox.paypal.com/v1/oauth2/token");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_USERPWD, "$clientId:$secret");
        curl_setopt($ch, CURLOPT_POSTFIELDS, "grant_type=client_credentials");

        $headers = [
            "Accept: application/json",
            "Accept-Language: en_US",
        ];
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        $result = curl_exec($ch);
        if (!$result) {
            $response['message'] = 'Error generating PayPal access token: ' . curl_error($ch);
            echo json_encode($response);
            exit;
        }
        curl_close($ch);

        $json = json_decode($result, true);
        if (empty($json['access_token'])) {
            $response['message'] = 'Invalid PayPal access token response.';
            echo json_encode($response);
            exit;
        }
        $accessToken = $json['access_token'];

        // Step 2: Create PayPal Order
        $orderData = [
            "intent" => "CAPTURE",
            "purchase_units" => [[
                "amount" => [
                    "currency_code" => "USD",
                    "value" => $amount
                ],
                "custom_id" => $appointmentId
            ]],
            "application_context" => [
                "return_url" => "$domain/history.php?appointment_id=$appointmentId&status=success",
                "cancel_url" => "$domain/history.php?appointment_id=$appointmentId&status=cancel"
            ]
        ];

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://api.sandbox.paypal.com/v2/checkout/orders");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($orderData));

        $headers = [
            "Content-Type: application/json",
            "Authorization: Bearer $accessToken"
        ];
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        $response = curl_exec($ch);
        if (!$response) {
            $response['message'] = 'Error creating PayPal order: ' . curl_error($ch);
            echo json_encode($response);
            exit;
        }
        curl_close($ch);

        $responseData = json_decode($response, true);

        if (isset($responseData['links'])) {
            foreach ($responseData['links'] as $link) {
                if ($link['rel'] === 'approve') {
                    echo json_encode(['status' => 'success', 'redirect_url' => $link['href']]);
                    exit;
                }
            }
        }

        $response['message'] = "Error processing the PayPal payment.";
    } else {
        $response['message'] = mysqli_error($connection);
    }
}

echo json_encode($response);
?>
