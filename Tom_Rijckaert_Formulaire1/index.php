<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <fieldset>
            <legend>Vos coordonnées</legend>
            <div>
                <label placeholder="Décrivez une expérience pro" for="nom">Nom :</label>
                <input type="text" id="nom">
            </div>
            <div>
                <label for="prenom">Prénom :</label>
                <input type="texte" id="prenom">
            </div>
            <div>
                <label for="date">Date de naissance :</label>
                <input type="date" id="date">
            </div>
            <div>
                <label for="email">Email :</label>
                <input type="email" id="email">
            </div>
            <div>
                <label for="pays">Pays :</label>
                <select name="pays" id="pays">
                    <optgroup label="Europe">
                        <option value="belgique">Belgique</option>
                    </optgroup>
                    <optgroup label="Amérique du nord">
                        <option value="etats-Unis">États-Unis</option>
                        <option value="canada">Canada</option>
                    </optgroup>
                    <optgroup label="Asie">
                        <option value="japon">Japon</option>
                        <option value="chine">Chine</option>
                    </optgroup>
                </select>
            </div>
            <div>
                <label for="copie">Nombre de copies souhaitées :</label>
                <input type="number" id="copie">
            </div>
        </fieldset>
        <fieldset>
            <legend>Périodicité</legend>
            <div>
                <input type="radio" name="newsletter">
                <label for="newsletter">Newsletter hebdomadaire</label>
            </div>
            <div>
                <input type="radio" name="newsletter">
                <label for="newsletter">Newsletter mensuelle</label>
            </div>
            <div>
                <input type="radio" name="newsletter">
                <label for="newsletter">Newsletter trimestrielle</label>
            </div>               
        </fieldset>
        <fieldset>
            <legend>Version papier - informatique</legend>
                <div>
                    <input type="checkbox"checked>
                    <label for="checkbox">Recevoir la version papier</label>
                </div>
                <div>
                    <input type="checkbox"checked>
                    <label for="checkbox">Recevoir la version informatique</label>
                </div>
        </fieldset>
        <input type="submit" value="Envoyer">        
    </form>
</body>
</html>