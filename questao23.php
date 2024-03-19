<?php

if (!isset($_GET["nome"])) throw new RuntimeException("Argumentos vazios!");

$nome = $_GET["nome"];
$idade = $_GET["idade"];

$diasDeVida = $idade * 365;

echo "$nome, você já viveu $diasDeVida dias";
