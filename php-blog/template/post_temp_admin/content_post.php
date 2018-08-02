<?php require 'layout/header_admin.php'; ?>
<div class="container">

        <div class="col-sm-10">
            <h3><?php echo $post['title']?></h3>
            <p><?php echo $post['author']?>: <?php echo $post['time_post']?></p>
            <img class="img-fluid hinhanh-baiviet" src="<?php echo $post['img']?>" alt="hinh-anh">
            <h1></h1>
            <p class="font-weight-normal"><?php echo $post['content']?></p>
            <a href="?controller=PostAdmin&action=editPost&id=<?php echo $post['id']?>" class="btn btn-primary">Sửa bài viết</a>
            <a href="?controller=PostAdmin&action=deletePost&id=<?php echo $post['id']?>" class="btn btn-danger">Xóa bài viết</a>
        </div>

        <div class="col-sm-3"></div>
        <div class="container">

        </div>
</div>
<?php require 'layout/footer_admin.php'; ?>