<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="<?= INCLUDE_PATH_FULL ?>css/bootstrap.min.css">
	<link href="<?php echo INCLUDE_PATH_FULL ?>css/reset.css" rel="stylesheet" type="text/css">
	<link href="<?php echo INCLUDE_PATH_FULL ?>css/util.css" rel="stylesheet" type="text/css">
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