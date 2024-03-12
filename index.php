<?php

require_once './class/Event.php';
require_once './class/EventRequest.php';
require_once './class/Db.php';
require_once './class/ParticipantRequest.php';

$availablePages =  [
    'home', 'list', 'show', 'create'
];

$page = 'home';

if (isset($_GET['page'])) {
    $page = $_GET['page'];
}

if (!in_array($page, $availablePages, true)) {
    require 'view/404.php';
    return;
}

$events = new EventRequest();
$participant = new ParticipantRequest();


$homeEventDisplay = 4;
$eventsArray = $events -> getLastEvents($homeEventDisplay);


require_once "view/$page.php";
