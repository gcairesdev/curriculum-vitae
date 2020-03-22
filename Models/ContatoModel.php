<?php

	class ContatoModel{

		public static function enviarFormulario(){
			$mail = new \Email('vps.dankicode.com','testes@dankicode.com','gui123456','Guilherme');
			$mail->addAdress('testes@dankicode.com','Guilherme');
			$mail->formatarEmail(array('assunto'=>'Mensagem do site','corpo'=>'Aqui é uma mensagem do site!'));
			$mail->enviarEmail();
		}

	}

?>