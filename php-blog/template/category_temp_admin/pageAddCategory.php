<?php require 'layout/header_admin.php'; ?>
<div class="container">
    <form action="?controller=CategoryAdmin&action=add" method="POST">
        <div class="form-group">
            <label>Tên danh mục</label>
            <input type="text" name="name_category" class="form-control">
        </div>
        <input type="submit" name="btn_add" class="btn btn-primary" value="Thêm danh mục">
        <input type="reset" name="" class="btn btn-default" value="Hoàn lại">
</div>
</form>
<?php require 'layout/footer_admin.php'; ?>