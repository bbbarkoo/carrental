<?php


session_start();
include("dbconnect.php");

$pickupLocation = $_POST["pickuplocation"];
$dropLocation = $_POST["droplocation"];
$pickupDate = $_POST["pickupdate"];
$dropDate = $_POST["dropdate"];
$carID = $_POST['carIDOutput'];
$totalPrice = $_POST['output'];
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


// Use placeholders in the INSERT query
$query = "INSERT INTO Reservations(pickupLocation, dropLocation, pickupDate, dropDate, customerID, carID, totalPrice)
 VALUES ('$pickupLocation', '$dropLocation', '$pickupDate', '$dropDate', '{$_SESSION["customerId"]}', '$carID', '$totalPrice')";
$result = mysqli_query($conn, $query);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Close the connection
mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="refresh" content="3; url = payment.php" name="viewport"
        content="width=device-width, initial-scale=1.0">
    <title>Thank You</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="flex items-center justify-center h-screen bg-gray-100">
    <div class="text-center">
        <h1 class="text-2xl font-bold mb-4">You will be directed to payment page in 3 seconds!</h1>
        

    </div>
</body>

</html>