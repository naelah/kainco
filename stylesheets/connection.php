<?php
$mysql_hostname = "mysql2.000webhost.com";
$mysql_user = "a7085228_kainco";
$mysql_password = "Kainco456";
$mysql_database = "a7085228_kainco";
$prefix = "";
$bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Could not connect database");
mysql_select_db($mysql_database, $bd) or die("Could not select database");
?>