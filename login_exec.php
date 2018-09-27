<?php
	//Start session
	session_start();
 
	//Include database connection details
	require_once('connection.php');
 
	//Array to store validation errors
	$errmsg_arr = array();
 
	//Validation error flag
	$errflag = false;
 
	//Function to sanitize values received from the form. Prevents SQL injection
	function clean($str) {
		$str = @trim($str);
		if(get_magic_quotes_gpc()) {
			$str = stripslashes($str);
		}
		return mysql_real_escape_string($str);
	}
 
	//Sanitize the POST values
	$username = clean($_POST['email']);
	$password = clean($_POST['password']);
 
	//Input Validations
	if($username == '') {
		$errmsg_arr[] = 'Sila masukkan emel.';
		$errflag = true;
	}
	if($password == '') {
		$errmsg_arr[] = 'Sila masukkan kata laluan.';
		$errflag = true;
	}
 
	//If there are input validations, redirect back to the login form
	if($errflag) 
	{
		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
		session_write_close();
		header("location: login.php");
		exit();
	}
 
	if($username == 'Kainco@yahoo.com' && $password == '0000')
	{
	header("location: admin.php");
	exit();
	} 
 
 	
	//Create query
	$qry="SELECT * FROM member WHERE email='$username' AND password='$password'";
	$result=mysql_query($qry);
	
 
	//Check whether the query was successful or not
	if($result) 
	{
		if(mysql_num_rows($result) > 0) 
		{
			//Login Successful
			$qry2="SELECT * FROM polar WHERE email = '$username' 
			AND pol_id = (SELECT max(pol_id) FROM polar WHERE email = '$username')";
			$result2=mysql_query($qry2);
			
			session_regenerate_id();
			$member = mysql_fetch_assoc($result);
			$polar = mysql_fetch_assoc($result2);
			
			$_SESSION['MEM_ID'] = $member['mem_id'];
			$_SESSION['EMAIL'] = $member['email'];
			$_SESSION['PASSWORD'] = $member['password'];
			$_SESSION['NAME'] = $member['name'];
			$_SESSION['CONTACT'] = $member['contact'];
			$_SESSION['ADDRESS'] = $member['address'];
			
			
			$_SESSION['BH'] = $polar['bh'];
			$_SESSION['KK'] = $polar['kk'];
			$_SESSION['PT'] = $polar['pt'];
			$_SESSION['LL'] = $polar['ll'];
			$_SESSION['DA'] = $polar['da'];
			$_SESSION['PI'] = $polar['pi'];
			$_SESSION['PB'] = $polar['pb'];
			$_SESSION['PU'] = $polar['pu'];
			$_SESSION['LB'] = $polar['lb'];
			$_SESSION['BD'] = $polar['bd'];
			$_SESSION['BP'] = $polar['bp'];
			$_SESSION['LK'] = $polar['lk'];
			
			session_write_close();
			if($_SESSION['BH'] == '0' && $_SESSION['KK'] == '0' 
			&& $_SESSION['PT'] == '0' && $_SESSION['LL'] == '0'
			&& $_SESSION['DA'] == '0' && $_SESSION['PI'] == '0'
			&& $_SESSION['PB'] == '0' && $_SESSION['PU'] == '0'
			&& $_SESSION['LB'] == '0'
			&& $_SESSION['BD'] == '0'
			&& $_SESSION['BP'] == '0'
			&& $_SESSION['LK'] == '0')
 			{
 			header("location: newmeasure2.php"); 
 			}
 			else
 			{
			header("location: printmeasure.php");
			}
			exit();
		}
		
		else 
		{
			//Login failed
			$errmsg_arr[] = 'Emel dan kata laluan salah, sila cuba lagi.';
			$errflag = true;
			if($errflag) 
			{
				$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
				session_write_close();
				header("location: login.php");
				exit();
			}
		}
	}
	
	else 
	{
		die("Query failed");
	}
?>