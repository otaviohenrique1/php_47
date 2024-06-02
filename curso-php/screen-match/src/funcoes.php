<?php

function exibeMesagemLancamento(int $ano): void {
  if ($ano > 2022) {
    echo "Esse filme é um lançamento" . PHP_EOL;
  } elseif($ano > 2020 && $ano <= 2022) {
    echo "Esse filme ainda é novo" . PHP_EOL;
  } else {
    echo "Esse filme não é um lançamento" . PHP_EOL;
  }
  
}

function incluidoNoPlano(bool $planoPrime, int $ano): bool {
  return $planoPrime && $ano < 2020;
}

function criaFilme(string $nome, int $anoLancamento, float $nota, string $genero): array {
  return [
    'nome' => $nome,
    'ano' => $anoLancamento,
    'nota' => $nota,
    'genero' => $genero
  ];
}
