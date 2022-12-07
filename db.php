<?php
include './class/movies.php';
include './class/cast.php';
include './class/actor.php';

$Movie_1 = new Movie('Batman Begins','Azione', '2h 20m', new Cast(new Actor('Christian Bale', 'Bruce Wayne'), new Actor('Michael Caine', 'Alfred'), new Actor('Ken Watanabe', 'Ra\'s Al Ghul'), new Actor('Liam Neeson', 'Ducard'), new Actor('Katie Holmes', 'Rachel Dawes')));
$Movie_1->setPoster('https://pad.mymovies.it/filmclub/2004/08/003/locandina.jpg');

$Movie_2 = new Movie('Il cavaliere oscuro','Azione', '2h 32m', new Cast(new Actor('Christian Bale', 'Bruce Wayne'), new Actor('Heath Ledger ', 'Joker'), new Actor('Aaron Eckhart ', 'Harvey Dent'), new Actor('Michael Caine', 'Alfred'), new Actor('Maggie Gyllenhaal', 'Rachel Dawes')));
$Movie_2->setPoster('https://pad.mymovies.it/filmclub/2007/02/131/locandina.jpg');

$Movie_3 = new Movie('Il cavaliere oscuro - Il ritorno','Azione', '2h 45m', new Cast(new Actor('Christian Bale', 'Bruce Wayne'), new Actor('Gary Oldman', 'Commissioner Gordon'), new Actor('Tom Hardy', 'Bane'), new Actor('Joseph Gordon-Levitt', 'Blake'), new Actor('Anne Hathaway', 'Selina')));
$Movie_3->setPoster('https://pad.mymovies.it/filmclub/2010/07/191/locandina.jpg');
// var_dump($Movie_1);
//var_dump($Movie_2);
// var_dump($Movie_3);

$moviesList = [$Movie_1, $Movie_2, $Movie_3];

//var_dump($moviesList[0]->cast);
//var_dump($moviesList[0]->cast->actor_1);


// header('content-Type: applications/json');
// echo json_encode($movies);