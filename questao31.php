<?php

if (
    !isset($_GET["1"]) or
    !isset($_GET["5"]) or
    !isset($_GET["10"]) or
    !isset($_GET["25"]) or
    !isset($_GET["50"]) or
    !isset($_GET["100"])
) {
    throw new RuntimeException("Argumentos vazios!");
}
