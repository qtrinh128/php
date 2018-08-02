<!DOCTYPE html>
<html>
<head>
	<title>Danh sách bệnh nhân</title>
	<link rel="stylesheet" type="text/css" href="public/css/main.css">
	<link rel="stylesheet" type="text/css" href="public/css/bootstrap.css">
	<script type="text/javascript" src="public/js/bootstrap.js"></script>
</head>
<body>
	<div  class="container col-sm-8">
		<h3>Danh sách bệnh nhân</h3>
		<p><a class="btn"  href="?controller=BenhNhan&action=hienThiTrangThemBenhNhan">Thêm bệnh nhân</a></p>
		<table class="table">
			<tr>
				<th>Số thứ tự</th>
				<th>Tên bệnh nhân</th>
				<th>Ngày sinh</th>
				<th>Ngày nhập viện</th>
				<th>Ngày ra viên</th>
				<th>Tên khoa</th>
				<th>Quản lý</th>
			</tr>
			<?php 
				$stt = 1;
				foreach ($benhnhan as $key): ?>
				<tr>
					<td><?php echo $stt; ?></td>
					<td><?php echo $key['tenbenhnhan'] ?></td>
					<td><?php echo $key['ngaysinh'] ?></td>
					<td><?php echo $key['ngaynhapvien'] ?></td>
					<td><?php echo $key['ngayravien'] ?></td>
					<td><?php echo $key['tenkhoa'] ?></td>
					<td><a href="?controller=BenhNhan&action=trangXoaBenhNhan&id=<?php echo $key['mabenhnhan']?>">Xóa bệnh nhân</a></td>
				</tr>
			<?php 
				$stt++ ;
				endforeach ?>
		</table>
	</div>
</body>
</html>