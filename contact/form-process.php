<?php

include '../server/connection.php';


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Collect form data and sanitize it
    $name = $connection->real_escape_string($_POST['name']);
    $email = $connection->real_escape_string($_POST['email']);
    $phone = $connection->real_escape_string($_POST['phone']);
    $subject = $connection->real_escape_string($_POST['subject']);
    $msg = $connection->real_escape_string($_POST['message']);

    // Insert data into database
    $sql = "INSERT INTO contact (name, email, phone, subject, message) 
            VALUES ('$name', '$email', '$phone', '$subject', '$msg')";

    if ($connection->query($sql) === TRUE) {
        echo "SUCCESS";
    } else {
        echo mysqli_error($connection);
    }
}
