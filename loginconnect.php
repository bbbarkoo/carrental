<?php


session_start();
include("dbconnect.php");

$email = $_REQUEST['email'];
$password = $_REQUEST['password'];
$adminEmail = 'admin@admin.admin';  // Admin email
$adminPassword = 'admin';           // Admin password

$query = "SELECT customerId, password FROM Customers WHERE email = '" . $email . "'";
$result = mysqli_query($conn, $query) or die(mysqli_error($conn));

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        if ($password == $row['password']) {
            $_SESSION['customerId'] = $row['customerId']; // Store the customerId in a session variable
            if ($email == $adminEmail && $password == $adminPassword) {
                header("refresh:0;url=adminpanel.php");
                
            } else {
                // header("refresh:3;url=index2.php");
                echo '<!DOCTYPE html>
                <html lang="en">

                <head>
                    <meta charset="UTF-8">
                    <meta http-equiv="refresh" content="3; url = index2.php" name="viewport" content="width=device-width, initial-scale=1.0">
                    <title>Logged In</title>
                    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
                </head>

                <body class="flex items-center justify-center h-screen bg-gray-100">
                    <div class="text-center">
                        <h1 class="text-2xl font-bold mb-4">You succesfully logged in. You will be directed to home in 3 seconds!</h1>
                    </div>
                </body>

                </html>';
            }
            exit;
        } else {
            echo "<script>alert('Invalid email or password'); window.location.href = 'login.html';</script>";
        }
    }
}else {
    echo "<script>alert('Email not found'); window.location.href = 'login.html';</script>";
}

mysqli_close($conn);
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="refresh" content="3; url = index2.php" name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logged In</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="flex items-center justify-center h-screen bg-gray-100">
    <div class="text-center">
        <h1 class="text-2xl font-bold mb-4">You succesfully logged in. You will be directed to home in 3 seconds!</h1>


    </div>
</body>

</html>