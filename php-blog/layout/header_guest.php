<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo $title ?></title>
	<link rel="stylesheet" href="public/css/bootstrap.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<script src="public/js/jquery-1.9.1.min.js" defer></script>
	<script src="public/js/bootstrap.js" defer></script>
	<style>
		body{
			font-family: 'Roboto', sans-serif;
		}
		.font-weight-normal{
			line-height: 3;
			word-spacing: 0.2em;
		}
		.hinhanh-baiviet{
			height: inherit;
    		max-width: 100%;
		}
	</style>
</head>
<body>
	<nav class="nav navbar-default">
		<div class="container">
			<div class="navbar-header">
				<a href="?controller=Post&action=loadAllPost" class="navbar-brand">qtrinh</a>
			</div>
			<ul class="nav navbar-nav">
				<li><a href="?controller=Category&action=loadAllCategory">Danh mục</a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="?controller=login&action=loadPageLogin" class="glyphicon glyphicon-login">Đăng nhập</a></li>
			</ul>
		</div>
	</nav>