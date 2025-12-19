<?php 
include 'fonctions.php';
require 'connexiondb.php'; 

$titleEmployes = "Page d'accueil";

require PATH_PROJET . '/views/partials/header.php';
?>

<p>Nombre d'employes: <?= getNbLigneTable($pdo,'employes') ?></p>


<?php require PATH_PROJET . '/views/partials/footer.php';  ?>