<?php

if (!isset($_GET["salario"])) throw new RuntimeException("Argumentos vazios!");

$salario = $_GET["salario"];
$percentualDeAumento = 15 / 100;
$percentualDoImposto = 8 / 100;

$salarioComAumento = $salario + ($salario * $percentualDeAumento);

$salarioComAumentoMenosOImposto = $salarioComAumento - ($salarioComAumento * $percentualDoImposto);

echo "salário inicial: $salario";
echo "<hr>";
echo "salário com aumento: $salarioComAumento";
echo "<hr>";
echo "salário final: $salarioComAumentoMenosOImposto";
