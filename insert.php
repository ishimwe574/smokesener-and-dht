<?php
include "db.php";

$temperature = $_POST['temperature'];
$humidity    = $_POST['humidity'];
$smoke       = $_POST['smoke_level'];
$status      = $_POST['status'];

$sql = "INSERT INTO sensor_data (temperature, humidity, smoke_level, status)
VALUES ('$temperature', '$humidity', '$smoke', '$status')";

if (mysqli_query($conn, $sql)) {
    echo "Data inserted successfully";
} else {
    echo "Error: " . mysqli_error($conn);
}
?>