
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>giai pt bac2</title>
</head>
<body>
	<form action="btOOP.php" method="POST">
		<center>
			<input type="hidden" name="persons" value="<?php $personsTemp ?>">
			<table>
			<tr>
				<th colspan="2"> Thêm mới người dùng</td>
			</tr>
			<tr>
				<td>Họ Tên:</td>
				<td><input type="text" name="hoTen" ></td>
			</tr>
			<tr>
				<td>Ngày Sinh:</td>
				<td><input type="date" name="ngaySinh" ></td>
			</tr>
			<tr>
				<td>Sdt:</td>
				<td><input type="number" name="Sdt" ></td>
			</tr>
			<tr>
				<td><input type="submit" value="Thêm"></td>
				<td><input type="submit" value="In"></td>
			</tr>
		</table>
		</center>
	
	</form>
</body>
</html>