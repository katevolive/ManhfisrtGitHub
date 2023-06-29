<?php 
	$host = "localhost";
	$username="root";
	$password = "";
	$dbname ="qlss";
	$conn = new mysqli($host,$username,$password,$dbname);
	//ceheck conection
	if ($conn->connect_error ){
		echo 'failed: '.$conn->connect_error;

	}
		// echo 'connected successful';
 ?>