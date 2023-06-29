<?php 
	//giai pt bac 2 ax^2+bx+c=0
	$a = isset($_POST['hsa']) ? $_POST['hsa'] : '';
	$b = isset($_POST['hsb']) ? $_POST['hsb'] : '';
	$c = isset($_POST['hsc']) ? $_POST['hsc'] : '';
	$x="";$denta=($b*$b-4*$a*$c);
	if ($a != '' && $b != '' && $c!= '') {
	if ($a==0) {
		if ($b==0) {
			if ($c ==0) {
				$x="phuong trinh vo so nghiem";
			}else {
				$x="phuong trinh vo nghiem";
			}
				
		}else {
			$x="pt co 1 nghiem duy nhat: ".-($c/$b);
		}	
		
		}else {
			if ($denta >0) {

				$x1=((-$b+sqrt($denta))/(2*$a));
				$x2=((-$b-sqrt($denta))/(2*$a));
				
				$x="phuong trinh co 2 nghiem x1: ".$x1." x2: ".$x2;
			} else if ($denta==0) {
				$x1=((-$b)/(2*$a));
				$x="phuong trinh co nghiem kep x: ".$x1;
			} else {
				$x="phuong trinh vo nghiem";
			}
	}
	echo $x; 
	}
 ?>