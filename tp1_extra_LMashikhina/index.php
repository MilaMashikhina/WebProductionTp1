<?php
require 'contracts/Recolectable.php';
require 'contracts/Recolectar.php';
require 'traits/PuedoRecolectar.php';
require 'traits/TengoComida.php';
require 'classes/Aldeano.php';
require 'classes/Arbusto.php';
require 'classes/AldeanoChino.php';
require 'classes/AldeanoFranco.php';
echo '<pre>';


// $aldeano = new Aldeano;
// $arbusto = new Arbusto;

// $aldeano->recolectar($arbusto);
// // Se debe ver el echo que devuelve el método recolectar

// $pesquero = new Pesquero;
// $bancoDePesca = new BancoDePesca;

// $pesquero->recolectar($bancoDePesca);
// // Se debe ver el echo que devuelve el método recolectar

// ------

$aldeanoChino = new AldeanoChino;
$aldeanoFranco = new AldeanoFranco;
$arbusto1 = new Arbusto;
$arbusto2 = new Arbusto;

$aldeanoChino->recolectar($arbusto1);
// Se debe ver el echo que devuelve el método recolectar sin bonus

$aldeanoFranco->recolectar($arbusto2);
// Se debe ver el echo que devuelve el método recolectar con el bonus del 25%