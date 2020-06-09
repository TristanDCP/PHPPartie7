<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo 2 PHP</title>
</head>
<body>

<h1>Exercice 2</h1>

<p>Créer un formulaire demandant le nom et le prénom. Ce formulaire doit rediriger vers la page user.php avec la méthode POST.</p>
    
<form method="post" action = "user.php">

<label for="name"> Prénom </label>
    <input type="text" name="name" id="name">

    <label for="name">Nom</label>
    <input type="text" name="name" id="name">
<input type="submit" href="user.php" value="Generate">
</form>

</body>
</html>