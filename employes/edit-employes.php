<?php
include dirname(__DIR__) . '/fonctions.php';
require dirname(__DIR__) . '/connexiondb.php';

$idEditEmployes = $_GET['id'] ?? null;

if (!is_numeric($idEditEmployes)) {
    dd("Cet employé n'existe pas !!!");
}

$employes = getEmployes($pdo, $idEditEmployes);

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {

    $prenom        = nettoyer($_POST['prenom']);
    $nom           = nettoyer($_POST['nom']);
    $sexe          = nettoyer($_POST['sexe']);
    $service       = nettoyer($_POST['service']);
    $date_embauche = nettoyer($_POST['date_embauche']);
    $salaire       = nettoyer($_POST['salaire']);

    $testUpdate = updateEmployes(
        $pdo,
        $prenom,
        $nom,
        $sexe,
        $service,
        $date_embauche,
        $salaire,
        $idEditEmployes
    );

   redirect('/employes/list-employes.php');
}

else {
dg('test');

}

include PATH_PROJET . '/views/employes/edit-employes-view.php';