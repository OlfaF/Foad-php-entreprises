<?php 
$titleTaxis = "Edition d'un employes";
require PATH_PROJET . '/views/partials/header.php'; ?>
        <h1>Editer un employes</h1>
        <form action="?id=<?= $employes['id_employes']; ?>" method="POST">
            <div>
                <label for="nom">Nom</label>
                <input type="text" name="nom" value="<?= $employes['nom']; ?>"  required>
            </div>
             <div>
                <label for="prenom">Prenom</label>
                <input type="text" name="prenom" value="<?= $employes['prenom']; ?>" required>
            </div>
            <div>
                <label for="sexe">Sexe</label>
                <input type="text" name="sexe" value="<?= $employes['sexe']; ?>" required>
            </div>    
            <div>
                <label for="service">Service</label>
                <input type="text" name="service" value="<?= $employes['service']; ?>"  required>
            </div> 
             <div>
                <label for="date_embauche">Date_embauche</label>
                <input type="text" name="service" value="<?= $employes['date_embauche']; ?>"  required>
            </div>
             <div>
                <label for="salaire">Salaire</label>
                <input type="text" name="salaire" value="<?= $employes['salaire']; ?>"  required>
            </div>        
            <div>
                <button type="submit" name="envoyer">Editer employes</button>
            </div>               
        </form>
<?php require PATH_PROJET . '/views/partials/footer.php'; ?>