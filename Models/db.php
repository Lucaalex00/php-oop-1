<?php
include_once __DIR__ . ".Production.php";

//Creates New Items to Production :
// 1.

$matrix= new Production('Matrix', 'English', rand(1,10));
var_dump($matrix);
/* echo $matrix->getTitle(); */
//2.
$starWars= new Production('Star Wars', 'Italian', rand(1,10));
var_dump($starWars);
/* echo $starWars->getTitle(); */