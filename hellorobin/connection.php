<?php
$servername = "mysql.hostinger.com";
$database = "u889161915_hello_robin";
$username = "u889161915_henryh";
$password = "henry933h";

// Create connection

$con = mysqli_connect($servername, $username, $password, $database);

// Check connection

if (!$con) {

    die("Connection failed: " . mysqli_connect_error());

}
// echo "Connected successfully";
mysqli_close($conn);
?>