<?php

$saldo = 1_000;
$titularConta = 'Vinicius Dias';

echo "*************" . PHP_EOL;
echo "Titular: $titularConta" . PHP_EOL;
echo "Saldo Atual: R$ $saldo" . PHP_EOL;
echo "*************" . PHP_EOL;

do {
  
  echo "1. Consultar saldo atual\n";
  echo "2. Sacar valor\n";
  echo "3. Depositar valor\n";
  echo "4. Sair\n";
  
  $opcao = (int) fgets(STDIN);

  switch ($opcao) {
    case 1:
      echo "*************" . PHP_EOL;
      echo "Titular: $titularConta" . PHP_EOL;
      echo "Saldo Atual: R$ $saldo" . PHP_EOL;
      echo "*************" . PHP_EOL;
      break;
    case 2:
      echo "Qual valor deseja sacar?\n";
      $valorASacar = (float) fgets(STDIN);
      if ($valorASacar > $saldo) {
        echo "Saldo insuficiente" . PHP_EOL;
      } else {
        $saldo -= $valorASacar;
      }
      break;
    case 3:
      echo "Quanto deseja depositar?\n";
      $valorADepositar = (float) fgets(STDIN);
      $saldo += $valorADepositar;
      break;
    case 4:
      echo "Adeus" . PHP_EOL;
      break;
    default:
      echo "Opção invalida" . PHP_EOL;
      break;
  }
} while ($opcao != 4);

