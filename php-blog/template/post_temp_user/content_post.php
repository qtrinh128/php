<?php require 'layout/header_guest.php'; ?>
<div class="container">
        <div class="col-sm-10">
            <h3><?php echo $contentPost['title']?></h3>
            <p><?php echo $contentPost['author']?>: <?php echo $contentPost['time_post']?></p>
            <img class="img-fluid hinhanh-baiviet" src="<?php echo $contentPost['img']?>" alt="hinh-anh">
            <h1></h1>
            <p class="font-weight-normal"><?php echo $contentPost['content']?></p>
        </div>
        <div class="col-sm-3"></div>

</div>
<?php require 'layout/footer_guest.php'; ?>