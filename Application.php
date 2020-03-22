<?php
	
	define('INCLUDE_PATH','http://localhost/curriculum-vitae/');
	define('INCLUDE_PATH_FULL','http://localhost/curriculum-vitae//Views/pages/');
	class Application
	{
		
		public function executar(){
			$url = isset($_GET['url']) ? explode('/',$_GET['url'])[0] : 'Home';

			$url = ucfirst($url);
			$url.="Controller";
			if(file_exists('Controllers/'.$url.'.php')){

				$controler = new $url();
				$controler->executar();
			}else{
				die("Não existe esse controlador!");
			}
		}
	}
	
?>