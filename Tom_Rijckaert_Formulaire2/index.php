<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire2</title>
</head>
<body>
    <h1>Un super formulaire</h1>
    <form action="" method=""></form>
        <fieldset>
            <legend>Données personnlles</legend>
            <div>
                <label for="url">Votre prénom</label>
                <input placeholder="prenom" type="text" id="prenom">
            </div>
            <div>
                <label for="nom">Votre nom</label>
                <input placeholder="nom" type="text" id="nom">
            </div>
            <div>
                <label for="date">Votre date de naissance</label>
                <input type="date" id="date">
            </div>
        </fieldset>
        <fieldset>
            <legend>Les nouveaux inuput</legend>
            <div>
                <label for="url">Votre URL</label>
                <input placeholder="url" type="text" id="url">
            </div>
            <div>
                <label  for="telephone">Votre numéro de téléphone</label>
                <input placeholder="telephone" type="text" id="telephone">
            </div>
            <div>
                <label placeholder="telephone" for="telephone">Votre appréciation (entre 10 et20)</label>
                <input type="range" id="appreciation">
            </div>
            
        </fieldset>
</body>
</html>