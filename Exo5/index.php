<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo 5 PHP</title>
</head>

<body>

    <h1>Exercice 5</h1>

    <p>Créer un formulaire sur la page index.php avec :

        Une liste déroulante pour la civilité (Mr ou Mme)
        Un champ texte pour le nom
        Un champ texte pour le prénom


        Ce formulaire doit rediriger vers la page index.php.
        Vous avez le choix de la méthode.</p>

    <form method="get" action="index.php">
        <label for="gender">Civilité:</label>

        <select name="gender" id="gender">
            <option value="">Veuillez choisir votre civilité : </option>
            <option value="male">Mr
            </option>
            <option value="female">Mme
            </option>
        </select>
        <label for="name"> Prénom </label>
        <input type="text" name="firstname" id="firstname">

        <label for="name">Nom</label>
        <input type="text" name="name" id="name">
        <input type="submit" value="Send">
    </form>
    <?php

echo $_GET['firstname'] . $_GET['name'] . $_GET['gender']; ?>

    
</body>

</html>