<?php require 'layout/header_admin.php'; ?>
<div class="container">
    <form action="?controller=PostAdmin&action=add" method="POST">
        <div class="form-group">
            <label>Tiêu đề bài viết</label>
            <input type="text" name="title_post" class="form-control">
        </div>
        <div class="form-group">
            <label>Nội dung bài viết</label>
            <textarea name="content_post" id="" cols="30" rows="10" class="form-control">
            </textarea>
        </div>
        <div class="form-group">
            <label>Link ảnh</label>
            <input type="text" name="link_pic" class="form-control">
        </div>
        <div class="row">
            <div class="col-sm-3">
                <div class="form-group">
                    <label>Tác giả</label>
                    <input type="text" name="author" class="form-control">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-3">
                <div class="form-group">
                    <label>Danh mục</label>
                    <select name="id_category">
                        <?php
                            foreach($category as $key): ?>
                            <option value="<?php echo $key['id']; ?>">
                                <?php echo $key['name']; ?>
                            </option>
                            <?php
                                endforeach
                            ?>
                    </select>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-3">
                <div class="form-group">
                    <label>Ngày đăng</label>
                    <input type="date" name="date_post" class="form-control">
                </div>
            </div>
        </div>
        <input type="submit" name="btn_add" class="btn btn-primary" value="Thêm bài viết">
        <input type="reset" name="" class="btn btn-default" value="Hoàn lại">
</div>
</form>
<?php require 'layout/footer_admin.php'; ?>