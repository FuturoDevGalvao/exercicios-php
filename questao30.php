<?php

if (!isset($_GET["qntDeFrangos"])) throw new RuntimeException("Argumentos vazios!");

$qntDeFrangos = $_GET["qntDeFrangos"];

$chipDeMarcacao = 4.0;
$anelDeAlimentacao = 3.5;

$gastoChipDeIdentificacao = $qntDeFrangos * $chipDeMarcacao;
$gastoAnelDeAlimentacao = ($qntDeFrangos * $anelDeAlimentacao) * 2;

$gastoTotal = $gastoAnelDeAlimentacao + $gastoChipDeIdentificacao;

echo "Gasto total para marcação dos $qntDeFrangos frangos: R$ $gastoTotal reais";
