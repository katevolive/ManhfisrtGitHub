<?php 
	$host = "localhost";
	$username = "root";
	$password = "";
	$dbname = "qlns";

	$conn = new mysqli($host,$username,$password,$dbname);
	if ($conn->connect_error) {
		die('looxi'.$connect_error);
	}else {
		// echo 'ket noi thanh cong';
	}
 ?>