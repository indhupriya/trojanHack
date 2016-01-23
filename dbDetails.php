<?php 
//user credentials to establish the connection with the sql database
$servername = "localhost";
$username = "root";
$password = "farhan";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// connect to the database db.
$checkUnique = 'use db';
$checkUniqueResult = $conn->query($checkUnique);
?>




