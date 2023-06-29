<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Danh Sach Lop</title>
</head>
<body>
	
	<form action="htmlController.php" method="POST">
	<input type="text" name="hoTen"><br><br>
	<textarea name="diaChi" id="" cols="50" rows="10"></textarea><br>
	<select name="gt" id="">
		<option value="Nam">Nam</option>
		<option value="Nữ">Nữ</option>
		<option value="Khác">Khác</option>
	</select><br>
	<select name="mh[]" id="" multiple="list"  >
		<option value="Nam">PHP</option>
		<option value="Nữ">C</option>
		<option value="C#">C#</option>
		<option value="java">java</option>
		<option value="android">android</option>
		<option value="web">web</option>
	</select>
	<br>
	<input type="hidden" name="id">
	<input type="checkbox" name="soThich[]" value="Reading">Reading</input>
	<input type="checkbox" name="soThich[]" value="travel">Travel <br>
	Giới Tính của Bạn Là Gì? <br>
	<input type="radio" name="1" >Nam
	<input type="radio" name="1" >Nữ
	<input type="radio" name="1" >Khác
	<br><input type="text">
	<input type="submit" value="login">&nbsp&nbsp
	<input type="reset" value="reset"><br>

	<ul type="1" style="border: double;width: 150px;margin-left: 500px;color: red";> 
		<li>Bai1 <a href="http://localhost/web/btOOPView.php" target="_blank">Chi tiết</a></li>
		<li>Bai2 <a href="http://localhost/web/btOOPView.php">Chi tiết</a></li>
		<li>Bai3 <a href="http://localhost/web/btOOPView.php">Chi tiết</a></li>
		<li>Bai4 <a href="http://localhost/web/btOOPView.php">Chi tiết</a></li>
	</ul>
	
	<br>
	<a href="https://www.google.com.vn/?hl=vi"><img src="http://localhost/71DCTT23_MVC/Public/Images/delete.png" alt=""></a>
	</form>
	
</body>
</html>