<?php

$name = $_POST['name'];
$message = $_POST['message'];

$host = "localhost";
$user = "syzig7h4_root";
$passwd = "Acyborg#1";
$database = "syzig7h4_nibblecircle";
mysql_connect($host,$user,$passwd) or die (mysql_error());
mysql_select_db($database);

mysql_query("INSERT INTO reviews (name, message) VALUES ('$name', '$message') ");

$location = "index.php";
header( "Location: $location" );

?>