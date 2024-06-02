<?php

require_once __DIR__ . '/src/funcoes.php';

// php index.php 10 5 6 8 9.5

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

// $filme = [
//   "nome" => "Thor: Ragnarok",
//   "ano" => 2021,
//   "nota" => 7.8,
//   "genero" => "super-herói"
// ];

$filme = criaFilme(nome: "Thor: Ragnarok", anoLancamento: 2021, nota: 7.8, genero: "super-herói");

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

var_dump($notas);
sort($notas);
var_dump($notas);
$menorNota = min($notas);
var_dump($menorNota);
var_dump($filme['nome']);
$posicaoDoisPontos = strpos($filme['nome'], ':');
var_dump($posicaoDoisPontos);
var_dump(substr($filme['nome'], 0, $posicaoDoisPontos));

$filmeComoStringJson = json_encode($filme);
echo $filmeComoStringJson;
// var_dump(json_decode($filmeComoStringJson, true));
file_put_contents(__DIR__ . '/filme.json', $filmeComoStringJson);
