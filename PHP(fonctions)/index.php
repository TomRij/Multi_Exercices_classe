<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tom Rijckaert</title>
</head>
<body>
    <!--Partie Traintement-->
    <?php
        function Factorielle($NombreDepart)
        {
            $CalculFacto = 1;
            for($i = 1; $i <= $NombreDepart; $i++){
                $CalculFacto = $CalculFacto *$i;
            }
            return $CalculFacto;

        }
    ?>

    <?php
        function OccCarDansTexte($chaineDepart, $caractere)
        {
            $longueurChaine = strlen($chaineDepart);
            $nbOccurence = 0;
            for($j = 0; $j < $longueurChaine; $j++)
            {
                if($chaineDepart[$j] == $caractere)
                {
                    $nbOccurence++;
                }
            }
            return $nbOccurence;
        }
    ?>

    <!--Partie Affichage-->
    <p>La Factoriellede 7 est <?= Factorielle(7) ?></p>

    <p>Il y a <?= OccCarDansTexte("test", "t") ?> t dans test</p>
</body>
</html>