<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Danh Sách số sim</title>
</head>
	<link rel="stylesheet" href="bootstrap5/css/bootstrap.css">
	<style>	
	.lk a{text-decoration: none;margin-left: 20px}	
	</style>
<body>

	<?php 
	$search = isset($_POST['search'])?$_POST['search']:'';
	include 'connect.php';	
	if ($search == '') {
		$sql = "SELECT * FROM tbl_sosim  ";
	}else {
	
	$sql = "select * from tbl_sosim where so like '%$search%'" ;
	}
	// echo 'string:'.$sql;
	$result = $conn->query($sql);

 	?>
 	<?php include 'menu.php' ?>
 	<form action="" method="">
 		<div class="container">
 			<!-- row alert -->
 		<div class="row">
 			<div class="col-sm-12">
 				<div class="alert alert-success" role="alert">
 				    <center><strong>ok</strong> </center>
 				</div>
 			</div>
 		</div>
 	</div>
 	<div class="container">
 		<div class="row">
 			<div class="col-sm-8 offset-sm-2">
 				<table class="table table-bordered table-inverse table-hover">
		 		<thead>
		 			<tr>
		 				<th>ID</th>
		 				<th>Số</th>
		 				<th>Giá</th>
		 				<th>Thao Tác</th>
		 			</tr>
		 		</thead>
		 		<tbody>
				<?php
					if ($result->num_rows > 0) {
						while ($row = $result->fetch_assoc()) {
							echo '<tr>';
							echo '<td>'.$row['id'].'</td>';
							echo '<td>'.$row['so'].'</td>';
							echo '<td>'.$row['gia'].'</td>';
							?><td><a href="http://localhost/web/qlss/xoasosim.php?id=
								<?php echo $row['id'] ?>" class="btn btn-danger">
											Xóa</a>
							 <a href="http://localhost/web/qlss/suasosim.php?id=<?php echo $row['id'] ?>" class="btn btn-warning">
											Sửa</a></td>	
						<?php
							echo '</tr>';
						}
					} else {
						echo 'Khong co ban ghi nao';
					}
				  ?>
		 			
		 		</tbody>
		 	</table>
 			</div>
 		</div>
 	</div>
	<div class="container">
		<div class="row">
			<div class="col-sm-12 offset-sm-4 lk">
				<a href="http://localhost/web/qlss/themsosim.php">
					<input type="Button" value="Thêm">
				</a>
				<a href="http://localhost/web/qlss/timkiemsosim.php">
					<input type="Button" value="Tìm Kiếm">
				</a>
			</div>
			
		</div>
	</div>
 	</form>
 	
</body>
</html>


 	
