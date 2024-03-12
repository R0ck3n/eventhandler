<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    var_dump("Bravo, le formulaire est soumis (TODO : traiter les données)", $_POST);

    return;
}

$title = 'Création';

include_once '_header.php';
?>
<h1>Créer un nouvel événement</h1>

    <form action="../actions/actionEvent.php?action=create" method="post">
        <label for="nom" class="form-label">Nom de l’événement</label>
        <input type="text" id="nom" name="nom" class="form-control">

        <label for="lieu" class="form-label">Lieu de l’événement</label>
        <input type="text" id="lieu" name="lieu" class="form-control">

        <label for="place" class="form-label">Nombre de places totales</label>
        <input type="number" id="place" name="place" class="form-control">

        <label for="prix" class="form-label">Prix des places</label>
        <input type="text" id="prix" name="prix" class="form-control">

        <label for="date" class="form-label">Date de l’événement</label>
        <input type="date" id="date" name="date" class="form-control">

        <a href="index.php" class="btn btn-warning mt-3">Retour à la liste</a>
        <button class="btn btn-primary float-end mt-3">Valider</button>
    </form>

<?php
include_once '_footer.php';
