<?php
class movie
{
    public $name;
    public $year;
    public $type;
    public $age;

    function __construct($_name, $_year, $_type, $_age)
    {
        $this->name = $_name;
        $this->year = $_year;
        $this->type = $_type;
        $this->age = $_age;
    }

    function getPegi()
    {
        if ($this->age > 17) {
            return  "Vietato ai minori di 18 anni";
        } else {
            return "Visibile da tutti";
        }
    }
}




$movie_1 = new movie("Guerre stellari (Star Wars: Episodio IV - Una nuova speranza)", "25 maggio 1977", "Fantascienza", 18);

/* $movie_1->name = "Guerre stellari (Star Wars: Episodio IV - Una nuova speranza)";
$movie_1->year = "25 maggio 1977";
$movie_1->type = "Fantascienza"; */


$movie_2 = new movie("L'Impero colpisce ancora (Star Wars: Episodio V - L'Impero colpisce ancora)", "21 maggio 1980", "Fantascienza", 18);

    /* $movie_2->name = "L'Impero colpisce ancora (Star Wars: Episodio V - L'Impero colpisce ancora)";
$movie_2->year = "21 maggio 1980";
$movie_2->type = "Fantascienza" */;


$movie_3 = new movie("Il ritorno dello Jedi (Star Wars: Episodio VI - Il ritorno dello Jedi)", "25 maggio 1983", "Fantascienza", 17);

/* $movie_3->name = "Il ritorno dello Jedi (Star Wars: Episodio VI - Il ritorno dello Jedi)";
$movie_3->year = "25 maggio 1983";
$movie_3->type = "Fantascienza"; */



echo $movie_1->name . " è uscito nelle sale il " . $movie_1->year . " e si tratta di un film di " . $movie_1->type . "," . $movie_1->getPegi() . "<br>";
echo $movie_2->name . " è uscito nelle sale il " . $movie_2->year . " e si tratta di un film di " . $movie_2->type . "," . $movie_1->getPegi() . "<br>";
echo $movie_3->name . " è uscito nelle sale il " . $movie_3->year . " e si tratta di un film di " . $movie_3->type . "," . $movie_1->getPegi() . "<br>";
