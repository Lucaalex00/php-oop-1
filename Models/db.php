<?php
include_once __DIR__ . "./Production.php";

//Creates New Items to Production :
$productionList=
    [
    new Production('Matrix', 'English', rand(1,10), 'Action'),
    new Production('Star Wars', 'Italian', rand(1,10), 'Fantasy'),
    new Production('Terminator', 'English', rand(1,10), 'Action'),
    new Production('Jackie Chan', 'Chinese', rand(1,10), 'Action'),
    new Production('Interstellar', 'English', rand(1,10), 'Fantasy', 'Action'),
    ]

?>