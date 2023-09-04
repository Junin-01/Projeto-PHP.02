<?php

require_once 'funcoes.php';

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

   $contasCorrentes['145.253.987-10'] = sacar(
    $contasCorrentes['145.253.987-10'],
    valorASacar:100
    );

    $contasCorrentes['154.234.765-87'] = sacar(
        $contasCorrentes['154.234.765-87'],
        valorASacar:200
    );

    $contasCorrentes['472.287.987-39'] = depositar(
        $contasCorrentes['472.287.987-39'],
        valorADepositar:900
    );

    unset ($contasCorrentes['154.234.765-87']);


    titularComLetrasMaiusculas($contasCorrentes['472.287.987-39']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Contas Correntes</h1>

    <dl>
        <?php foreach ($contasCorrentes as $cpf => $conta)  { ?>
        <dt>
            <h3><?= $conta['titular']; ?> - <?= $cpf; ?></h3>
        </dt>
        <dd>
            Saldo:<?= $conta['saldo']; ?>
        </dd>
        <?php } ?>
    </dl>
</body>
</html>