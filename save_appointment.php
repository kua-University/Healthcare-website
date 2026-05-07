<?php

include "db.php";

$name = $_POST['name'];
$email = $_POST['email'];
$date = $_POST['date'];
$service = $_POST['service'];

$sql = "INSERT INTO appointments(name, email, appointment_date, service)
VALUES('$name', '$email', '$date', '$service')";

if(mysqli_query($conn, $sql)){
    echo "Appointment Saved";
} else {
    echo "Error";
}

?>