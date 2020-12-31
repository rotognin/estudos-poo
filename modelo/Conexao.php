<?php
	
class Conexao
{
	private $conn;
	
	private function __construct(){}
	
	static function getConexao()
	{
		if (self::$conn == NULL) {
			self::$conn = \PDO('mysql');
		}
	}
}