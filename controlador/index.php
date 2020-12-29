<?php	

session_start();
require('..' . DIRECTORY_SEPARATOR . 'funcoes.php');

Controlador::despachar($_GET['acao'], $_POST['texto']);