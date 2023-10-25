<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- CRUD: CREATE, READ(SELECT), UPDATE, DELETE -->
    <!-- Vous allez avoir plusieurs fichier 
    Dans un dossier 'Views' vous avez: create.php, read.php, update.php
    Dans un dossier 'Controllers' vous avez: create_ctrl.php, read_ctrl.php, update_ctrl.php, delete_ctrl.php 

    Vous devez créer une base de donnée que vous nommerez crud avec interclassement 
    utf8_general_ci (mb3 ou mb4)

    Dans cette base de donnée, vous allez créer une table user avec 3 attributs id, pseudo, mot_de_passe, description

    L'id' sera un entier et la clé primaire de la table sera auto incrémenté
    "Pseudo" sera en varchar 255 tout comme "motDePasse"
    "description" sera en TEXT

    L'index.php affichera un tableau de user, chaque ligne de ce tableau affichera les informations 
    (id, pseudo, mot de passe hashé, description) de cet user et permettra aussi la suppression, 
    la modification et l'affichage d'un user via un bouton ou un lien
    L'index.php affichera  aussu un bouton permettant la création d'un user
    create.php affichera le formulaire de création d'user
    update.php affichera le formulaire prérempli d'user afin de la modifier
    read.php afficher une liste à puce des informations de l'user

    
-->
<?php
require('config.php');

$stmt = $conn->prepare("SELECT * FROM user");
$stmt->execute();
$users = $stmt->fetchAll();

echo "<table>";
echo "<tr><th>ID</th><th>Pseudo</th><th>Description</th><th>Actions</th></tr>";
foreach ($users as $user) {
    echo "<tr>";
    echo "<td>" . $user['id'] . "</td>";
    echo "<td>" . $user['pseudo'] . "</td>";
    echo "<td>" . $user['description'] . "</td>";
    echo "<td><a href='read.php?id=" . $user['id'] . "'>Voir</a> | <a href='update.php?id=" . $user['id'] . "'>Modifier</a> | <a href='delete_ctrl.php?id=" . $user['id'] . "'>Supprimer</a></td>";
    echo "</tr>";
}
echo "</table>";

echo "<a href='create.php'>Créer un nouvel utilisateur</a>";
?>

    
</body>
</html>