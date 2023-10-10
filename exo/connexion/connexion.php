<?php
require_once('../function/db.php');
session_start();
if (!empty($_SESSION)) header('Location: index.php');
if (!empty($_GET)) {
    if ($_GET['success']) {
        if ($_GET['success'] == 'reset') echo '<script> alert("Votre mot de passe à été modifié") </script>';
        if ($_GET['success'] == 'mail') echo '<script> alert("Votre adresse mail à été confirmé") </script>';
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./style/inscription.css">
    <title>connexion</title>
</head>
<body>
    <form action="" method="get">
            <label for="username">Nom d'utilisateur</label>
            <input type="text" name="username" id="username" value="<?php echo $_GET['username'] ?>">
            <br>
            <label for="password">Mot de passe</label>
            <input type="password" name="password" id="password" value="<?php echo $_GET['password']?>">
            <br>
            <input type="submit" value="Connexion">
            <br>
            <a href="register.php">Créer un compte</a>
    </form>

    <?php
    session_start();

    if (isset($_GET) && !empty($_GET)) {
        $select = $bdd->prepare("SELECT * FROM connexion WHERE username=? and password=?");
        $select->execute(array(
            $_GET['username'],
            sha1($_GET['password'])
        ));
        $user = $select->fetch(PDO::FETCH_ASSOC);

        if ($user) {
            $_SESSION['user'] = $user;
            header("Location: index.php");
        }else {
            echo "<script> alert('Nom d\'utilisateur ou mot de passe incorrect') </script>";
        }
    } 
    ?>
</body>
</html>