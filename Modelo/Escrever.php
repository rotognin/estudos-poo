<?php

include_once 'Conexao.php';

class Escrever extends Conexao
{
    private $mensagem;

    public function __construct()
    {
        $this->conn = parent::getConexao();
    }

	private function filtrar($texto)
	{
		$texto_val = '';
		$texto_val = str_replace(';', ' ', $texto);
		$texto_val = str_replace(',', ' ', $texto_val);
	}
	
    public function setMensagem($mensagem)
    {
        $this->mensagem = filter_var($mensagem, FILTER_SANITIZE_STRING);
    }
	
	public function gravar()
	{
		$sql = '';
		$sql = 'INSERT INTO textos1_tb (t1_texto) VALUES ("' . $this->mensagem . '")';
		
		$retorno = '';
		
		if ($this->getConexao()->exec($sql) === false){
			$retorno = 'Não foi possível gravar o registro';
		} else {
			$retorno = 'Registro gravado com sucesso.';
		}
		
		return $retorno;
	}
}