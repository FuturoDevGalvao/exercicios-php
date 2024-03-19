<?php

if (
    !isset($_GET["qntDeCamisasP"]) or
    !isset($_GET["qntDeCamisasM"]) or
    !isset($_GET["qntDeCamisasG"])
) {
    throw new RuntimeException("Argumentos vazios!");
}

$qntDasCamisas = [
    "P" => $_GET["qntDeCamisasP"],
    "M" => $_GET["qntDeCamisasM"],
    "G" => $_GET["qntDeCamisasG"],
];

$precosDasCamisas = [
    "P" => 10,
    "M" => 12,
    "G" => 15,
];

$totalDaVenda = 0;

foreach ($qntDasCamisas as $tamanho => $qnt) {
    if ($qnt !== 0) {
        $totalDaVenda += $qnt * $precosDasCamisas[$tamanho];
    }
}

echo "Total da venda das camisas: R$$totalDaVenda reais";
