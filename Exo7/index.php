<?php var_dump($_FILES) ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 7 </title>
 

</head>
<body>

<p>

Au formulaire de l'exercice 5, ajouter un champ d'envoi de fichier. Afficher en plus de ce qui est demandé à l'exercice 6, le nom et l'extension du fichier.

</p>



<?php if (isset($_POST['gender']) AND isset($_POST['firstname']) AND isset($_POST['lastname'])) { ?>

<p><?= "Nom : " . strip_tags($_POST['firstname']) . " <br> " . "Prénom : " . strip_tags($_POST['lastname']) . " <br> " . "Genre : " . strip_tags($_POST['gender']) . " <br> " . "Fichier : " . $_FILES['file']['name'] ?></p>

<?php } else { ?>

<form enctype="multipart/form-data" action="index.php" method="post">

<label for="firstname">Nom</label>
<input type="text" name="firstname" id="firstname" placeholder="Votre Nom" required>

<label for="lastname">Prénom</label>
<input type="text" name="lastname" id="lastname"  placeholder="Votre Prénom" required>

<Select name="gender">
    <option>Homme
    <option>Femme
    <option>Autre
</select>

<input type="file" name="file" value="1000000">>

<input type="submit" href="index.php">

</form>


<?php } ?> 

</body>
</html>