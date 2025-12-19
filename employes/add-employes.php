<?php
include dirname(__DIR__) . '/fonctions.php';
require dirname(__DIR__) . '/connexiondb.php';

// =============================================
// Traitement du formulaire d'ajour d'un employe
// =============================================

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['envoyer'])) {

    $prenom = nettoyer($_POST['prenom']);
    $nom = nettoyer($_POST['nom']);
    $sexe = nettoyer($_POST['sexe']);
    $service= nettoyer($_POST['service']);
   $date_embauche= nettoyer($_POST['date_embauche']);
   $salaire = nettoyer($_POST['salaire']);

    ajoutEmployes($pdo, $prenomParam, $nomParam, $sexeParam, $serviceParam, $date_embaucheParam, $salaireParam);

    $employesInserted = getLastInsertId($pdo);

    if ($employesInserted) {
        redirect('/employes/list-employes.php');
    }
}

include PATH_PROJET . '/views/employes/add-employes-view.php';
