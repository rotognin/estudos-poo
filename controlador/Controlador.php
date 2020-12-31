<?php

class Controlador
{
	static private $acoes = array("Escrever", "Buscar");
	static private $acao  = '';
	static private $texto = '';
	static private $log   = '';
	
	private function __contruct(){}
	
	static public function despachar($acao, $texto)
	{
		self::$acao = ucfirst($acao);
		self::$texto = $texto;
		self::$log = '';
		
		self::setLog('inicio: ' . self::$acao . ' - ' . self::$texto);

		if (!in_array(self::$acao, self::$acoes)){
			self::setTexto('Ação inválida.', 'A');
			self::retorno();
		}
		
		$_SESSION['log'] = 'Ação: ' . self::$acao;
		
		$obj = new $acao();

		switch (self::$acao){
			case 'Escrever':
				if (!empty($texto)) {
					$obj->setMensagem($texto);
				}
				self::setTexto($obj->gravar(), 'B');
				break;

			case 'Buscar':
				self::setLog('Chegou aqui no Buscar');
				
				if ($obj->buscar($texto)) {
					self::setTexto('Existe!', 'C');
				} else { 
					self::setTexto('Não existe!');
				}
				
				break;
				
			default:
				self::setLog('Opa, não era para cair aqui!');
				break;
		}
		
		self::retorno();

	}
	
	private function setLog($msg)
	{
		self::$log .= ' - ' . $msg . '<br>';
	}
	
	private function setTexto($texto, $nivel = '')
	{
		self::$texto = '';
		
		switch ($nivel)
		{
			case 'A':
				self::$texto = '<h2>' . $texto . '</h2>';
				break;
			case 'B':
				self::$texto = '<h3>' . $texto . '</h3>';
				break;
			case 'C':
				self::$texto = '<h4>' . $texto . '</h4>';
				break;
			default:
				self::$texto = $texto;
				break;
		}
		
	}
	
	private function retorno()
	{
		$_SESSION['texto'] = self::$texto;
		$_SESSION['log']   = self::$log;

		header('Location: ..' . DIRECTORY_SEPARATOR . 'index.php');
	}
}