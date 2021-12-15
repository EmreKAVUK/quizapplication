<?php 
	$hostname ="localhost";
	$dbname = "quiz";
	$username="root";
	$password="";

//Create mysqli object
	$mysqli = new mysqli($hostname,$username,$password,$dbname);
	//Error Handling
	if($mysqli->connect_error){
		echo 'Connect is Failed'.$mysqli->connect_error;
		exit();
	}
?>