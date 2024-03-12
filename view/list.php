<?php


$title = 'Liste';

include_once '_header.php';
require_once './class/Event.php';
require_once './class/EventRequest.php';
require_once './class/Db.php';

foreach ($eventsArray as $event){
    $newEvent = new Event($event['id'],$event['nom'], $event['lieu'], $event['places'], $event['prix'], $event['inscrits'],\DateTimeImmutable::createFromFormat('Y-m-d', $event['date']));
    $data[] = $newEvent;
}

?>
    <h1><?= $title ?></h1>

    <div class="row">
        <a href="index.php?page=create" class="btn btn-success offset-10 col-2">Créer un évènement</a>
    </div>

    <hr>

    <section class="row mt-5">
        <table class="table table-striped">
            <caption>Tableau des événements</caption>

            <thead>
            <tr>
                <th scope="col">Nom</th>
                <th scope="col">Lieu</th>
                <th scope="col">Place</th>
                <th scope="col">Prix</th>
                <th scope="col">Date</th>
            </tr>
            </thead>

            <tbody>
            <?php
            foreach ($data   as $id => $event): ?>
                <tr>
                    <th scope="row"><?= htmlspecialchars($event->getName()) ?></th>
                    <td><?= htmlspecialchars($event->getLocation()) ?></td>
                    <td><?= htmlspecialchars($event->getSeat()) ?></td>
                    <td><?= htmlspecialchars($event->getPrice()) ?> €</td>
                    <td><?= htmlspecialchars($event->getDate()) ?></td>
                    <td style="display:flex;gap: 5px;">
                        <a href="index.php?page=show&id=<?= $event->getId() ?>" class="btn btn-primary">En savoir plus</a>
                        <a href="/actions/actionEvent.php?action=delete&id=<?= $event->getId() ?>" class="btn btn-danger">Supprimer l'évènement</a>
                    </td>
                </tr>
            <?php
            endforeach; ?>
            </tbody>
        </table>
    </section>
<?php
include_once '_footer.php';
