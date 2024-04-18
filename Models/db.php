<?php
include_once __DIR__ . "./Production.php";

//Creates New Items to Production :
$productionList=
    [

    new Production('Matrix', 'English', rand(1,10)),
    new Production('Star Wars', 'Italian', rand(1,10)),
    new Production('Terminator', 'English', rand(1,10)),
    new Production('Jackie Chan', 'Chinese', rand(1,10)),
    new Production('Interstellar', 'English', rand(1,10)),
    ]

?>