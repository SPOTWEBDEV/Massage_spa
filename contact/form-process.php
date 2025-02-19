<?php

include('../server/connection.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Collect form data and sanitize it
    $name = $connection->real_escape_string($_POST['fullname']);
    $email = $connection->real_escape_string($_POST['email']);
    $phone = $connection->real_escape_string($_POST['phone']);
    $subject = $connection->real_escape_string($_POST['subject']);
    $msg = $connection->real_escape_string($_POST['message']);

    // Insert data into database
    $sql = "INSERT INTO contact_messages (name, email, phone, subject, message) 
            VALUES ('$name', '$email', '$phone', '$subject', '$msg')";

    if ($connection->query($sql) === TRUE) {
        // If insertion is successful, show success alert
        echo "success";
    } else {
        // If there was an error during insertion, show error alert
        // echo "There was an error sending your message. Please try again later.";
        echo mysqli_error($connection);
    }
}
