<?php
	$autoload = function($class){

		if (file_exists('Controllers/'.$class.'.php')) {
			include('Controllers/'.$class.'.php');
		} else if (file_exists($class.'.php')){
			include($class.'.php');
		}
	};

	spl_autoload_register($autoload);

	$app = new Application();
	$app->executar();
?>