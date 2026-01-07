<?php
$titleEntreprise = 'Dashboard';
include 'fonctions.php';
require 'connexiondb.php';

include PATH_PROJET . '/views/partials/header.php';
?>

<div id="title">
    <h1 style="text-align: center;">Dashboard</h1>
</div>

<div id="stat">
    <p>Nombre d'employés : <?= getNbLigneTable($pdo, 'employes') ?></p>
   

</div>

<?php
include PATH_PROJET . '/views/partials/footer.php';
?>