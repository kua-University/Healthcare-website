<?php

include "db.php";

$id = $_GET['id'];

$sql = "DELETE FROM appointments WHERE id=$id";

mysqli_query($conn, $sql);

header("Location: ../admin.php");

?>