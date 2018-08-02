<?php require 'lib/layout/header.php';?>

<div class="row">
	<div class="col-sm-2">
		<p><a class="btn btn-primary" href="?Controller=Student&action=pageAddStudent">Thêm mới sinh viên</a></p>
	</div>
	<div class="col-sm-4">
		
<form action="?Controller=Student&action=sortStudent" method="POST">
	<div class="col-sm-4">
		<select class="form-control" name="option">
			<option value="name">Tên</option>
			<option value="date">Năm sinh</option>
		</select>
	</div>
		<input class="btn btn-info" type="submit" name="sort" value="sắp xếp">

</form>
	</div>
</div>

<h3></h3>
<table class="table-bordered table-hover table-responsive table-sm">
	<tr class="title">
		<th>Số thứ tự</th>
		<th>Tên sinh viên</th>
		<th>Năm sinh</th>
		<th>Email</th>
		<th>Số điện thoại</th>
		<th>Ảnh đại diện</th>
	</tr>
	<?php 
		$stt = $_SESSION['stt'] + 1;
		foreach ($student as $key): ?>
		<tr>
			<td><?php echo $stt ?></td>
			<td><?php echo $key['nameStudent'] ?></td>
			<td><?php echo $key['birthDate'] ?></td>
			<td><?php echo $key['emailStudent'] ?></td>
			<td><?php echo $key['phoneNumber'] ?></td>
			<td><img class="img-thumbnail img-pro" src="public/hinhanh/<?php echo $key['pictureProfile'] ?>"></td>
		</tr>
	<?php 
		$stt++ ;
		endforeach ?>


</table>
<h3> </h3>
<span>Trang</span>
<?php for ($i = 1; $i <= $numPage; $i++): ?>
        <a class="btn" href="?Controller=Student&action=listStudent&page=<?php echo $i; ?>"><?php echo $i; ?></a>
    <?php endfor ?>

<?php require 'lib/layout/footer.php';?>