<?php	

	class OutroController extends Controller
	{

		public function __construct()
		{
			$this->view = new MainView('Outro');
		}

		public function executar(){
			$this->view->render(array('titulo'=>'Outro'));
		}
	}
?>