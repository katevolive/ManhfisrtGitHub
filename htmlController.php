<?php 
		$hoTen=isset($_POST['hoTen']) ? $_POST['hoTen'] : '';
		echo '<br> xin chao: '.$hoTen.'<br>';
		$soThich=isset($_POST['soThich']) ? $_POST['soThich']: '';
		$gt=isset($_POST['gt']) ? $_POST['gt']:"";
		echo '<br> xin chao: '.$gt.'<br>';
		
		$mh=isset($_POST['mh']) ? $_POST['mh'] : '';
		echo '<br> xin chao: '.$gt.'<br>';


		echo '<pre>';
		var_dump($mh);
		echo '</pre>';
		
		foreach ($mh as $value) {
			echo '<br>'.$value;
		}

	 ?>