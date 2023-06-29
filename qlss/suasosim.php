<?php 
		$id=isset($_GET['id']) ? $_GET['id'] : -1;
		$themSo=isset($_GET['themSo']) ? $_GET['themSo'] : '';
		$themGia=isset($_GET['themGia']) ? $_GET['themGia'] : '';
		include 'connect.php';

		if (isset($_GET['id'])) {
        $sql="select * from tbl_sosim where id=".$id;
        $result=mysqli_query($conn,$sql);
        if($result!=null || $result->num_rows>0){
        	// bth nhieu cai nen moi co while. 1 cai thi k can while
        	$row1 = $result->fetch_assoc();
        	// echo '11111111111';
            //while ($row1 = $result->fetch_assoc()) {
            	// echo $row1['so'];
            	// echo $row1['gia'];
            //}
        }else {
        	echo 'Khoong tim thay thong tin';
        }
    }
        if(isset($_POST['btnSua'])) {
        $sql1="update tbl_sosim set so=".$themSo." , gia=".$themGia." where id=".$id."";
        $result=mysqli_query($conn,$sql1);
       if ($conn->query($sql1)) {
           echo "Sửa thanh cong!!!";
            // header('location:danhsachsosim.php');
            // die();
        }else{
           echo "Sửa that baiii";
          }
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
	<form action="sua.php" method="POST">
		<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="jumbotron">
					<h1 style="text-align: center;" class="display-3">SỬA SỐ SIM</h1>
					
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-6 offset-sm-3">
				<form>
					<input type="hidden" name="id" value="<?= $row1['id'] ?>">
					<fieldset class="form-group">
						<label for="exampleInputEmail1">Số</label>
						<input type="text" class="form-control" id="exampleInputEmail1" name="themSo" value="<?= $row1['so'] ?>">
					</fieldset>
					<fieldset class="form-group">
						<label for="exampleInputPassword1">Giá</label>
						<input type="text" class="form-control" name="themGia"
						value="<?= $row1['gia'] ?>">
					</fieldset>
					
					<button style="margin-top: 10px" type="submit" name="btnSua" class="btn btn-info">Sửa	</button>
				</form>
			</div>
		</div>
	</form>
	
	</div>
	
</body>
</html>