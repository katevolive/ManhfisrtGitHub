<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" http-equiv="refresh" content="0;url=danhsachsosim.php">
	<title>Sửa</title>
</head>
<body>
	<?php 
	$id =isset($_POST['id']) ? $_POST['id']:"";
	$so =isset($_POST['themSo']) ? $_POST['themSo']:"";
	$gia =isset($_POST['themGia']) ? $_POST['themGia']:"";
	// echo 'id='.$id;
	// echo 'so='.$so;
	// echo 'gia='.$gia;
	$sql= "update tbl_sosim set so='".$so."',gia='".$gia."' where id=".$id;
	include 'connect.php';
	 if ($conn->query($sql)) {
         ?>
			<script type="text/javascript">
				alert("Sửa Thành Công")
			</script>
         <?php
            die();
        }else{
           ?>
			<script type="text/javascript">
				alert("Sửa Thất Bại")
			</script>
         <?php
          }
        
		$conn->close();
 ?>
</body>
</html>
<?php 
	$id =isset($_POST['id']) ? $_POST['id']:"";
	$so =isset($_POST['themSo']) ? $_POST['themSo']:"";
	$gia =isset($_POST['themGia']) ? $_POST['themGia']:"";
	// echo 'id='.$id;
	// echo 'so='.$so;
	// echo 'gia='.$gia;
	$sql= "update tbl_sosim set so='".$so."',gia='".$gia."' where id=".$id;
	include 'connect.php';
	 if ($conn->query($sql)) {
           
            header('location:danhsachsosim.php');
            echo "Sửa thanh cong!!!";
            die();
        }else{
           echo "Sửa that baiii";
          }
        
		$conn->close();
 ?>