<?php
session_start();
include('connection.php');
$email=$_POST['email'];
$password=$_POST['password'];
$name=$_POST['name'];
$contact=$_POST['contact'];
$address=$_POST['address'];

//Create query
	$qry="SELECT * FROM member WHERE email='$email'";
	$result=mysql_query($qry);
 
	//Check whether the query was successful or not
	
		if(mysql_num_rows($result) > 0) 
		{
			
			header("location: register_error.html");
			
		}

else
{
mysql_query("INSERT INTO member (email, password, name, contact, address, date) VALUES ('$email', '$password', '$name', '$contact', '$address', now())");
mysql_query("INSERT INTO polar (email) VALUES ('$email')");

header("location: register_success.php?remarks=success");
}
mysql_close($con);

?>
