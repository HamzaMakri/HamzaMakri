<?php
// Controleur du début du jeu
// Etat : on connait le nom de la personne
// Objectif : on va lui demander si elle veut jouer
// Si c'est oui, on lui présente la regle du jeu,
// si non on termine.

// Inclut le mini framework
require_once('../framework/view.class.php');

//////////////////////////////////////////////////////////////////////////////
// PARTIE RECUPERATION DES DONNEES
//////////////////////////////////////////////////////////////////////////////

// Récupération des informations de la query string
if (isset($_GET['nom'])) {
  $nom = $_GET['nom'];
} else {
  $nom = '';
  // C'est une erreur : on doit toujours avoir un nom
  $error = 'start.ctrl.php : le nom a été perdu dans la query string';
}

if (isset($_GET['reponse'])) {
  if ($_GET['reponse'] == 'Oui') {
    $jouer = true;
  } else {
    $jouer = false;
  }
} else {
  // C'est une erreur : on doit toujours avoir une réponse
  $erreur = 'start.ctrl.php : pas de réponse dans la query string';
}

//////////////////////////////////////////////////////////////////////////////
// PARTIE USAGE DU MODELE
//////////////////////////////////////////////////////////////////////////////

// Calculs : rien à faire


//////////////////////////////////////////////////////////////////////////////
// PARTIE SELECTION DE LA VUE
//////////////////////////////////////////////////////////////////////////////

// Choix de la vue en fonction de l'état des variables

// S'il y a une erreur
if (isset($error)) {
  $view = new View('error.view.php');
  // On affiche la vue
  $view->show();
} else {
  // Le joueur veux jouer ?
  if ($jouer) {
    // On charge la vue de l'affichage de la règle du jeu
    $view = new View('regleDuJeu.view.php');
    // Passage des paramètres à la vue
    $view->nom = $nom;
    // On affiche la vue
    $view->show();
  } else {
    // La vue pour confimer qu'on ne joue pas
    $view = new View('pasDeJeu.view.php');
    // Passage des paramètres à la vue
    $view->nom = $nom;
    // On affiche la vue
    $view->show();
  }
}



?>
