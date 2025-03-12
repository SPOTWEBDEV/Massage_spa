<?php

include('../server/connection.php');
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize input data
    $name = $connection->real_escape_string($_POST['name']);
    $email = $connection->real_escape_string($_POST['email']);
    $phone = $connection->real_escape_string($_POST['phone']);
    $services = $connection->real_escape_string($_POST['services']);
    $date = $connection->real_escape_string($_POST['date']);
    $amount = $connection->real_escape_string($_POST['amount']);
    $message = $connection->real_escape_string($_POST['message']);

    // Prepare SQL query to insert data
    $sql = "INSERT INTO appointments (name, email, phone, services, appointment_date,amount) 
            VALUES ('$name', '$email', '$phone', '$message', '$date','$amount')";

    // Execute the query
    if ($connection->query($sql) === TRUE) {
        echo "SUCCESS";
    } else {
        echo  mysqli_error($connection);
    }
}
