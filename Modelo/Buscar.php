<?php

class Buscar
{
    private $nomes;

    public function __construct()
    {
        $this->nomes = ['Rodrigo', 'Tatiane', 'João'];
    }

    public function buscar($nome)
    {
        return in_array($nome, $this->nomes);
    }
}