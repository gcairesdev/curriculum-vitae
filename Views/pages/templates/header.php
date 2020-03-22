<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?php echo self::titulo; ?></title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
	<link href="<?php echo INCLUDE_PATH_FULL ?>css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
<header>
	<div class="center">
		<div class="logo">
			<h2>Curriculum Vitae</h2>
		</div><!--logo-->
		<nav class="menu">
			<?php
				foreach ($this->menuItems as $key => $value) {
					echo '<a href="'.INCLUDE_PATH.strtolower($value).'">'.$value.'</a>';
				}
			?>
		</nav><!--menu-->
		<div class="clear"></div>
	</div><!--center-->
</header>