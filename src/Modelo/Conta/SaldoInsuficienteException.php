<?php


namespace Alura\Banco\Modelo\Conta;


use Throwable;

class SaldoInsuficienteException extends \DomainException
{
    public function __construct(float $valorSaque, float $saldo)
    {
        $mensagem = "Impossivel sacar {$valorSaque}, seu saldo disponível é de apenas {$saldo}.";
        parent::__construct($mensagem);
    }
}