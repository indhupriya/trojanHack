<?php

request_once("dbDetails");

$checkUnique = 'SELECT * from users where username = "$username" and name = "$name")';
$checkUniqueResult = mysqli->query($checkUnique);

if($checkUniqueResult){
	if($checkUniqueResult->num_rows === 0){
			$insertStmt = 'INSERT INTO users values("$name","$username","$password")';
			$insertStmtResult = $mysqli->query($insertStmt);
			$status = 1;	
	}
	else{
		$status = 0;
	}
}

?>
