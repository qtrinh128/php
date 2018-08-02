<?php require 'layout/header_guest.php'; ?>
<div class="container">
    <h3 class="text-center">Danh sách danh mục</h3>
    <ul>
        <?php
        foreach($category as $key){
        ?>
        <ul class="list-group">
            <li class="list-group-item"><a href='?controller=Category&action=showListPostInCategory&id=<?php echo $key['id']; ?>'><?php echo $key['name']; ?></a></li>
        </ul>
        <?php
        }
        ?>
    </ul>
</div>
<?php require 'layout/footer_guest.php'; ?>