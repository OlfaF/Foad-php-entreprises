<?php 
$titleEmployes = "Ajout d'un employe";
require PATH_PROJET . '/views/partials/header.php'; ?>
        <h1>Ajouter un employes</h1>
        <form action="" method="POST">
            <div>
                <label for="prenom">Prenom</label>
                <input type="text" name="prenom" required>
            </div>
             <div>
                <label for="nom">Nom</label>
                <input type="text" name="nom" required>
            </div>
            <div>
                <label for="sexe">Couleur</label>
                <input type="text" name="sexe" required>
            </div>    
            <div>
                <label for="service">Service</label>
                <input type="text" name="service" required>
            </div> 
             <div>
                <label for="date_embauche">date_embauche</label>
                <input type="text" name="date_embauche" required>
            </div> 
             <div>
                <label for="salaire">salaire</label>
                <input type="text" name="salaire" required>
            </div>      
            <div>
                <button type="submit" name="envoyer">Ajouter employes</button>
            </div>               
        </form>
<?php require PATH_PROJET . '/views/partials/footer.php'; ?>