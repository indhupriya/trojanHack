<?php

request_once("dbDetails.php");

$checkUser = 'SELECT * from users where username="$username" and password = "$password"';
$checkUserResults = $mysqli->query($checkUser);

if($checkUserResults){
	$status = 1;
}
else{
	$status = 0;
}


?>

