<?php

if (!isset($_GET["salario"]) or !isset($_GET["vendas"])) throw new RuntimeException("Argumentos vazios!");

$salario = $_GET["salario"];
$vendas = $_GET["vendas"];

$percentalDeComissaoPorVenda = 4 / 100;
$comissaoPorVenda = $vendas * $percentalDeComissaoPorVenda;

$comissao = $comissaoPorVenda;
$salarioFinal = $salario + $comissao;

echo "Comissão: $comissao";
echo "<hr>";
echo "Salário final: $salarioFinal";
