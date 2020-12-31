<?php

session_start();
require('..' . DIRECTORY_SEPARATOR . 'funcoes.php');
require('Controlador.php');

Controlador::despachar($_GET['acao'], $_POST['texto']);