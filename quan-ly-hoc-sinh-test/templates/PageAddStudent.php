<?php require 'lib/layout/header.php';?>
<h3></h3>

<div class="row">
	<div class="col-sm-5">
		
<form action="?Controller=Student&action=addStudent" method="POST" enctype="multipart/form-data">
  <div class="form-group">
    <label for="name">Tên sinh viên</label>
    <input type="text" class="form-control" id="name" name="nameStudent">
  </div>
  <div class="form-group">
    <label for="ns">Ngày sinh</label>
    <input type="date" class="form-control" id="ns" name="birthDate">
  </div>
    <div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" id="email" name="emailStudent">
  </div>
    <div class="form-group">
    <label for="phone">Số điện thoại</label>
    <input type="text" class="form-control" id="phone" name="phoneNumber">
  </div>
    <div class="form-group">
    <label for="">Ảnh</label>
    <input type="file" class="form-control-file" id="name" name="pictureProfile">
  </div>
  <input type="submit" class="btn btn-default" name="add" value="Thêm sinh viên">
</form>

	</div>
	
</div>

<?php require 'lib/layout/footer.php';?>


