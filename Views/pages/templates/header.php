<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?php echo self::titulo; ?></title>
	<link href="<?php echo INCLUDE_PATH_FULL ?>css/style.css" rel="stylesheet" type="text/css">
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