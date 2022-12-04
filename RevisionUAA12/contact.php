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
        <form action="">
            <fieldset>
                <legend>Formulaire de contact</legend>
                <div class="form-left-espace">
                    <div class="FlexContainer form-principal">
                        <label class="em-form" for="nom">Nom</label>
                        <input type="text" id="nom">
                    </div>
                    <div class="FlexContainer form-principal">
                        <label class="em-form" for="prenom">Prénom</label>
                        <input type="text" id="prenom">
                    </div>
                    <div class="FlexContainer form-principal">
                        <label class="em-form" for="email">Email</label>
                        <input type="email" id="email">
                    </div>
                    <div class="FlexContainer form-principal">
                        <label  class="em-form" for="telephone">Numéro de téléphone</label>
                        <input type="tel" id="telephone">
                    </div>
                    <div class="FlexContainer form-principal">
                        <label class="em-form" for="row">Votre message</label>
                        <textarea rows="12"></textarea>
                    </div>
                    <div class="FlexContainer espace">  
                        <input type="submit" value="Soumettre" id="envoyer">
                    </div>
                </div>
            </fieldset>
        </form>
    </div>
</body>
</html>