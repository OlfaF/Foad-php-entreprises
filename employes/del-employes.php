<?php
include dirname(__DIR__) . '/fonctions.php';
require dirname(__DIR__) . '/connexiondb.php'; 

$idSuppEmployes = $_GET['id'] ?? null;
$suppResultEmployes=supprimerEmployes($pdo,$idSuppEmployes);

if ($suppResultEmployes) {
    redirect('/employes/list-employes.php');
}