<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Danh Sách nhân sự</title>
	<link rel="stylesheet" href="../bootstrap5/css/bootstrap.css">
</head>

<body>
	<?php include 'connect.php' ?>
	<div class="container">
		<div class="row">
			<div class="jumbotron">
				<h1 class="display-3" align="center">DANH SÁCH NHÂN SỰ</h1>

			</div>
		</div>
	</div>
	<!-- hết container -->
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<table class="table table-striped table-inverse table-hover">
					<thead>
						<tr>
							<th>STT</th>
							<th>Họ Tên</th>
							<th>Ngày Sinh</th>
							<th>Giới Tính</th>
							<th>Chuyên Ngành</th>
							<th>Chức Vụ</th>
							<th>Địa Chỉ</th>
							<th>Hình Ảnh</th>
						</tr>
					</thead>
					<tbody>
						<?php
						$sql = "select id,hoten,date_format(ngaysinh,'%d/%m/%Y') as ngaysinh,gioitinh,chuyennganh,chucvu,diachi,anh from tbl_ns";
						$result = $conn->query($sql);
						$i = 1;
						if ($result->num_rows > 0) {
							while ($row = $result->fetch_assoc()) {
								echo '<tr>';
								echo '<td>' . $i++ . '</td>';
								echo '<td>' . $row['hoten'] . '</td>';
								echo '<td>' . $row['ngaysinh'] . '</td>';
								if ($row['gioitinh'] == 0) {
									echo '<td>Nữ</td>';
								} elseif ($row['gioitinh'] == 1) {
									echo '<td>Nữ</td>';
								} else {
									echo '<td>Khác</td>';
								}
								echo '<td>' . $row['chuyennganh'] . '</td>';
								echo '<td>' . $row['chucvu'] . '</td>';
								echo '<td>' . $row['diachi'] . '</td>';
								echo '<td>' . '<img src="' . $row['anh'] . '" alt="" width="100px" height="70px">' . '</td>';
								echo '</tr>';
							}
						} else {
							echo '<tr><td colspan="7"> Không có dữ liệu</td></tr>';
						}
						?>

					</tbody>
				</table>
			</div>
		</div>
	</div>
</body>

</html>