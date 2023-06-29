<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Đăng Ký</title>
</head>
<style>
	.col1{
		height: 30px;
		margin-left: 10px;
		border: 1px solid;
	}
	.col2{
		border: 1px solid;

	}
</style>
<body>
	<form action="http://localhost/web/kqdangky.php" method="post">
		<table style="width: 350px;border: 1px solid;">
			<tr>
				<td style="text-align: center;padding: 4px" class="col1" colspan="2" >ĐĂNG KÝ</td>
			</tr>
			<tr>
				<td class="col1">Full Name</td>
				<td class="col2"><input type="text" name="hoTenFull" placeholder="Nhập fullname"></td>
			</tr>
			<tr>
				<td class="col1">User Name</td>
				<td class="col2"><input type="text" name="hoTen" placeholder="Nhập tên"></td>
			</tr>
			<tr>
				<td class="col1">Password</td>
				<td class="col2"><input type="text" name="Password" placeholder="Nhập mật khẩu"></td>
			</tr>
			<tr>
				<td class="col1">Nhập lại <br> Password</td>
				<td class="col2"><input type="text" name="NLPassword" placeholder="Nhập lại mật khẩu"></td>
			</tr>
			<tr>
				<td class="col1">Giới Tính</td>
				<td class="col2"><input type="radio" name="gt[]" value="Nam">Nam &nbsp&nbsp&nbsp<input 		type="radio" name="gt[]" value="Nữ">Nữ</td>
			</tr>
			<tr>
				<td class="col1">Ngày Sinh</td>
				<td class="col2"><input type="date" name="ns"></td>
			</tr>
			<tr>
				<td class="col1">Địa Chỉ</td>
				<td class="col2"><textarea name="dc" id="dc" cols="15" rows="2"></textarea></td>
			</tr>
			<tr>
				<td class="col1">Avatar</td>
				<td class="col2"><input type="submit" name="Avatar" value="choose file"></td>
			</tr>
			<tr>
				<td class="col1">Sở Thích</td>
				<td class="col2"><input type="checkbox" name="st[] " value="Xem phim">Xem Phim 
								<input type="checkbox" name="st[]" value="Thể thao">Thể Thao
								 <input type="checkbox" name="st[]" value="Web">Web</td>
			</tr>
			<tr>
				<td style="text-align: center;height: 35px" class ="col2" colspan="2">
					<input style="padding: 5px" type="submit" name="ok" value="Ok">
					<input style="padding: 5px;margin-left: 10px" type="reset" name="reset" value="Reset"></td>
			</tr>
		</table>
	</form>
</body>
</html>