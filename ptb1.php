<?php 
		$a = isset($_POST['csa']) ? $_POST['csa'] : '';
		$b = isset($_POST['csb']) ? $_POST['csb'] : '';
		if ($b>$a) {
			// $c = $_POST['csb']-$_POST['csa'];
			$c=$b-$a;
			if ($c<0) {
			$kq="khong hop le";
			echo $kq;
		}else if ($c<=100) {
			$kq=$c*1250;
			echo $kq;
		}else if ($c <= 150) {
			$c-=100;
			$kq=100*1250+$c*1550;
			echo $kq;
		}else if ($c<=200) {
			$c-=150;
			$kq=100*1250+50*1550+$c*1850;
			echo $kq;
		}else{
			$c-=200;
			$kq=100*1250+50*1550+50*1850+$c*2250;
			echo $kq;	
		}
	}
 ?>