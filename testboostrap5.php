<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Test BS5</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="bootstrap5/css/bootstrap.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="alert alert-success" role="alert">
					<center><strong">Well done!</strong> You successfully read this important alert message.</center>
				</div>
			</div>
		</div>
	</div>
	
	<div class="conainer">
		<div class="row">
			<div class="col-sm-6 offset-sm-3" >
				<form>
		
					<fieldset class="form-group">
						<label for="exampleInputEmail1">Họ Tên</label>
						<input type="email" class="form-control"  placeholder="Nhập Họ Tên">
						<!-- <small class="text-muted">We'll never share your email with anyone else.</small> -->
					</fieldset>
					<fieldset class="form-group">
						<label for="exampleInputPassword1">Password</label>
						<input type="password" class="form-control" placeholder="Nhập Password">
					</fieldset>
					<fieldset class="form-group">
						<label for="exampleSelect1">Địa chỉ</label>
						<select class="form-control" id="eexampleSelect11">
							<option>Hà Nội</option>
							<option>Hà Nam</o</option>
							<option>Hà Tây</o</option>
							<option>Hà Tây</o</option>
							<option>Hà Tây</o</option>
						</select>
					</fieldset>
					<fieldset class="form-group">
						<label for="exampleTextarea">Email</label>
						<textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
					</fieldset>
					<fieldset class="form-group">
						<label for="exampleInputFile">Avatar File</label>
						<input type="file" class="form-control-file" id="exampleInputFile">
						
					</fieldset>
					<div class="radio">
						<label>
							<input type="radio" name="optionsRadios" id="optionsRadios1" value="Nam" checked>
							Nam
						</label>
					</div>
					<div class="radio">
						<label>
							<input type="radio" name="optionsRadios" id="optionsRadios2" value="Nữ">
							Nữ
						</label>
					</div>
					<div class="radio">
						<label>
							<input type="radio" name="optionsRadios" id="optionsRadios3" value="Khác">
							Khác
						</label>
					</div>
					<div class="checkbox">
						<label>
							<input type="checkbox"> xem Phim
							<input type="checkbox"> Thể thao
							<input type="checkbox"> web
						</label>
					</div>
					<button type="submit" class="btn btn-primary">Submit</button>
				</form>
			</div>
		</div>
	</div>

</body>
</html>