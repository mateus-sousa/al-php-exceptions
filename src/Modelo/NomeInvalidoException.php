<?php

namespace Alura\Banco\Modelo;

use Throwable;

class NomeInvalidoException extends \DomainException
{
    public function __construct()
    {
        $message = "Nome deve ter no mínimo 5 caracteres.";
        parent::__construct($message);
    }
}