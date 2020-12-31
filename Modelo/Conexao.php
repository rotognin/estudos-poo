<?php

abstract class Conexao
{
	protected static $conn;
	
	public function getConexao()
	{
		if (self::$conn == NULL) {
			self::$conn = new PDO('mysql:host=localhost;dbname=textos_db;charset=UTF8', 'root', '');
		}
		return self::$conn;
	}
}