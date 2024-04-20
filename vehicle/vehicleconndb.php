<?php
// Database connection
define('dbusername', "");   //Enter your database username
define('dbpassword', "");   //Enter your database password
define('dbdatabase', "");   //Enter your database name
define('dbserver', "");     //Enter your database server


$conn = new mysqli(dbserver, dbusername, dbpassword, dbdatabase);
    

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else{
    // echo "Connected successfully";
}

?>

    