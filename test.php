<?php
// require __DIR__ . "/../vendor/autoload.php";


define('$PAYPAL_CLIENT_ID', 'ASUj5StyiTIb-N-wjmHUf17SVdt_twn-uLvO-4qNM0pT5nEwerliGetNzz6J62d4TohLaVVzO4pXE7iz');
define('$PAYPAL_SECRET', 'ELmD6frylcUjUAVGHhqcAV_58TojvitJg9u3GQVBdEeVBw0WANteUZnxLE25j5IYfYVPZvn-IZC0-Xwv');
define('$PAYPAL_API_URL', 'https://api-m.paypal.com'); // Use 'https://api-m.paypal.com' for live

// Function to get PayPal access token
function getAccessToken() {
    global $PAYPAL_CLIENT_ID, $PAYPAL_CLIENT_SECRET, $PAYPAL_API_BASE;

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "$PAYPAL_API_BASE/v1/oauth2/token");
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        "Accept: application/json",
        "Accept-Language: en_US",
    ]);
    curl_setopt($ch, CURLOPT_USERPWD, "$PAYPAL_CLIENT_ID:$PAYPAL_CLIENT_SECRET");
    curl_setopt($ch, CURLOPT_POSTFIELDS, "grant_type=client_credentials");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $response = curl_exec($ch);
    curl_close($ch);
    
    $result = json_decode($response, true);
    return $result["access_token"] ?? null;
}

// Function to create an order
function createOrder($cart) {
    global $PAYPAL_API_BASE;

    $accessToken = getAccessToken();
    if (!$accessToken) {
        return ["error" => "Failed to obtain PayPal access token."];
    }

    $orderData = [
        "intent" => "CAPTURE",
        "purchase_units" => [[
            "amount" => [
                "currency_code" => "USD",
                "value" => "100"
            ],
            "items" => [[
                "name" => "T-Shirt",
                "unit_amount" => [
                    "currency_code" => "USD",
                    "value" => "100"
                ],
                "quantity" => "1"
            ]]
        ]],
        "application_context" => [
            "return_url" => "https://mywebsite-firstclass.vercel.app/",
            "cancel_url" => "https://mywebsite-firstclass.vercel.app/",
            "user_action" => "PAY_NOW",
            "shipping_preference" => "NO_SHIPPING"
        ]
    ];

    $ch = curl_init("$PAYPAL_API_BASE/v2/checkout/orders");
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        "Content-Type: application/json",
        "Authorization: Bearer $accessToken",
    ]);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($orderData));

    $response = curl_exec($ch);
    curl_close($ch);

    return json_decode($response, true);
}

// Function to capture an order
function captureOrder($orderID) {
    global $PAYPAL_API_BASE;

    $accessToken = getAccessToken();
    if (!$accessToken) {
        return ["error" => "Failed to obtain PayPal access token."];
    }

    $ch = curl_init("$PAYPAL_API_BASE/v2/checkout/orders/$orderID/capture");
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        "Content-Type: application/json",
        "Authorization: Bearer $accessToken",
    ]);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, true);

    $response = curl_exec($ch);
    curl_close($ch);

    return json_decode($response, true);
}

// Handling API Requests
$endpoint = $_SERVER["REQUEST_URI"];
header("Content-Type: application/json");

if ($endpoint === "/") {
    echo json_encode(["message" => "Server is running"]);
} elseif ($endpoint === "/api/orders" && $_SERVER["REQUEST_METHOD"] === "POST") {
    $data = json_decode(file_get_contents("php://input"), true);
    $cart = $data["cart"] ?? [];

    try {
        $orderResponse = createOrder($cart);
        echo json_encode($orderResponse);
    } catch (Exception $e) {
        echo json_encode(["error" => $e->getMessage()]);
        http_response_code(500);
    }
} elseif (preg_match('/\/api\/orders\/(.+)\/capture/', $endpoint, $matches)) {
    $orderID = $matches[1];

    try {
        $captureResponse = captureOrder($orderID);
        echo json_encode($captureResponse);
    } catch (Exception $e) {
        echo json_encode(["error" => $e->getMessage()]);
        http_response_code(500);
    }
} else {
    echo json_encode(["error" => "Invalid API request"]);
    http_response_code(404);
}
