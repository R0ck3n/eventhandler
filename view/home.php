<?php
include_once '_header.php';

$title = 'Accueil';



foreach ($eventsArray as $event){
    $newEvent = new Event($event['id'],$event['nom'], $event['lieu'], $event['places'], $event['prix'], $event['inscrits'],\DateTimeImmutable::createFromFormat('Y-m-d', $event['date']));
    $lastevenements[] = $newEvent;
}


?>

    <h1>Accueil</h1>

    <hr>

    <h2>Voici les <?= $homeEventDisplay ?> derniers évènements</h2>

    <div class="p-5 text-center bg-body-tertiary rounded-3">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Nom</th>
                    <th scope="col">Lieu</th>
                    <th scope="col">places totale</th>
                    <th scope="col">Inscrits</th>
                    <th scope="col">Prix</th>
                    <th scope="col">Date</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($lastevenements as $event) : ?>
                <tr>
                <td><?= htmlspecialchars($event->getName())?></td>
                <td><?= htmlspecialchars($event->getLocation())?></td>
                <td><?= htmlspecialchars($event->getSeat())?></td>
                <td><?= htmlspecialchars($event->getRegistered())?></td>
                <td><?= strval(intval(htmlspecialchars($event->getPrice())) / 100 ). ' €'?></td>
                <td><?= $event->getDate()?></td>
                </tr>
                <?php endforeach ; ?>
            </tbody>
        </table>
    </div>
<?php
include_once '_footer.php';
