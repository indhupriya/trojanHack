<?php

#$email = $repeatpassword = $password = " ";
#$email_error = $repeat_password_error = $password_error = "";
	
if($_SERVER["REQUEST_METHOD"] == "POST")
{
	if (empty($_POST["emailid"]))
    {
		$email_error = "MISSING";
        echo "no value";
        exit;
	}
	else{
		$email = $_POST["emailid"];
	}
	
	if (empty($_POST["userpasswd"])){
		$password_error = "MISSING";
        exit;
	}
	else{
		$password1 = $_POST["userpasswd"];
	}
	
require_once("dbdetails.php");
   
// Insert an element to the database
$selectStmt = "select * from users where username='$email' and password='$password1'";
$queryres=$conn->query($selectStmt);
if($queryres->num_rows > 0 ){
echo " user logged in";
}
else {    
header("Location:index.php");
}
$conn->close();

}
?>
