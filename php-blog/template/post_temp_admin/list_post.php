<?php require 'layout/header_admin.php'; ?>

<div class="container">

    <div id="result">
        <!-- noi dung thong bao -->
    </div>


	<h3 class="text-center">Danh sách bài viết</h3>
	<a href="?controller=PostAdmin&action=showPageAdd">Thêm bài viết</a>
<?php
        foreach($post as $key){
    ?>
    <ul class="list-group">
        <li class="list-group-item"><a href='?controller=PostAdmin&action=showContentPost&id=<?php echo $key['id']; ?>'><?php echo $key['title']; ?></a></li>
    </ul>
    <?php
        }
    ?>
</div>

<?php require 'layout/footer_admin.php'; ?>