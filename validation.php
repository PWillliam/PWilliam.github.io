<?php

if (isset($_POST) && !empty($_POST)){ 
    
    echo '<pre>'; var_dump($_POST); echo '</pre>';
    echo $_POST['firstname'];
    
    echo sha1($_POST['password']) . "<br>";
        echo md5($_POST['password']);
        $insert = $bdd->prepare('INSERT INTO cours.exercce(firstname2, email2, password2, gender2) VALUES (?,?,?,?,?);');
        $insert->execute(array(
        $_POST['firstname'],
        $_POST['lastname'],
        $_POST['email'],
        md5($_POST['password']),
        $_POST['gender'],
       ));
    header('Location: inedx.php');
    }
    ?>