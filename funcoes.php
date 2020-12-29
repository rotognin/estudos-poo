<?php

function autoload($classe)
{
    include_once('controlador' . DIRECTORY_SEPARATOR . ucfirst($classe) . '.php');
}
spl_autoload_register('autoload');