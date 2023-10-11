<?php
require_once('../bar/dbCat.php');
session_start();
if (!empty($_SESSION)) {
    session_start();
    session_unset();
    session_destroy();

    header('Location: index3.php');
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../bar/bar.css"> 
    <title>Connexion</title>
</head>
<body>
<?php 
        $_GET['page'] = 'index';
        include 'header.php'; ?>
    <br><br><br><br>

    <form method='post'>
        <div>
            <label for="username">Username : </label>
            <input type="text" name="username" id="username">
            <label for="password">Mot de passe :</label>
            <input type="password" name="password" id="password">
            <input type="submit" value="Se connecter">
            <a href="register.php">Vous n'avez pas de compte ? Chat pristi!</a>
        </div>
    </form>

    <?php 
    if (isset($_POST) && !empty($_POST)) {
        $select = $bdd->prepare('SELECT * FROM users WHERE (username=:user OR email=:user)');
        $select->execute(array(
            'user' => $_POST['username'],
            'pass' => password_hash($_POST['password'], PASSWORD_ARGON2ID)
        ));
        $select = $select->fetch(PDO::FETCH_ASSOC);

        if (empty($select) == false && password_verify($_POST['password'], $select['password'])) {
            
            $_SESSION = $select;
            header('Location: index3.php');
        } else {
            echo '<script> alert("Identifiant invalide") </script>';
        }
    }
    
    ?>



<br><br><br><br><br><br><br>
    <?php include 'footer.php'; ?>

</body>
</html>