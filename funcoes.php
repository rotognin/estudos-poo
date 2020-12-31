<?php

function autoload($classe)
{
	//$arquivo = '..' . DIRECTORY_SEPARATOR . 'Modelo' . DIRECTORY_SEPARATOR . ucfirst($classe) . '.php';
	//print_r($classe);
    include_once('..' . DIRECTORY_SEPARATOR . 'Modelo' . DIRECTORY_SEPARATOR . ucfirst($classe) . '.php');
}
spl_autoload_register('autoload');