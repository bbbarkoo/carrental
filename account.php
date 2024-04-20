<?php
    include ("dbconnect.php");
	
    
$name = $_POST["name"];
$lastname = $_POST["lastname"];

$email = $_POST["email"];
$birthdate = $_POST["birthdate"];
$address = $_POST["address"];
$password = $_POST["password"];

    $query = "INSERT INTO Customers(customerName,customerLastName,email,birthdate,customerAddress,password) 
    VALUES('$name','$lastname','$email','$birthdate','$address','$password')";
    $result =mysqli_query($conn,$query);
    //or die("DB write unsuccessful");
    // if($result){
    //    echo "Write successful";
    // }
    mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account Created</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="flex items-center justify-center h-screen bg-gray-100">
    <div class="text-center">
        <h1 class="text-2xl font-bold mb-4">You've created your account!</h1>
        <p class="mb-8">Please login to continue.</p>
        <a href="login.html" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-700">Login</a>
    </div>
</body>
</html>