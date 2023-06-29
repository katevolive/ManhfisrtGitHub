<?php 
		$themSo=isset($_POST['themSo']) ? $_POST['themSo'] : '';
		$themGia=isset($_POST['themGia']) ? $_POST['themGia'] : '';
		// echo $themSo.' - '.$themGia;
		include 'connect.php';//nhung 1 doan ma~ trong file php vao
		$sql = "INSERT INTO tbl_sosim values(null,'$themSo',$themGia)";
		if ($conn->query($sql)) {
			echo '<div class="alert alert-success" role="alert">
				<strong>Thêm Mới Thành Công</strong>
				</div>';
			
		}else{
			echo '<div class="alert alert-warning" role="alert">
				<strong>Thêm Mới Thất Bại</strong>
				</div>';
		}
		$conn->close();
	 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Thêm số sim</title>
</head>
<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"> -->
	<link rel="stylesheet" href="bootstrap5/css/bootstrap.css">
<body>
	<?php include 'menu.php' ?>
	<form action="" method="post">
		<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="jumbotron">
					<h1 style="text-align: center;" class="display-3">THÊM MỚI SỐ SIM</h1>
					
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-6 offset-sm-3">
				<form>
					<fieldset class="form-group">
						<label for="exampleInputEmail1">Thêm số</label>
						<input type="text" class="form-control" id="exampleInputEmail1" name="themSo">
					</fieldset>
					<fieldset class="form-group">
						<label for="exampleInputPassword1">Thêm Giá</label>
						<input type="text" class="form-control" name="themGia">
					</fieldset>
					
					<button style="margin-top: 10px" type="submit" name="btnThem" class="btn btn-info">Thêm	</button>
				</form>
			</div>
		</div>
	</form>
	
	</div>
	
</body>
</html>