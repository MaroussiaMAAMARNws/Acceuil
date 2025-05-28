<?php
    include '../../config/database_co.php';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Ajouter une compétence </h1>
    <form action "#" method="POST">
        <input type="hidden" name="type" value="competences">
        Nom: <input type="text" name="nom">
        Niveau: <input type="text" name="niveau">
    <button type="submit" class="btn btn-primary">Ajouter</button>
    <button type="reset" class="btn btn-secondary">Annuler</button>
</form>
</body>
</html>