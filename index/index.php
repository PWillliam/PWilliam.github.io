<?php
require_once('db.php');

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    
    <title>Cours PHP</title>
    <link rel="stylesheet" href="./style.css">
 
    </head>
<body>
    <?php
    echo "<p class= 'test'>Bonjour </p> ";
    // j'affiche Bonjour sur ma page dans une balise p avec comme 
    $int = 10;
    //classe test
     echo "<p>" . "bonjour" . "</p>";
$_COOKIE = 10;
// $ = var/let
// je défini ma variable avec $ puis
// je lui donne le nom cookie
//et je lui rntre la 10
$phrase = "je suis une phrase"; // string
$nombre = 1.4; // float
$choisie = true; // Booléens
/* intégrer un nombre entier comme 50,47 ,87498
Float => Nombre àvirgule comme 74.67 , 4.23567 , 1.15678
String => chaine de caractère comme "bonjour"
Booléens => true (vrai) ou false(faux)
array=>
        indexés
        
        null=>NULL */
        
        $titre = 'je suis un titre<br>';
        echo $phrase;
        echo $titre;

        //conditions
        
        $condition =false;
        
        
        if ($condition) {
            echo "<br>je passe ici donc c'est vrai";
        }else{
            echo "<br>je passe par la donc c'est faux";
        }
        $code = 4227;
        // == Ca prend en comte que la variable sois égale
        // === ca prend en compte que la variable sois égale 
        // et du même type
        if ($code === 4227){
            echo "<br><br>le code est correct";
        } else {
            echo "le code n'est pas correct";
    }

        $couleur = "green";
        if ($couleur == "vert") { //si
            echo "j'ai une autruche de couleur vert";
        } else if ($couleur === "bleu"){// sinon si
            echo"<p>j'ai une autruvhe de couleur bleu</p>";
        } else{// Sinon
            echo "<p>j'ai pas d'autruche</p>";
        }
        // écriture ternaire

        $a =15;
        $un = $a > 11 ?1 : 0 ;
        //echo $un;
        // si $a supérieur à 11 alors (?) sa = 1 sinon (:) $a = 0
        // les switch
        
        $tailles = 170;
        switch ($tailles) {
           case 120:
           echo"<p> tu es atteint de nanisme.</p>";
           break;
        case 150:
           echo "<p>Tu et très petit</p>";
           break;
        case 170:
            echo "<p>tu est convenable</p>";
            break;
            case 200:
            echo "<p> Bonjour Monsieur ! </p>";
            break;
        default:
        echo "Tu n'existe pas !!</p>";
        break;


        }
        // Les tableaux
        
        $tableau = [];
        $tableau = [
        42, // 0
        78, // 1
        48, // 2
        186658, // 3
        "une autruche"]; // 4
        echo $tableau [4] . "<br>";
        echo '</pre>';
        var_dump($tableau);
        echo '</pre>';

        $exo = 
        [4, 
        12, 
        78, 
        98, 
        65];
        
        $resultat = $exo [2] - ($exo[0] * $exo[1]);
        $resultat = ($exo[3] - $exo[4])  - ($exo[1] / $exo[0]);
        echo $resultat;
        // la valeur de $resultat doit être égal a 30 en utilisan 
        // que les nombres qu'il ce trouve dns le tableau exo
        // tableau associatif
        $tab_assoc = [
            "voiture" => "volkswagen",// type string
            "animal" => "Perroquet",// type string
            "chiffre" => 10,// type integer
            "calvitie" => true,// type boolean
            "légumes" => null// type null
        
        ];
        // j'ai fait un tableau avec 5 valeurs qui ont une index
        // que jai défini moi même 
        // voiture est une index et volkswagen est sa valeur
        // animal est une index et perroquet est sa valeur
        //ainsi de suite
        $tab_assoc["bras"] = false;
        // j'ai défini une nouvelle index bras avec valeur faux
        
        echo "<pre>"; var_dump($tab_assoc); echo "</pre>";
        // les boucles

        //while

        $o = 0;
        while(true) {
            $o++;
            echo "<p> je passe dans la boucle while</p>";
            if ($o == 10) {
                break;
                // sert a casser la boucle pour pouvoir l'arrêter
            }
        }
        // la boucle do-while

        do {
            echo 'je passe dans la boucle do-while';
        
        } while (false);
        // la boucle for
        
        for ($i=0; $i < 10; $i++) {
            echo "<br><br> je suis passer " . $i+1 . " fois dans la boucle for";
            //echo " je maaaa $i"
        }
         /* 
    Créer un tableau Associatif en mettant une 
    index bras de type booléen et une index 
    jambe qui va être un integer
    */

    /* 
    Si il n'a pas de jambe ni de bras
        Tu es un e-tronc !
    Sinon si il n'a pas de bras
        Pas de bras pas de chocolat
    Sinon
        Tu es basique donc tu es nul
    */


    $tab_exo = [
    "bras" => true,
    "jambe" =>  2
    ];
         
            if ($tab_exo['bras'] == 0 && $tab_exo['jambe'] )
                echo "<p>Tu es un e-tron </p>";
            else if (!$tab_exo['bras'])
                echo "<p>pas de bras pas de chocolat </p>";
            else
                echo "<p> tu es basqique donc t'es nul</p>";
                
            
                
        ?>
        <form action="" method="post">
            <h1>Register</h1>
            
            <pre>
<label for="firstname">firstname : </label>
<input type="text" name="firstname" id="name" placeholder="" votre nom><br>
<label for="lastname">lastname : </label>
<input type="text" name="lastname" id="lastname" placeholder="votre nom de famille"><br>
<label for="E-mail">E-mail : </label>
<input type="E-mail" name="email" id="mail" placeholder="abcd@exemple.com"><br>
<label for="Password">Password : </label>
<input type="password" name="Password" id="password"><br>  
<label for="Passord">Confirm Password : </label>
<input type="Password" name="Confirm Password" id="password"><br>    
</pre>
<input type="radio" name="sexe" id="masculin" value="male">
<label for="masculin">Masculin</label>
<input type="radio" name="sexe" id="feminin" value="female">
<label for="feminin">Feminin</label>
<input type="radio" name="sexe" id="other" value="others">
<label for="other">other</label>
<br>
       <input type="submit" value="submit">    
        
</form>
        
        <?php
        //si method post est rentrer da,s le frormulaire il faut
        //utiliser $_POST
        //sinon si la method get est rentrer dans le formulaire il
        //faut utiliser $_GET
        //la fonction isset sert a regarder si la variable qui lui est donner est bien défini
        //est donner est bien défini dans ce cas elle regarde si la variable $_POST est défini 
    if (isset($_POST)) { // $_get
        echo '<pre>' ; var_dump($_POST); echo '</pre>';
        echo $_POST['firstname'];
        // sha1 Hash le mot c'est a dire 
        // Le conpléxifi et le rend ilisible
        // sha1 / md5
        echo sha1($_POST['password']) . "<br>";
        echo md5($_POST['password']);
       $insert = $bdd->prepare('INSERT INTO utilisateur(firstname, lastname, email, password, gender) VALUES (?,?,?,?,?);');
       $insert->execute(array(
        $_POST['firstname'],
        $_POST['lastname'],
        $_POST['email'],
        md5($_POST['password']),
        $_POST['sexe']
       ));
       
    }
    
    
    //je prépare ma commande
       $select = $bdd->prepare('SELECT * FROM utilisateur WHERE gender=?;');
       // le l'execute en lui donnant une valeur à la place des ?
       $select-> execute(array("male"));
       // je récupère toout ce que me renvoie ma commande
       $total = $select->fetchAll(PDO::FETCH_ASSOC);
       // je l'affiche
       echo '<pre>';
       var_dump($total);
       echo '</pre>';
       echo $total[2]['gender'];

    
    
    
    
    
    
    
    
    
    
    
    
    
    ?>
<br><br><br><br><br><br><br><br><br>

<pre>
<form action="" method="post"></form>
<label for="your name"> Your name </label>
<input type="text" name="your name" id="name">
<label for="your mail"> Your mail </label>
<input type="text" name="your mail" id="mail">
<label for="message"> Your message </label>
<textarea name="Your message" placeholder="Je veux un message" id="message" cols="20" rows="10"></textarea>
<label for="num"> Give me a number </label>
<input type="number" name="num" id="num">
<br>
<input type="submit" value="Envoyer !">
<br>
</pre>
</form>
<?php
if (isset($_POST) && !empty($_POST)){ 
    settype ($_POST['number'],'integer');
        echo '<pre>' ; var_dump($_POST); echo '</pre>';
        echo $_POST['name'];
        $insert = $bdd->prepare('INSERT INTO cours.exercce(firstname2, email2, password2, gender2) VALUES (?,?,?,?,?);');
        $insert->execute(array(
        $_POST['name'],
        $_POST['email'],
        $_POST['message'],
        $_POST['num'],
       ));
    }
$select = $bdd->prepare('SELECT * FROM cours.exercice');
    $total = $select->fetchAll(PDO::FETCH_ASSOC);
    echo '<pre>';
    var_dump($total);
    ?>


</body>

    </html>