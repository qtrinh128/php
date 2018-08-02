<?php require 'layout/header_admin.php'; ?>
<div class="container">
    <h3 class="text-center">Danh sách danh mục</h3>
    <ul>
        <?php
        foreach($post as $key){
        ?>
        <ul class="list-group">
            <li class="list-group-item"><a href='?controller=PostAdmin&action=showContentPost&id=<?php echo $key['id']; ?>'><?php echo $key['title']; ?></a></li>
        </ul>
        <?php
        }
        ?>
    </ul>
</div>
<?php require 'layout/footer_admin.php'; ?>