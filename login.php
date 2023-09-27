<?php
session_start();
if (!empty($_SESSION)) header('Location: index2.php');

require_once('./db.php')
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Connexion</title>
    <link rel="stylesheet" href="./inscription.css">

</head>
<body>
    <form action="" method="post">
        <pre>
            <label for="username">Pseudo :</label>
            <input type="text" name="username" id="username">
            <label for="password">Mot de passe :</label>
            <input type="password" name="password" id="password">
            <input type="submit" value="Se connecter">
            <a href="./inscription.php">Vous n'avez pas de compte ?</a>
            <a href="./forgotpassword.php">Mot de passe oublié ?</a>
            <a href="./inscription.php">Vous n'avez pas de compte ?</a>
 
        </pre>
    </form>
    <?php 
    if (isset($_POST) && !empty($_POST)) {
        $select = $bdd->prepare('SELECT * FROM users WHERE (username=:login OR mail=:login) AND password=:pass');
        $select->execute(array(
            'login' => $_POST['username'],
            'pass' => sha1($_POST['password' ])
        ));
        $select = $select->fetch(PDO::FETCH_ASSOC);
        if (!empty($select)) {
            
            $_SESSION = $select;
            header('Location: index2.php');
        } else
        echo "<script> alert('Le mot de passe ou le pseudo n\'est pas bon') </script>";

    }
    ?>
</body>
</html>