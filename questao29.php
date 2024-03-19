<?php

if (!isset($_GET["qntHamburgues"])) throw new RuntimeException("Argumentos vazios!");

$qntHamburgues = $_GET["qntHamburgues"];

$produtosParaOHamurguer = [
    "queijo" => [
        "qnt" => 2,
        "peso" => 50
    ],
    "presunto" => [
        "qnt" => 1,
        "peso" => 50
    ],
    "hamburguer" => [
        "qnt" => 1,
        "peso" => 100
    ]
];

$totalDeQueijoEmKg = 0;
$totalDePresuntoEmKg = 0;
$totalDeHamburguerEmKg = 0;

for ($i = 1; $i <= $qntHamburgues; $i++) {

    $queijo = $produtosParaOHamurguer["queijo"];
    $totalDeQueijoEmKg += $queijo["qnt"] * $queijo["peso"] / 1000;

    $presunto = $produtosParaOHamurguer["presunto"];
    $totalDePresuntoEmKg += $presunto["qnt"] * $presunto["peso"] / 1000;

    $hamburguer = $produtosParaOHamurguer["hamburguer"];
    $totalDeHamburguerEmKg += $hamburguer["qnt"] * $hamburguer["peso"] / 1000;
}

echo "Total de queijo: $totalDeQueijoEmKg kg";
echo "<hr>";
echo "Total de presunto: $totalDePresuntoEmKg kg";
echo "<hr>";
echo "Total de hamburguer: $totalDeHamburguerEmKg kg";
