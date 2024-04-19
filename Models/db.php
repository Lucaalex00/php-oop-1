<?php
include_once __DIR__ . "./Production.php";
include_once __DIR__ . "./Movie.php";
include_once __DIR__ . "./TVserie.php";

//Creates New Items to Production :
$productionList=
    [
    new Production('Matrix', 'English', rand(1,10), 'Action'),
    new Production('Star Wars', 'Italian', rand(1,10), 'Fantasy'),
    new Production('Terminator', 'English', rand(1,10), 'Action'),
    new Production('Jackie Chan', 'Chinese', rand(1,10), 'Action'),
    new Production('Interstellar', 'Italian', rand(1,10), 'Fantasy'),
    new Movie('Avatar', 'English', rand(1,10), 'Action', 1400000, 180),
    new Movie('Silent Hill', 'English', rand(1,10), 'Horror', 149000, 136),
    new TVserie('How i met your Mother', 'English', rand(1,10), ['Show', 'Thriller'], 9),


    ]

?>