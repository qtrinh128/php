<?php require 'Views/Layout/header.php';?>
<h3></h3>
<p class="error"><?php echo $failure?></p>

<p><a href="?Controller=<?php echo $controller;?>&action=<?php echo $action;?>">Quay lại</a></p>

<?php require 'Views/Layout/footer.php';?>