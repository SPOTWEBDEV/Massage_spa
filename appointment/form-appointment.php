<?php


// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize input data
    $name = $connection->real_escape_string($_POST['name']);
    $email = $connection->real_escape_string($_POST['email']);
    $phone = $connection->real_escape_string($_POST['phone']);
    $services = $connection->real_escape_string($_POST['services']);
    $date = $connection->real_escape_string($_POST['date']);

    // Prepare SQL query to insert data
    $sql = "INSERT INTO appointments (name, email, phone, services, appointment_date) 
            VALUES ('$name', '$email', '$phone', '$services', '$date')";

    // Execute the query
    if ($connection->query($sql) === TRUE) {
        echo "New appointment booked successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $connection->error;
    }
}
