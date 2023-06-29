<link rel="stylesheet" href="bootstrap5/css/bootstrap.css">
<?php 
		// echo $themSo.' - '.$themGia;
		include 'menu.php';
		include 'connect.php';//nhung 1 doan ma~ trong file php vao
		$id=isset($_GET['id']) ? $_GET['id'] : -1;
		if ($id > 0) {
			$sql_delete = "DELETE FROM tbl_sosim WHERE id=".$id;
				if ($conn->query($sql_delete)) {
					?>
					<div class="alert alert-info" role="alert">
					    <center><strong>Xoá Thành Công!</strong></center>
					</div>
					<?php
    //        		 die();
				// header('location:danhsachsosim.php');
				}else{
				echo 'Xóa Thất Bại';
			}
		}else {
			echo 'id=0';
		}
		
		$conn->close();
	 ?>