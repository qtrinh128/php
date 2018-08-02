<!DOCTYPE html>
<html>
<head>
	<title>Thêm bệnh nhân</title>
	<link rel="stylesheet" type="text/css" href="public/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="public/css/main.css">
	<script type="text/javascript" src="public/js/bootstrap.js"></script>
</head>
	<body>
			<div class="container col-sm-5">
				<h3 class="text-center">THÊM NHÂN VIÊN</h3>
			<form action="?controller=BenhNhan&action=themBenhNhan" method="POST">
			<div class="form-group">
				<label for="email">Tên bệnh nhân</label>
				<input type="text" class="form-control" id="email" name="tenbenhnhan">
			</div>
			<div class="form-group">
				<label for="pwd">Năm sinh</label>
				<input type="date" class="form-control" id="pwd" name="ngaysinh">
			</div>
			<div class="form-group">
				<label for="pwd">Ngày vào viện</label>
				<input type="date" class="form-control" id="pwd" name="ngaynhapvien">
			</div>
			<div class="form-group">
				<label for="pwd">Ngày ra viện</label>
				<input type="date" class="form-control" id="pwd" name="ngayravien">
			</div>
			<div class="form-group">
				<label for="sel1">Chọn khoa</label>
				<select class="form-control" id="sel1" name="makhoa">
					<?php foreach ($khoa as $key): ?>
							<option value="<?php echo $key['id'] ?>"><?php echo $key['tenkhoa'] ?></option>
					<?php endforeach ?>
				</select>
			</div>
			<input type="submit" class="btn btn-primary" name="add" value="Thêm">
			<input type="reset" class="btn btn-danger" name="" value="Nhập lại">
		</form>
		<h1></h1>
		<a class="btn btn-primary"  href="?controller=BenhNhan&action=hienThiBenhNhan">Quay lại</a>
	</div>	
</body>
</html>