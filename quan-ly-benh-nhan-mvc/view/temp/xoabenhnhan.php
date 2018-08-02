<!DOCTYPE html>
<html>
<head>
	<title>Danh sách bệnh nhân</title>
	<link rel="stylesheet" type="text/css" href="public/css/main.css">
	<link rel="stylesheet" type="text/css" href="public/css/bootstrap.css">
	<script type="text/javascript" src="public/js/bootstrap.js"></script>
</head>
<body>
	<div <div  class="container col-sm-8">
		<p>Bạn có chắc chắn xóa bệnh nhân <?php echo $benhnhan['tenbenhnhan'] ?></p>
		<a class="btn btn-danger" href="?controller=BenhNhan&action=xoaBenhNhan&id=<?php echo $benhnhan['mabenhnhan']?>">Xóa</a>
		<a class="btn btn-primary"  href="?controller=BenhNhan&action=hienThiBenhNhan">Quay lại</a>
	</div>
</body>
</html>