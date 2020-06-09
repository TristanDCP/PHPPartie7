<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo 4 PHP</title>
</head>
<body>

<h1>Exercice 4</h1>

<p>Avec le formulaire de l'exercice 2, afficher dans la page user.php les données du formulaire transmis.</p>
    

<form method="post" action = "user.php">

<label for="name"> Prénom </label>
    <input type="text" name="firstname" id="firstname">

    <label for="name">Nom</label>
    <input type="text" name="name" id="name">
<input type="submit" href="user.php" value="Generate">
</form>


</body>
</html>