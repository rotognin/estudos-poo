<?php

/**
 * Continuar da página 83 do livro: Do PHP ao Laminas
 * Esse projeto é um teste.
 * Vamos refatorando ele e aplicando as explicações do livro
 * Quero entender a parte de Gerar Coleções a partir de arrays (yield)
 * 
 * *** (OK) - Tarefa a ser realizada aqui: ajustar o controlador para se tornar uma classe
 * *** Criar o Model com conexão ao banco MySQL
 */

session_start();

$texto = (isset($_SESSION['texto'])) ? $_SESSION['texto'] : '';
$tamanho = strlen($texto);
$_SESSION['texto'] = '';

$log = (isset($_SESSION['log'])) ? $_SESSION['log'] : '';
$_SESSION['log'] = '';


?>

<!DOCTYPE html>
<html>
<head>
    <title>Estudando PHP</title>
</head>
<body>
    <h1>Escrita e busca de textos.</h1>
    <br>
    <h3>Formulário de escrita:</h3>
    <form method="post" action="controlador\?acao=escrever">
        Texto a ser guardado: <input type="text" name="texto" autofocus="autofocus">
        <input type="submit" value="Escrever">
    </form>
    <br>
    <h3>Formulário de busca:</h3>
    <form method="post" action="controlador\?acao=buscar">
        Texto a ser buscado: <input type="text" name="texto">
        <input type="submit" value="Buscar">
    </form>
	<br>
    <p>
		Mensagem retornada <?= $texto ?>
	</p>
    <p>
		Tamanho da mensagem: <?= $tamanho ?>
	</p>
	<p>
		Log do processo: <?= $log ?>
	</p>
</body>
</html>