<?php 
	$hoTen = isset($_POST['hoTen']) ? $_POST['hoTen'] : '';
	$hoTenFull = isset($_POST['hoTenFull']) ? $_POST['hoTenFull'] : '';
	$Password = isset($_POST['Password']) ? $_POST['Password'] : '';
	$NLPassword = isset($_POST['NLPassword']) ? $_POST['NLPassword'] : '';
	$gt = isset($_POST['gt']) ? $_POST['gt'] : '';
	$ns = isset($_POST['ns']) ? $_POST['ns'] : '';
	$dc = isset($_POST['dc']) ? $_POST['dc'] : '';
	$Avatar = isset($_POST['Avatar']) ? $_POST['Avatar'] : '';
	$st=isset($_POST['st']) ? $_POST['st'] : '';
	$ok = isset($_POST['ok']) ? $_POST['ok'] : '';
	$reset = isset($_POST['reset']) ? $_POST['reset'] : '';
	echo '<br>'.$hoTen.'<br>'.$hoTenFull.'<br>'.$Password
		.'<br>'.$NLPassword.'<br>';
	
	foreach ($gt as $value) {
		echo $value.'<br>';
	}
	
	echo	$ns.'<br>'.$dc;

	foreach ($st as $value) {
		echo '<br>'.$value;
	}
		
 ?>