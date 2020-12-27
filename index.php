<?php

/**
 * Continuar da página 83 do livro: Do PHP ao Laminas
 * Esse projeto é um teste.
 * Vamos refatorando ele e aplicando as explicações do livro
 * Quero entender a parte de Gerar Coleções a partir de arrays (yield)
 * 
 * *** Tarefa a ser realizada aqui: ajustar o controlador para se tornar uma classe
 * *** Criar o Model com conexão ao banco MySQL
 */

session_start();

$texto = (isset($_SESSION['texto'])) ? $_SESSION['texto'] : '';
$tamanho = strlen($texto);
$_SESSION['texto'] = '';

?>

<!DOCTYPE html>
<html>
<head>
    <title>Estudando PHP</title>
</head>
<body>
    <h1>Escrita e busca de textos.</h1>
    <br>
    <p>Texto inserido: <?= $texto ?></p>
    <p>Tamanho do texto: <?= $tamanho ?></p>
    <br><br>
    <h3>Formulário de escrita:</h3>
    <form method="post" action="controlador.php?acao=escrever">
        Texto a ser exibido: <input type="text" name="texto" autofocus="autofocus">
        <input type="submit" value="Escrever">
    </form>
    <br>
    <h3>Formulário de busca:</h3>
    <form method="post" action="controlador.php?acao=buscar">
        Texto a ser buscado: <input type="text" name="texto">
        <input type="submit" value="Buscar">
    </form>
</body>
</html>