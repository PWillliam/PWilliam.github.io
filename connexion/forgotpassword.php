<?php
require_once('./db.php');
require_once('./mail.php')
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
        <title>Mot de passe oublié</title>
        <link rel="stylesheet" href="./inscription.css">

</head>
<body>
    <form action="" method="post">
    <h1>Réinitialisation du mot de passe</h1>
        <label for="mail">Adresse Email</label>
        <input type="mail" name="mail" id="mail" required>
        <input type="submit" value="envoyer le lien">
    </form>
    <a href="./login.php">Connexion</a>
    <?php
    if (isset($_POST) && !empty($_POST)) {
        $select = $bdd->prepare('SELECT * FROM users WHERE mail=?');
        $select->execute(array($_POST['mail']));
        $select = $select->fetchAll();
        if (empty($select)) {
            echo '<script> alert("Cette adresse n\'est pas inscrite sur ce site") </script>';
        } else {
            //GenerateToken(10);
            //header('Location: mail.php');
            $token = GenerateToken(50);

            $addToken = $bdd->prepare('UPDATE Inscription SET Token=? WHERE email = ? AND id=?');
            $update->execute(array(
                $token,
                $_POST['email'],
                $select[0]['id']
            ));
            $msg = "Lien pour réinitialiser votre mot de passe : http://localhost/cours_php/PWillliam.io/exo/connexion/reset.php?id=$select[0]['id']&token=$token";  
            SendEmail($token, $_POST['email'], $msg, 'Réinitialisation du mot de passe', 'DWWM');

        }
    }
    ?>
</body>
</html>
