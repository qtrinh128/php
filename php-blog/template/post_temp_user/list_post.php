<?php require 'layout/header_guest.php'; ?>
<div class="container">
    <h3 class="text-center">Danh sách bài post người dùng</h3>
    <?php
        foreach($post as $key){
    ?>
    <ul class="list-group">
        <li class="list-group-item"><a href='?controller=Post&action=showContentPost&id=<?php echo $key['id']; ?>'><?php echo $key['title']; ?></a></li>
    </ul>
    <?php
        }
    ?>
</div>
<?php require 'layout/footer_guest.php'; ?>