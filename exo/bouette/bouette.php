<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <script src="./jquery-3.7.1.min.js"></script>
    <title>BOUETTE</title>
</head>
<body>
    <div class="bouette"></div>

    <h1>Modifications</h1>

    <button id='color'>Action/Désactiver la couleur</button>
    <button id='border'>Activer/Désactiver les bords arrondis</button>
    <button id='add'>Ajouter une nouvelle bouette</button>

    <h1>Descriptions:</h1>
    <ul>
        <li>Activer/Désactiver la couleur: Activer/Désactiver la couleur rouge</li>
        <li>Activer/Désactiver les bords arrondis: Le contour des boîtes alterne entre arrondis ou droit</li>
        <li>Ajouter une nouvelle boîte: Ajouter une boîte au conteneur.</li>
    </ul>
    
    <script>
        $(document).ready(function(){
            $("#color").click(function() {
                $(".bouette").toggleClass("rouge");
            });
            $("#border").click(function() {
                $(".bouette").toggleClass("arrondi");
            })
            $("#add").click(function() {
                var Bouette = "<div class='b'></div>"
                
            })

        })
    </script>
</body>
</html>