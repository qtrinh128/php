<?php require 'layout/header_admin.php'; ?>
<div class="container">
    <h3 class="text-center">Danh sách danh mục</h3>
    <a href="?controller=CategoryAdmin&action=showPageAdd">Thêm danh mục</a>
    <div>
		<ul>
			<?php
				foreach($category as $key){
				?>
				<ul class="list-group">
					<li class="list-group-item"><a href='?controller=CategoryAdmin&action=showListPostInCategory&id=<?php echo $key['id']; ?>'><?php echo $key['name']; ?></a></li>
				</ul>
				<?php
				}
			?>
		</ul>
	</div>
</div>
<?php require 'layout/footer_admin.php'; ?>