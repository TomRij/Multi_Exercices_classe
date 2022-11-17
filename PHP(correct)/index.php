<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tom Rijckaert</title>
</head>
<body>
    
    <!--step0-->
    
    <p>Hello World</p>
    
    
    <!--step1-->    
    <?php for ($i=1; $i<=10; $i++) : ?>
        <p>le nombre vaut <?= $i ?></p>
    <?php endfor ?>

    <!--step2-->
    <?php for ($i=1; $i<=10; $i++) : ?>
        <?php if($i == 3) continue; ?>
        <p>le nombre vaut <?= $i ?></p>
    <?php endfor ?>
    
    <!--step3-->
    <?php for ($i=1; $i<=10; $i++) : ?>
        <?php if (3< $i && $i < 8) continue; ?>
        <p>le nombre vaut <?= $i ?></p>
    <?php endfor ?>

    <!--step4-->
    <?php
        $abs5 = abs(-5);    
        $abs10 = abs(10);
    ?>
    <p>la valeur absolue de -5 vaut <?php $abs5 ?></p>
    <p>la valeur absolue de 10 vaut <?php $abs10 ?></p>
    
</body>
</html>