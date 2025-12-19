<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

define("PATH_PROJET", $_SERVER['DOCUMENT_ROOT']  . "/foad-php-entreprise");
define("WEB_ROOT", "/foad-php-entreprise");



function dg($data)
{
    echo '<pre style="background-color:black; color:white;padding: 1rem;">';
    var_dump($data);
    echo '</pre>';
}

function dd($data)
{
    echo '<pre style="background-color:black; color:white;padding: 1rem;">';
    var_dump($data);
    echo '</pre>';
    die();
}

// ==================
// === Employes ===
// ==================

function listeremployes($pdo)
{
    $sql = "SELECT * FROM employes ORDER BY id_employes DESC";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $employes = $stmt->fetchAll();
    return $employes;
}

function getEmployes($pdo, $idParam)
{
    $sql = "SELECT * FROM employes WHERE id_employes = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        ':id' => $idParam
    ]);
    $employes = $stmt->fetch();
    return $employes;
}

function ajoutEmployes($pdo, $prenomParam, $nomParam, $sexeParam, $serviceParam, $date_embaucheParam, $salaireParam)
{
    $sql = "INSERT INTO employes (prenom,nom,sexe,service,date_embauche,salaire) VALUES (:prenom,:nom,:sexe,: service, : date_embauche,: salaire)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        ':prenom'   => $prenomParam,
        ':nom'      => $nomParam,
        ':sexe'     => $sexeParam,
        ':service' => $serviceParam,
        ':date_embauche' => $date_embaucheParam,
        ':salaire' => $salaireParam
    ]);
}

function updateEmployes($pdo, $prenomParam, $nomParam, $sexeParam, $serviceParam, $date_embaucheParam, $salaireParam,$idParam)
{
    $sql = "UPDATE employes SET nom = :nom, prenom = :prenom,sexe = :sexe, service = :service,date_embauche = :date_embauche,salaire= :salaire WHERE id_employes = :id";
    $stmt = $pdo->prepare($sql);
    $updateBool = $stmt->execute([
        ':prenom'       => $prenomParam,
        ':nom'          => $nomParam,
        ':sexe'         => $sexeParam,
        ':service'       => $serviceParam,
        ':date_embauche' => $date_embaucheParam,
        ':id'            => $idParam
    ]);
    return $updateBool;
}

function supprimerEmployes($pdo, $id)
{
    $stm = $pdo->prepare("DELETE FROM employes where id_employes = :id");
    $stm->bindParam(':id', $id, PDO::PARAM_INT);
    $suppResult = $stm->execute();
    return $suppResult;
}


// =============
// STATISTIQUES
// =============

function getNbLigneTable($pdo, $table)
{
    $sql = "SELECT COUNT(*) FROM `" . $table . "`";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $count = $stmt->fetchColumn();
    return $count;
}


function getLastInsertId($pdo)
{
    $sql = "SELECT LAST_INSERT_ID()";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $last_insert_id = $stmt->fetch();
    return $last_insert_id;
}

function nettoyer($dataParam)
{
    $data = trim($dataParam);
    $data = htmlspecialchars($data, ENT_QUOTES, 'UTF-8');
    return $data;
}

function createDatabase($pdo, $sqlfile)
{
    $query = file_get_contents($sqlfile);
    $pdo->exec($query);
}

function redirect($url)
{
    header("Location: " . WEB_ROOT . $url);
    exit;
}
