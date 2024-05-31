<?php

function exibeMesagemLancamento(int $ano) {
  if ($ano > 2022) {
    echo "Esse filme é um lançamento" . PHP_EOL;
  } elseif($ano > 2020 && $ano <= 2022) {
    echo "Esse filme ainda é novo" . PHP_EOL;
  } else {
    echo "Esse filme não é um lançamento" . PHP_EOL;
  }
  
}

function incluidoNoPlano(bool $planoPrime, int $ano) {
  return $planoPrime && $ano < 2020;
}

echo "Bem-vindo(a) ao screen match!" . PHP_EOL;

$nomeFilme = "Top Gun - Maverick";
// $nomeFilme = "Thor: Ragnarok";
// $nomeFilme = "Se beber não case";

$anoLancamento = 2022;
// $anoLancamento =  $argv[1] ?? 2024;
// $notaFilme = 8.8;

// $somaDeNotas = 9;
// $somaDeNotas += 6;
// $somaDeNotas += 8;
// $somaDeNotas += 7.5;
// $somaDeNotas += 5;
// $notaFilme = $somaDeNotas / 5;

$quantidadeDeNotas = $argc - 1;
$somaDeNotas = 0;

for ($i=0; $i < $argc; $i++) { 
  $somaDeNotas += (float) $argv[$i];
}

// $somaDeNotas += $argv[1];
// $somaDeNotas += $argv[2];
// $somaDeNotas += $argv[3];

$notaFilme = $somaDeNotas / $quantidadeDeNotas;

$planoPrime = true;
$incluidoNoPlano = incluidoNoPlano($planoPrime, $anoLancamento);

// $nomeFilme = $argv[2];
// $notaFilme =  $argv[3];

echo "Nome do filme" . $nomeFilme . PHP_EOL;
echo "Nota do filme" . $notaFilme . PHP_EOL;
echo "Ano de lançamento" . $anoLancamento . PHP_EOL;

exibeMesagemLancamento($anoLancamento);

$genero = match($nomeFilme) {
  "Top Gun - Maverick" => "ação",
  "Se beber não case" => "comédia",
  "Thor: Ragnarok" => "super-herói",
  default => "gênero desconhecido",
};

echo "O gênero do filme é: $genero" .  PHP_EOL;
echo $argc . PHP_EOL;

$filme = [
  "nome" => "Thor: Ragnarok",
  "ano" => 2021,
  "nota" => 7.8,
  "genero" => "super-herói"
];

echo $filme['nome'] . PHP_EOL;

// $notasParaOFilme = [
//   10, 8, 9, 7.5, 5, 6.8
// ];

// $notasParaOFilme2 = array(
//   10, 8, 9, 7.5, 5, 6.8
// );

// $a = array(
//   0 => "a",
//   1 => "b",
//   2 => "c",
//   3 => "d",
//   4 => "e",
//   5 => "f",
// );

$notas = [];

for ($i=1; $i < $argc; $i++) { 
  $notas[] = (float) $argv[$i];
}

var_dump($notas);

$somaDeNotas = 0;
// foreach ($notas as $nota) { 
//   $somaDeNotas += $nota;
// }
$notaFilme = array_sum($notas) / $quantidadeDeNotas;

echo $notaFilme . PHP_EOL;