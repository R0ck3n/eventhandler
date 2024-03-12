<?php

include_once  '../class/EventRequest.php';
include_once  '../class/Event.php';
include_once  '../class/Db.php';
include_once '../class/AbstractRequest.php';



$eventRequest = new EventRequest();


function sanitize(string $data): string
{
    $data = trim($data);
    $data = stripslashes($data);

    return htmlspecialchars($data, ENT_QUOTES, 'UTF-8');
}


if ($_GET['action']=== 'create') {

    if (isset($_POST['nom'], $_POST['lieu'], $_POST['place'], $_POST['prix'], $_POST['date'])) {

        try {
            $event =
                new Event(
                    null,
                    sanitize($_POST['nom']),
                    sanitize($_POST['lieu']),
                    (int) sanitize($_POST['place']),
                    (int) sanitize($_POST['prix']),
                    0,
                    new DateTimeImmutable(sanitize($_POST['date']))
                );
        } catch (Exception $exception) {
            echo $exception->getMessage();
            exit;
        }
    }
    
    if (isset($event)) {
        $addEvent = new EventRequest();
        $addEvent->add($event);
    }

}

if ($_GET['action']=== 'delete') {
    $eventRequest -> deleteEvent(intval($_GET['id']));
}



header('location: /index.php?page=list');
exit;