<?php
	$db_host='localhost';
	$db_user= 'root';
	$db_pass='';
	$db_name='messengerchat';
	
	//This is procedural method..we are implementing object oriented
	$connection= mysqli_connect($db_host,$db_user,$db_pass,$db_name) or die("Database Connection Failed".mysqli_error($connection));
	
	//this is object oriented method that didnt work apparantly
	//$connection = new mysqli($db_host,$db_name,$db_pass,$db_name) or die("Database Connection Failed:".$connection->connect_error);
	
	
?>