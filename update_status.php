<?php

include "db.php";

$id = $_GET['id'];
$status = $_GET['status'];

$sql = "UPDATE appointments
SET status='$status'
WHERE id=$id";

mysqli_query($conn, $sql);

header("Location: ../admin.php");

?>