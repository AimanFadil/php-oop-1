<?php
class movie
{
    public $name;
    public $year;
    public $type;
}

$movie_1 = new movie();

$movie_1->name = "Guerre stellari (Star Wars: Episodio IV - Una nuova speranza)";
$movie_1->year = "25 maggio 1977";
$movie_1->type = "Fantascienza";


$movie_2 = new movie();

$movie_2->name = "L'Impero colpisce ancora (Star Wars: Episodio V - L'Impero colpisce ancora)";
$movie_2->year = "21 maggio 1980";
$movie_2->type = "Fantascienza";


$movie_3 = new movie();

$movie_3->name = "Il ritorno dello Jedi (Star Wars: Episodio VI - Il ritorno dello Jedi)";
$movie_3->year = "25 maggio 1983";
$movie_3->type = "Fantascienza";

var_dump($movie_1);
var_dump($movie_2);
var_dump($movie_3);
