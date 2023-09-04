<?php

echo "ola, arquivos de funcoes aqui";

function sacar(array $conta, float $valorASacar) : array

 {  
if($valorASacar > $conta ['saldo']) {
    exibeMensagem(mensagem: "voce nao pode sacar");
}else{
    $conta ['saldo'] -= $valorASacar;

}

return $conta;
 }

    function exibeMensagem(String $mensagem)
    {
        echo $mensagem . '<br>';
    }

    function depositar (array $conta, float $valorADepositar) : array
     {
        if($valorADepositar > 0){
            $conta['saldo'] += $valorADepositar;
        }else{
            exibeMensagem(mensagem: "depositos precisam ser positivos");
        }
        return $conta;
    }

    function titularComLetrasMaiusculas(array &$conta)
    { 
       $conta['titular'] = strtoupper($conta['titular']);
    }

    function exibeConta(array $conta)
    {
        ['Titular' => $Titular, 'saldo' => $saldo] = $conta;
      echo "<li>Titular: $Titular . Saldo: $saldo </li>";
 }