<?php

$id   = null;

if (isset($_GET['id'])) {
    $id = $_GET['id'];
}

// a Commenter
$id = 0;

if (!$id || !array_key_exists($id, $data)) {
    // throw new \Exception("La tâche demandée n'existe pas !");
}

$title = 'Détail';

include_once '_header.php';
?>
    <h1>Détails de <em><?= '[Nom]' ?></em></h1>
    <p>
        L'événement aura lieu le <strong><?= '[date]' ?> !</strong>
    </p>
    <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci aliquid amet asperiores consectetur eveniet
        expedita ipsam libero, magni maiores minus nihil porro possimus qui ratione reiciendis repellat reprehenderit,
        sapiente soluta.
    </p>

    <a 
        href="index.php" 
        class="btn btn-info">Retour à la liste
    </a>
    
    <a 
    href="index.php?page=create" 
    class="btn btn-secondary">Créer une autre
        tâche
    </a>

<?php
include_once '_footer.php';
