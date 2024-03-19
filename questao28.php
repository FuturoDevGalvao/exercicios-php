<?php

if (!isset($_GET["R"])) throw new RuntimeException("Argumentos vazios!");

$R = $_GET["R"];
$pi = 3.14;

$areaDaPizza = $pi * $R ** 2;

echo "área da pizza: " . str_replace(".", ",", (string) $areaDaPizza) . " cm²";
