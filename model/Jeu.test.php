<?php
// Test de la classe Jeu
include("../model/Jeu.class.php");

// But : trouver la valeur 801
$jeu = new Jeu();
echo $jeu->guess()."\n";
$jeu->guessTooLow();
echo $jeu->guess()."\n";
$jeu->guessTooLow();
echo $jeu->guess()."\n";
$jeu->guessTooHigh();
echo $jeu->guess()."\n";
$jeu->guessTooHigh();
echo $jeu->guess()."\n";
$jeu->guessTooLow();
echo $jeu->guess()."\n";
$jeu->guessTooLow();
echo $jeu->guess()."\n";
$jeu->guessTooHigh();
echo $jeu->guess()."\n";
$jeu->guessTooLow();
echo $jeu->guess()."\n";
$jeu->guessTooHigh();
echo $jeu->guess()."\n";
?>
