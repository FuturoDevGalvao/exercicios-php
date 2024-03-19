<?php

if (!isset($_GET["precoDoLitro"])) throw new RuntimeException("Argumentos vazios!");

$valorPago = $_GET["valorPago"];
$precoDoLitro = $_GET["precoDoLitro"];

$gasolinaEquivalente = $valorPago / $precoDoLitro;

echo "Você conseguiu colocar $gasolinaEquivalente litros de gasolina no seu carro";
