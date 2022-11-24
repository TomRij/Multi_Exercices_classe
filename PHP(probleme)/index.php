<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tom Rijckaert</title>
</head>
<body>
    <!--Traitement-->

    <?php
        function diviserMontant($nbreDepart){
            $nbreDepart = $nbreTraitement;
            while($nbreTraitement > 0){
                if($nbre >= 500){
                    $billet500 ++;
                    $nbreTraitement -=500;
                }
                if($nbre >= 100){
                    $billet100 ++;
                    $nbreTraitement -=100;
                }
                if($nbreDepart >= 50){
                    $billet50 ++;
                    $nbreTraitement -= 50;
                }
                if($nbreDepart >= 20){
                    $billet20 ++;
                    $nbreTraitement -= 20;
                }
                if($nbreDepart >= 10){
                    $billet10 ++;
                    $nbreTraitement -= 10;
                }
                if($nbreDepart >= 5){
                    $billet5 ++;
                    $nbreTraitement -= 5;
                }
            }
        }
    ?>

    <!--Affichage-->
    <p> </p>
    
</body>
</html>