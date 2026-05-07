<?php

include "db.php";

$sql = "SELECT * FROM appointments";
$result = mysqli_query($conn, $sql);

while($row = mysqli_fetch_assoc($result)) {

    echo "
    <div class='appointment-card'>

        <h3>{$row['name']}</h3>

        <p>{$row['email']}</p>

        <p>{$row['appointment_date']}</p>

        <p>{$row['service']}</p>

        <p>Status: {$row['status']}</p>

        <a href='update_status.php?id={$row['id']}&status=Approved'>
            Approve
        </a>

        <a href='update_status.php?id={$row['id']}&status=Rejected'>
            Reject
        </a>

        <a href='delete_appointment.php?id={$row['id']}'>
            Delete
        </a>

    </div>
    ";
}

?>