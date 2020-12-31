<?php

function autoload($classe)
{
    include_once('modelo' . DIRECTORY_SEPARATOR . ucfirst($classe) . '.php');
}
spl_autoload_register('autoload');