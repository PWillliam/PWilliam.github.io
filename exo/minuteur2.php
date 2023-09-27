<!DOCTYPE html>
  <html lang="fr">
  <head>
    <meta charset="UTF-8">
    
  </head>
  <body>
  <p id="minuteur">00.00.00</p>
  <form action="" method="post">
  
        <label for="heure">heures(s)</label>
        <input type="number" name="heure" id="heure" value=0 min=0 max=23 lenght=2>

        <label for="minute">Minute(s)</label>
        <input type="number" name="minute" id="minute"value=0 min=0 max=59 lenght=2>

        <label for="seconde">Seconde(s)</label>
        <input type="number" name="seconde" id="seconde"value=0 min=0 max=59 lenght=2>
        <input type="submit" value="Régler">
        
                            
                        </div>
        <button type="button" id="pause">Pause</button>
        <button type="button" id="play">Play</button>
    
    </form>

    <?php
    
        echo '  <script>
        
        var heure = ' . (! empty($_POST["heure"]) ? $_POST["heure"] : '0').'
        var minute = ' . (! empty($_POST["minute"]) ? $_POST["minute"] : '0').'
        var seconde = ' . (! empty($_POST["seconde"]) ? $_POST["seconde"] : '0').'
        
        setInterval(function() {
        document.getElementById("minuteur").innerHTML= 
        `${(heure < 10 ? "0" : "")+ heure}:
        ${(minute < 10 ? "0" : "")+ minute}:
        ${(seconde < 10 ? "0" : "")+ seconde} `
        if (seconde <= 0 && minute <= 0 && heure <= 0 ) return
            
            if (seconde == 0) {
            if (minute > 0) {
                seconde = 60
                minute--
                } else {
            if (heure > 0) {
                heure--
                minute = 59
                seconde = 60
            }
            }
            
        }
        
        
            seconde--
        }, 1000)
        
        startTimer();

        document.getElementById("pause").addEventListener("click", function() {
            clearinterval=(interval);
        });
        
        document.getElementById("resume").addEventListener("click", function() {
            startTimer();
        });
        </script>
        '
        
    ?>
        



    



</body>
    </html>