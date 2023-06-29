<?php 
$sotienrut = isset($_POST['tien']) ? $_POST['tien'] : '';
	$soto50=$sotienrut/50000;
	$soto100=$sotienrut/100000;
	$soto200=$sotienrut/200000;
	$count=0;
	for ($i = 0; $i <=$soto50 ; $i++) {
		for ($j = 0; $j <=$soto100 ; $j++) {
			for ($k = 0; $k <=$soto200 ; $k++) {
				if (($i*50000+$j*100000+$k*200000)==$sotienrut) {
					$count++;
					echo 'Tim Thay phuong an '.$count.' : '.$i.' To 50k, '.$j.' To 100k, '
						.$k.' To 200k'.'<br>';
					
				}
			}
		}
	}
 ?>