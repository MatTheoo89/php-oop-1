<!-- Oggi pomeriggio ripassate i primi concetti di classe, variabili e metodi d’istanza che abbiamo visto stamattina e create un file index.php in cui:
    - è definita una classe ‘Movie’
        => all’interno della classe sono dichiarate delle variabili d’istanza
        => all’interno della classe è definito un costruttore
        => all’interno della classe è definito almeno un metodo
    - vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà -->
<?php
include './class/movies.php';
include './class/cast.php';
include './class/actor.php';

$Movie_1 = new Movie('Batman Begins','Azione', '2h 20m', new Cast(new Actor('Christian Bale', 'Bruce Wayne'), new Actor('Michael Caine', 'Alfred'), new Actor('Ken Watanabe', 'Ra\'s Al Ghul'), new Actor('Liam Neeson', 'Ducard'), new Actor('Katie Holmes', 'Rachel Dawes')));
$Movie_1->setPoster('https://pad.mymovies.it/filmclub/2004/08/003/locandina.jpg');

// $Movie_2 = new Movie('Il cavaliere oscuro','Azione', '2h 32m', new Cast('Christian Bale', 'Batman'));
// $Movie_2->setPoster('https://pad.mymovies.it/filmclub/2007/02/131/locandina.jpg');

// $Movie_3 = new Movie('Il cavaliere oscuro - Il ritorno','Azione', '2h 45m', new Cast('Christian Bale', 'Batman'));
// $Movie_3->setPoster('https://pad.mymovies.it/filmclub/2010/07/191/locandina.jpg');

var_dump($Movie_1);
//var_dump($Movie_2);
//var_dump($Movie_3);

$movies = [$Movie_1, $Movie_2, $Movie_3];

//var_dump($movies);