<?php

if (!isset($_GET["pesoDoPrato"])) throw new RuntimeException("Argumentos vazios!");

$pesoDoPrato = $_GET["pesoDoPrato"];
$valorDoQuiloDaRefeicao = 12;

$valorASePagar = $pesoDoPrato * $valorDoQuiloDaRefeicao;

echo "Pela refeição, você terá de pagar um total de R$$valorASePagar reais";
