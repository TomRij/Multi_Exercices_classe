<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tom Rijckaert</title>
</head>
<body>
    <?php
    //step0
        echo '<p>Hello World</p>';

    //step1    
    for ($i=1; $i<=10; $i++) {
        echo '<p>le nombre vaut ' . $i .'</p>';
    }

    //step2
    for ($i=1; $i<=10; $i++) {
        if ($i == 3) continue;
        echo '<p>le nombre vaut ' . $i .'</p>';
    }
    //step3
    for ($i=1; $i<=10; $i++) {
        if (3< $i && $i < 8) continue;
        echo '<p>le nombre vaut ' . $i .'</p>';
    }

    //step4
    $abs5 = abs(-5);
    echo "<p>$abs5</p>";
    $abs10 = abs(10);
    echo "<p>$abs10</p>";
    
    ?>
</body>
</html>