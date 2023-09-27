<?php
session_start();
if (empty($_SESSION)) header('Location: login.php');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Page D'accueil</title>
</head>
<body>
<pre>
        <?php var_dump($_SESSION); ?>
    </pre>
    <h1> Bonjour, <?php echo $_SESSION['genre'] == 'm' ? 'M' : 'Mme'?>. <?php echo $_SESSION['nom'] ?> <?php echo $_SESSION['prenom'] ?> </h1>

    <!-- 
        Vous allez devoir créer trois page une de connexion, une d'inscription et un page d'accueil avec des 
        lien hypertext et si possible réussir à faire afficher le nom et prénom de la personne 
    -->
    <?php
    if (isset($_POST['logout'])) {

        $_SESSION = array();

        session_destroy();

        header('Location: index2.php');
        exit;
    }
?>
        <form action="" method="post">
            <input type="submit" name="logout" value="déconnexion">
        
    </form>

    <a href="déconnexion.php">Se Déconnecter</a>

</body>
</html>