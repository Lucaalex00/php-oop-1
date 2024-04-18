<?php

/* Oggi pomeriggio ripassate i primi concetti di classe, variabili e metodi d'istanza che abbiamo visto stamattina e create un file index.php in cui è definita una classe Production

All'interno della classe dovrete gestire un titolo, una lingua e un voto (su una scala da 1 a 10). La classe deve avere le sue variabili d'istanza, il costruttore e i metodi.
Istanziate poi almeno due oggetti Production e stampate a schermo i loro valori.

BONUS 1 
Creare un layout completo per stampare a schermo una lista di produzioni. 
Facciamo attenzione all’organizzazione del codice, suddividendolo in appositi file e cartelle. Possiamo ad esempio organizzare il codice:
creando un file dedicato ai dati (tipo le array di oggetti) che potremmo chiamare db.php mettendo ciascuna classe nel proprio file e magari raggruppare tutte le classi in una cartella dedicata che possiamo chiamare Models
organizzando il layout dividendo la struttura ed i contenuti in file e parziali dedicati.

BONUS 2 
Create una classe Genre (gli attributi potrebbero essere nome e descrizione) e fate in modo che la classe Production accetti un genere nel costruttore. 
Aggiornate le informazioni stampate a schermo con il genere.
*/

class Production{
    public $title;
    public $lang;
    public $vote;

    //Constructor
    public function __construct($title, $lang, $vote){
        $this->title=$title;
        $this->lang=$lang;
        $this->vote=$vote;
    }

    //GET PROPERTIES
    public function getTitle(){
        return $this->title;
    }
     public function getLang(){
        return $this->lang;
    }
     public function getVote(){
        return $this->vote;
    }
};

//Creates New Items to Production :
// 1.

$matrix= new Production('Matrix', 'English', rand(1,10));
var_dump($matrix);
/* echo $matrix->getTitle(); */
//2.
$starWars= new Production('Star Wars', 'Italian', rand(1,10));
var_dump($starWars);
/* echo $starWars->getTitle(); */

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=4, initial-scale=1.0">
    <title>Production PHP</title>
    <style>
        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        body{
            background-color:#cecece;
        }
        .info_production{
            display: flex;
            justify-content:space-between;
            gap:2rem;
            margin: 1rem 0;
            width:20%;
        }
        h2{
            color:darkgreen;
        }
        h4{
            color:darkred
        }
    </style>
</head>
<body>
    <h2>
        <?= "Title: " . $starWars->getTitle() ?>
    </h2>
    <div class="info_production">
        <h4><?= "Lang: " . $starWars->getLang() ?></h4>
        <h4><?= "Vote: " . $starWars->getVote() ?></h4>
    </div>
    <h2>
        <?= "Title: " . $matrix->getTitle() ?>
    </h2>
    <div class="info_production">
        <h4><?= "Lang: " . $matrix->getLang() ?></h4>
        <h4><?= "Vote: " . $matrix->getVote() ?></h4>
    </div>
</body>
</html>