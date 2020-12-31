<?php

class Escrever
{
    private $mensagem;

    public function __construct()
    {
        $this->mensagem = '...Mensagem em branco...';
    }

    public function setMensagem($mensagem)
    {
        $this->mensagem = strip_tags($mensagem);
    }

    public function getMensagem()
    {
        return $this->mensagem;
    }
}