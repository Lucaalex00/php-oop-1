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

require_once __DIR__ . './Models/Production.php';
require_once __DIR__ . './Models/db.php';

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
            background-color: #cecece;
        }
        ul{
            display:flex;
            flex-direction:column;
            gap:1rem;
        }
        .production_item{
            display:flex;
            flex-direction:column;
            gap:1rem;
            text-align:center;
            border:2px solid black;
            box-shadow: 2px 2px 2px black;
            width:50%;
            margin:auto;
            padding:1rem;
            transition:1000ms;
            >p{
                transition:1000ms;
            }
            &:hover{
                background-color:black;
                >p{
                    color:white;
                }
            }
            >h2{
                color:darkred;
            }
        }
    </style>
</head>
<body>
   <div class="container">
    <ul>
        <?php foreach ($productionList as $prodItem): ?>
        <li class="production_item">
            <h2><?php echo $prodItem->getTitle(); ?></h2>
            <p>Language: <?php echo $prodItem->getLang(); ?></p>
            <p>Vote: <?php echo $prodItem->getVote(); ?></p>
            <p>Genres: <?php echo $prodItem->getGenres(); ?></p>
        </li>
        <?php endforeach;?>
    </ul>
   </div>
</body>
</html>