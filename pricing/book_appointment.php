<?php


include('../server/connection.php');


function generateCode($length = 8) {
    $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
    $code = '';

    for ($i = 0; $i < $length; $i++) {
        $code .= $characters[rand(0, strlen($characters) - 1)];
    }

    return $code;
}








if (isset($_POST['from']) == 'firstclass') {
    $service = $connection->real_escape_string($_POST['service']);
    $amount = $connection->real_escape_string($_POST['amount']);
    $hour = $connection->real_escape_string($_POST['hour']);
    

    $generatedCode = generateCode();

    // Insert into the appointments table
    $sql = "INSERT INTO appointments (`uuid`, `services`, `amount`, `hour`) 
            VALUES ('$generatedCode', '$service', '$amount', '$hour')";

    if ($connection->query($sql) === TRUE) {
        echo json_encode(["status" => "success", "message" => "Appointment booked successfully","data"=>$generatedCode]);
    } else {
        echo json_encode(["status" => "error", "message" => "Error:" . mysqli_error($connection)]);
    }
} else {
    echo json_encode(["status" => "error", "message" => "Invalid data"]);
}

$connection->close();
?>
