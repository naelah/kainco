<?php
session_start();
include('connection.php');
$size=$_POST['size'];

session_regenerate_id();
$_SESSION['BH'] = $bh;
$_SESSION['KK'] = $kk;
$_SESSION['PT'] = $pt;
$_SESSION['LL'] = $ll;
$_SESSION['DA'] = $da;
$_SESSION['PI'] = $pi;
$_SESSION['PB'] = $pb;
$_SESSION['PU'] = $pu;
$_SESSION['LB'] = $lb;
$_SESSION['BD'] = $bd;
$_SESSION['BP'] = $bp;
$_SESSION['LK'] = $lk;

session_write_close();


$email = $_SESSION['EMAIL'];

//Create query

switch ($size) 
{
    case 'xs':
        mysql_query("INSERT INTO polar (email, bh, kk, pt, ll, da, 
        pi, pb, pu, lb, bd, bp, lk, date) 
		VALUES ('$email', '14', '16', '12', '21', '37', '25', '27', 
		'38', '39', '19', '20', '39', now())");;
        break;
        
    case 's':
        mysql_query("INSERT INTO polar (email, bh, kk, pt, ll, da, 
        pi, pb, pu, lb, bd, bp, lk, date) 
		VALUES ('$email', '15', '17', '14', '22', '40', '26', '28', 
		'38', '39', '19', '20', '40', now())");;
        break;
        
    case 'm':
        mysql_query("INSERT INTO polar (email, bh, kk, pt, ll, da, 
        pi, pb, pu, lb, bd, bp, lk, date) 
		VALUES ('$email', '15.5', '18', '15', '22', '41', '28', '30', 
		'41', '40', '18', '22', '41', now())");;
        break;
        
    case 'l':
        mysql_query("INSERT INTO polar (email, bh, kk, pt, ll, da, 
        pi, pb, pu, lb, bd, bp, lk, date) 
		VALUES ('$email', '16', '19', '15', '22', '43', '31', '33', 
		'43', '40', '18', '22', '41', now())");;
        break;
}

header("location: products.php?remarks=success");

?>