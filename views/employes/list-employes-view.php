<?php
$titleEmployes = "Liste des employes";
require PATH_PROJET . '/views/partials/header.php';

if (count($employesArray) === 0) :
    echo '<h3>Aucun employe !</h3>';
    echo '<a href="' . WEB_ROOT . '/employes/add-employes.php" role="button">Ajouter un employe</a>';
    die();
endif;
?>
<h1>Liste des employes</h1>
<a href="<?= WEB_ROOT . '/employes/add-employes.php' ?>" role="button">Ajouter un employe</a>
<table>
    <thead>
        <tr>
            <th>id</th>
            <th>nom</th>
            <th>prenom</th>
            <th>sexe</th>
            <th>service</th>
            <th>date_embauche</th>
            <th>salaire</th>
    </thead>
    <tbody>
     <?php foreach ($employesArray as $employe) : ?>
<tr>
    <td><?= $employe['id_employes'] ?? ''; ?></td>
    <td><?= $employe['nom'] ?? ''; ?></td>
    <td><?= $employe['prenom'] ?? ''; ?></td>
    <td><?= $employe['sexe'] ?? ''; ?></td>
    <td><?= $employe['service'] ?? ''; ?></td>
    <td><?= $employe['date_embauche'] ?? ''; ?></td>
    <td><?= $employe['salaire'] ?? ''; ?></td>
    <td>
        <a href="<?= WEB_ROOT . '/employes/edit-employes.php?id=' . ($employe['id_employes'] ?? '') ?>" role="button">Edit</a>
        <a href="<?= WEB_ROOT . '/employes/del-employes.php?id=' . ($employe['id_employes'] ?? '') ?>" role="button" onclick="return confirm('Etes-vous certain de vouloir supprimer cet employe ?');">Supprimer</a>
    </td>
</tr>
<?php endforeach; ?>
    </tbody>
</table>
<?php require PATH_PROJET . '/views/partials/footer.php'; ?>