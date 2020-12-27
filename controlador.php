<?php

session_start();
require('funcoes.php');

$acao = (isset($_GET['acao'])) ? ucfirst($_GET['acao']) : (string) '';
$texto = (isset($_POST['texto'])) ? $_POST['texto'] : (string) '';

if (empty($acao)) {
    $_SESSION['texto'] = 'Nenhuma ação passada....';
    header('Location: index.php');
}

$acoes = ['Escrever', 'Buscar'];

if (!in_array($acao, $acoes)){
    $_SESSION['texto'] = 'Ação incorreta!';
    header('Location: index.php');
}

$obj = new $acao();

switch ($acao){
    case 'Escrever':
        if (!empty($texto)) {
            $obj->setMensagem($texto);
        }
        $_SESSION['texto'] = $obj->getMensagem();
        break;

    case 'Buscar':
        $_SESSION['texto'] = ($obj->buscar($texto)) ? 'Existe!' : 'Não existe!';
        break;
}

header('Location: index.php');