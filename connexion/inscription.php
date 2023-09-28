<?php
require_once('./db.php')
require_once('./mail.php')
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Inscription</title>
    <link rel="stylesheet" href="inscription.css">
</head>
<body>
    <form action="" method="post">
        <pre>
            <label for="firstname">Prénom :</label>
            <input type="text" name="firstname" id="firstname" required>
            <br>
            <label for="lastname">Nom :</label>
            <input type="text" name="lastname" id="lastname" required>
            <br>
            <label for="username">Pseudo :</label>
            <input type="text" name="username" id="username" required>
            <br>
            <label for="mail">Email :</label>
            <input type="email" name="mail" id="mail" required>
            <br>
            <lable for="password">Mot de passe :</label>
            <input type="password" name="password" id="password" required>
            <br>
            <label for="confirm_password">Confirmation du mot de passe :</label>
            <input type="password" name="confirm_password" id="confirm_password" oninput="ChangeValue" required>

            <label for="masculin">Masculin :</label><input type="radio" name="genre" class="genre" value="m">
            <label for="feminin">Féminin : </label><input type="radio" name="genre" class="genre" value="f">

            <br>
            <input type="submit" value="S'inscrire">
            <a href="./login.php">Vous n'avez pas de compte ?</a>

        </pre>
    </form>
    <?php
    if (isset($_POST) && !empty($_POST)) {
        $select = $bdd->prepare('SELECT * FROM users WHERE username=?');
        $select->execute(array($_POST['username'], $_POST['mail']));
        $select = $select->fetchAll();
        if (empty($select)) {
            echo 'Bonjour !';
            $insert = $bdd->prepare('INSERT INTO users(prenom, nom, username, mail, genre, password) VALUES  (?, ?, ?, ?, ?, ?);');
            $insert->execute(array(
                $_POST['firstname'],
                $_POST['lastname'],
                $_POST['username'],
                $_POST['mail'],
                $_POST['genre'],
                
                
                sha1($_POST['password'])
            ));
            $token = GenerateToken(50);
            $msg = "Lien pour vérifier votre adresse mail : http://localhost/TamakiYagami.github.io/exo/connexion/verify.php?id=" . $select[0]['id'] . "&token=$token";  
                SendEmail($_POST['email'], $msg, "Validation Adresse Mail", 'DWWM');
    
            header("Location: login.php");
        } else 
        echo '<script> alert("Ce pseudo ou l\'addresse email sont déja utilisé donc vous devez en utiliser un autre qui ne soit pas le même mais qui ne comporte pas de caractère spécial parce que ca ne peux pas fonctionner et donc si vous ne faite pas ca ne pourra toujours pas fonctioner parce que vous êtes vraiment nul ! Mais sinon pourquoi vous voulez vous créer un compte alors que le site est nul et même pas encore fini mais t\'es con ou QUOI LA ???? Mais alors t\'aurai pas un zob dans le cul et aussi t\'aurai une chmère et aussi un snikkers puis aussi un coca cherry ?") </script>';



        
    }
    ?>
    <br><br><br><br><br><br><br><br><br><br>
    <script>
        function ChangeValue() {
            let password= document.getElementById('password')
            let confirmPassword = document.getElementById('confirm_password')

            if (Password.value == confirmPassword.value)
            
            confirmPassword.setCustomValidity('')
        else
            confirmPassword.setCustomValidity('Les mots de passe doivent etre identique')
        }
        function SingleUsername() {
        //     let Username = document.getElementById('username')
        //     document.cookie = "username = " + Username.value

            <?php 
        //         $select = $bdd->prepare("SELECT * FROM users WHERE username=?");
        //         $select->execute(array(
        //             $_COOKIE['username']
        //         ));
        //         $select = $select->fetchAll();
        //         setcookie('select', empty($select), time() + (86400 * 30), "/");
        //     ?>                
        //     // if (bool) {
        //     //     Username.setCustomValidity('Ce nom d\'utilisateur est déjà utilisé')
        //     // }
        }
        </script>
</body>
</html>