<?php
    session_start();
    include ("dbconnect.php");
 
$email = $_POST["email"];
$subject = $_POST["subject"];
$message = $_POST["message"];

    $query = "INSERT INTO Contacts(email,subject,message) 
    VALUES('$email','$subject','$message')";
    $result =mysqli_query($conn,$query);
    mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="refresh" content="3; url = index2.php" name="viewport"
        content="width=device-width, initial-scale=1.0">
    <title>Thank You</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="flex items-center justify-center h-screen bg-gray-100">
    <div class="text-center">
        
    <h1 class="text-2xl font-bold mb-4">We received your message.</h1>
    <h2 class="text-2xl font-bold mb-4">You will be directed to home in 3 seconds!</h2>

    </div>
</body>

</html>