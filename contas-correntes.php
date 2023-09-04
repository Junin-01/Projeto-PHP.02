<?php

$conta1 = [
    'titular' => 'Junior',
    'saldo' => 1000
];

$conta2 = [
    'titular' => 'Roberto',
    'saldo' => 10000
];

$conta3 = [
    'titular' => 'Jussara',
    'saldo' => 3000
];

$contasCorrentes = [$conta1, $conta2, $conta3];

for($i = 0; $i < count($contasCorrentes); $i++){
    echo $contasCorrentes[$i] ['titular'] . PHP_EOL;
}