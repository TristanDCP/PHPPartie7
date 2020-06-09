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

Sur le formulaire de l'exercice 6, en plus de ce qui est demandé sur les exercices précédent, vérifier que le fichier transmis est bien un fichier pdf.

</p>



<?php if (isset($_POST['gender']) AND isset($_POST['firstname']) AND isset($_POST['lastname'])) { 
        $extension = substr($_FILES['file']['name'], -3, 3);
    ?>
        <?php if ($extension != "pdf") { ?>
            <p><?= "Veuillez saisir un fichier au format pdf" ?></p>
        <?php } else { ?>
            <p><?= strip_tags($_POST['firstname']) . " <br> " . strip_tags($_POST['lastname']) . " <br> " . strip_tags($_POST['gender']) . " <br> " . $_FILES['file']['name'] ?></p>
        <?php } ?>

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