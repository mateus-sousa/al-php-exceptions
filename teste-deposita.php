<?php

use Alura\Banco\Modelo\Conta\ContaCorrente;
use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Endereco;

require "autoload.php";

$conta = new ContaCorrente(
    new Titular(
        new CPF('052.882.141-58'),
        'Mateus Sousa e Silva',
        new Endereco(
            'Planaltina',
            'Estancia',
                    'Rua',
                    'Numero'
        )
    )
);

try {
    $conta->deposita(-500);
} catch (\InvalidArgumentException $e) {
    echo "Valor depositado não pode ser negativo.";
}