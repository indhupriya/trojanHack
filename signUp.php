<?php

#$email = $repeatpassword = $password = " ";
#$email_error = $repeat_password_error = $password_error = "";
	
if($_SERVER["REQUEST_METHOD"] == "POST")
{
	if (empty($_POST["emailid"]))
    {
		$email_error = "MISSING Email id";
        echo $email_error;
        exit;
	}
	else{
		$email = $_POST["emailid"];
	}
	
	if (empty($_POST["pwd"])){
		$password_error = "MISSING";
        echo "password missing";
	}
	else{
		$password1 = $_POST["pwd"];
	}
	
	if (empty($_POST["rptpwd"])){
		$repeat_password_error = "MISSING";
        echo $repeat_password_error;   
        
	}
    
    if( $_POST["rptpwd"] !== $password1 ) {
         echo "Passwords doesn't match";
         exit;         
    }  
        
        
    
require_once("dbdetails.php");

$querystring = "select * from users where username=('$email') ";
$checkunique = $conn->query($querystring);

// check if the user already exists
if($checkunique->num_rows>0) {
       echo "user already exists";
    
}
else {    
// Insert an element to the database
$insertStmt = "INSERT INTO users(username,password) values('$email','$password1')";
echo $insertStmt;
$insertStmtResult = $conn->query($insertStmt);
}
$conn->close();

}
?>
<html>
<head></head>
<body>
</script>    
</body>    
</html>
