<?php

$username = $password = ""
$username_error = $password_error = ""
	
if($_SERVER["REQUEST_METHOD"] == "POST"){
	
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
	require_once("checkUser.php");
	
}

ACTION

if($status===1){
	Welcome.php
}
else{
	$error = "Username and password does not match";
}
