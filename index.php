<?php

$name = $username = $password = ""
$name_error = $username_error = $password_error = ""
	
if($_SERVER["REQUEST_METHOD"] == "POST"){
	if (empty($_POST["$name"])){
		$nameErr = "MISSING";
	}
	else{
		$name = $_POST["name"];
	}
	
	if (empty($_POST["$username"])){
		$nameErr = "MISSING";
	}
	else{
		$name = $_POST["username"];
	}
	
	if (empty($_POST["$password"])){
		$nameErr = "MISSING";
	}
	else{
		$name = $_POST["password"];
	}
	require_once("checkUnique.php");
	
}
?>



SET action=

if($status === 1){Welcome.php}
else $error = "USERNAME already exists"

