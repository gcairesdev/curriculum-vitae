<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="<?= INCLUDE_PATH_FULL ?>css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link href="<?php echo INCLUDE_PATH_FULL ?>css/reset.css" rel="stylesheet" type="text/css">
	<link href="<?php echo INCLUDE_PATH_FULL ?>css/style.css" rel="stylesheet" type="text/css">
	<link rel="icon" type="image/png" href="<?php echo INCLUDE_PATH_FULL ?>img/favicon.ico">
	<title><?php echo self::titulo; ?></title>
</head>
<body>
<header>
	<nav>
		<?php
			foreach ($this->menuItems as $key => $value) {
				echo '<a href="'.INCLUDE_PATH.strtolower($value).'">'.$value.'</a>';
			}
		?>	
	</nav>
</header>