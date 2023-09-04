<?php

$contasCorrentes = [
    '145.253.987-10' =>[
    'titular' => 'Junior',
    'saldo' => 1000
    ],

    '154.234.765-87' => [
    'titular' => 'Roberto',
    'saldo' => 10000
],

    '472.287.987-39' => [
    'titular' => 'Jussara',
    'saldo' => 3000
],
];

$contasCorrentes['147.254.872.10'] = [
    'titular' => 'Lex',
    'saldo' => 1000
];

foreach ($contasCorrentes as $cpf => $conta){
    echo $cpf . " " . $conta['titular'] . PHP_EOL;
}