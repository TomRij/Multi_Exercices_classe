<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tom Rijckaert</title>
    <link rel="stylesheet" href="CSS/index.css">
</head>
<body>
    <div>
        <ul class="Menu FlexContainer">
            <li><a href="connection.php">Connection</a></li>
            <li><a href="index.php">Accueil</a></li>
            <li><a href="contact.php">Contact</a></li>
        </ul>
    </div>
    <div class="Centre">
        <h1>Animalerie Tom&Co</h1>
        <h2>Je veux des belles fonctions php (séparer traitement et affichage)</h2>

        <!--Traitement-->
        <?php 
            function fonctionSpeciale($nombreDepart, $nombreElementSouhaite)
            {
                $suite = "" . $nombreDepart . "";
                for($i = 0; $i < $nombreElementSouhaite; $i++) 
                {
                    if(($nombreDepart < 5) && ($nombreDepart % 3 != 0))
                    {
                        $nombreDepart = $nombreDepart * 5;
                    } 
                    else if(($nombreDepart > 5) && ($nombreDepart < 10))
                    {
                        $nombreDepart = $nombreDepart / 6;
                    }
                    else{
                        $nombreDepart = $nombreDepart * $nombreDepart;
                    }
                    $suite = $suite . $nombreDepart . "";
                }
                return $suite;
            }

            $tableau = [7, 8, 10, 5, 15, 48, 5];


            function algorithmeEuclide2($nbre1, $nbre2){
                $reste = $nbre2;
                while($reste != 0)
                {
                    $reste = $nbre1 % $nbre2;
                    $nbre1 = $nbre2;
                    $nbre2 = $reste;
                }
                return $nbre1;
            }
        ?>

        <!--Affichage-->
        <p>Voici une suite bien spéciale <?= fonctionSpeciale(5,10) ?> </p>

        <p> Le PGCD entre 21 et 15 vaut <?= algorithmeEuclide2(21, 15) ?></p>

        <h2>Montrer moi commment afficher proprement du code</h2>

        <p>Dans la varialble $tableau voici tout les nombre paire</p>
        <ul>
           <?php for($j = 0; $j < sizeof($tableau); $j++): ?>
                <?php if($tableau[$j] % 2 == 0): ?>
                        <li><?= $tableau[$j] ?></li>
                <?php endif ?>
            <?php endfor ?>   
        </ul>

        <p>Dans la variable $phrase "Bonjour à tous pour ces révisions", la dernière lettre de chaque mot est</p>
        <ul>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
    </div>
</body>
</html>