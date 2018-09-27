<?php
session_start();
include('connection.php');
$bh=$_POST['BH'];
$kk=$_POST['KK'];
$pt=$_POST['PT'];
$ll=$_POST['LL'];
$da=$_POST['DA'];
$pi=$_POST['PI'];
$pb=$_POST['PB'];
$pu=$_POST['PU'];
$lb=$_POST['LB'];
$bd=$_POST['BD'];
$bp=$_POST['BP'];
$lk=$_POST['LK'];

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

mysql_query("INSERT INTO polar (email, bh, kk, pt, ll, da, pi, pb, pu, lb, bd, bp, lk, date) 
VALUES ('$email', '$bh', '$kk', '$pt', '$ll', '$da', '$pi', '$pb', '$pu', '$lb', '$bd', '$bp', '$lk', now())");

header("location: products.php?remarks=success");

mysql_close($con);

?>