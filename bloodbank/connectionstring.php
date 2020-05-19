<?php
	session_start();
	$dbinfo="mysql:dbname=ebloodbank;host=localhost";
	$username="root";
	$password="";
	$conn=new PDO($dbinfo,$username,$password,array(PDO::ATTR_AUTOCOMMIT=>false));
?>