<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);


function checkUrlProtocol($url)
{
    // Parse the URL to get the scheme
    $parsedUrl = parse_url($url);

    // Check if the scheme exists and if it's http or https
    if (isset($parsedUrl['scheme'])) {
        return $parsedUrl['scheme'];
    } else {
        return 'invalid'; // Invalid URL if no scheme is found
    }
}

// Automatically get the current URL
$currentUrl = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http")
    . "://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

// Get the protocol from the current URL
$request = checkUrlProtocol($currentUrl);

// Default configurations
define("HOST", "localhost");


// Set configurations based on protocol
if ($request == 'https') {
    $domain = "https://www.bodyandsoulrelax.com/";
    define("USER", "pdicsrdj_massage_spa");
    define("PASSWORD", "pdicsrdj_massage_spa");
    define("DATABASE", "pdicsrdj_massage_spa");
}
elseif ($request == 'http') {
    $domain = "http://localhost/Massage_spa/";
    define("USER", "root");
    define("PASSWORD", "");
    define("DATABASE", "message");
}

// // Database connection
$connection = mysqli_connect(HOST, USER, PASSWORD, DATABASE);

if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

// // Site configurations
$sitename = " Body And Soul Relax";


// email config 
$siteemail = "circleofbeauty@gmail.com";
$emailpassword  = "support@bodyandsoulrelax.com";
$site_email  = "support@bodyandsoulrelax.com";
$host = 'mail.bodyandsoulrelax.com';
$sitephone  = "0744 3961 597";
$sitephone2 = "0781 0556 515";
$siteaddress  = "At Caversham Houses, 18 kingston Gardens Beddington Surrey Cro 4tx";


session_start();




// define('PAYPAL_CLIENT_ID', 'AawF0X5PzfwTzTdKq3Y25y2P49b8cnuGh01kkIPT_-QH0nMu4X511HnYgXbt9kbUTR1uoKrIYzGZ1r72');
// define('PAYPAL_SECRET', 'AawF0X5PzfwTzTdKq3Y25y2P49b8cnuGh01kkIPT_-QH0nMu4X511HnYgXbt9kbUTR1uoKrIYzGZ1r72');
// define('PAYPAL_API_URL', 'https://api-m.sandbox.paypal.com'); // Use 'https://api-m.paypal.com' for live



// LIVE ACCOUNT ONLINE DETAILS
define('PAYPAL_CLIENT_ID', 'ASUj5StyiTIb-N-wjmHUf17SVdt_twn-uLvO-4qNM0pT5nEwerliGetNzz6J62d4TohLaVVzO4pXE7iz');
define('PAYPAL_SECRET', 'ELmD6frylcUjUAVGHhqcAV_58TojvitJg9u3GQVBdEeVBw0WANteUZnxLE25j5IYfYVPZvn-IZC0-Xwv');
define('PAYPAL_API_URL', 'https://api-m.paypal.com'); // Use 'https://api-m.paypal.com' for live


function getAccessToken()
{
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, PAYPAL_API_URL . "/v1/oauth2/token");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_USERPWD, PAYPAL_CLIENT_ID . ":" . PAYPAL_SECRET);
    curl_setopt($ch, CURLOPT_POSTFIELDS, "grant_type=client_credentials");

    $response = curl_exec($ch);
    curl_close($ch);

    $json = json_decode($response, true);
    return $json['access_token'] ?? null;
}







