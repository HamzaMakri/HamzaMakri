<?php

// Modèle pour jouer au jeu de la recherche du nombre
// La recherche se fait par dichotomie
class Jeu {
  // Interval de recherche du jeu
  private static $min = 1;
  private static $max = 1000;
  // Borne inférieur de l'interval de recherche
  private $inf;
  // Borne supérieur de l'interval de recherche
  private $sup;
  // Dernière valeur proposée à l'utilisateur
  private $guess;
  // Nombre de coups joués
  private $nbGuess;

  function __construct() {
    // Les bornes sont initialisées au maximum
    $this->inf = self::$min;
    $this->sup = self::$max;
    $this->nbGuess = 0;
  }

  // Propose une nouvelle valeur en fonction de l'état courant
  function guess() {
    // L'estimation est au milieu de l'interval
    // Le forcage au type int permet d'arrondir le calcul à l'entier
    $this->guess = (int)(($this->sup - $this->inf) / 2 + $this->inf);
    // Incremente le nombre de tests
    $this->nbGuess++;
    return $this->guess;
  }


  // Retourne la dernière valeur proposée à l'utilisateur
  function lastGuess() {
    return $this->guess;
  }

  // On est informé que la valeur proposée est trop petite
  function guessTooLow( ) {
    // Reduction de l'interval de recherche
    $this->inf = $this->guess;
  }

  // On est informé que la valeur proposée est trop grand
  function guessTooHigh( ) {
    // Reduction de l'interval de recherche
    $this->sup = $this->guess;
  }

  // Retourne le nombre de coup joués
  function nombreDeCoup() {
    return $this->nbGuess;
  }

  // Retourne vrai s'il n'y a plus de choix
  function noChoice() {
    return ($this->sup - $this->inf) < 2;
  }
}
?>
