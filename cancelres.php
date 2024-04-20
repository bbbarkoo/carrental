<?php
session_start();
include("dbconnect.php");

$resID = $_POST['resID'];

$stmt = $conn->prepare("DELETE FROM Reservations WHERE resID = ?");
$stmt->bind_param("i", $resID);
$stmt->execute();
?>