<?php

function autoload($classe)
{
    include_once($classe . '.class.php');
}
spl_autoload_register('autoload');