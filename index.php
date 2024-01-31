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

    function getGeneri()
    {
        return " e si tratta di un film di un film " . implode('/', $this->type);
    }
}




$movie_1 = new movie("Guerre stellari (Star Wars: Episodio IV - Una nuova speranza)", "25 maggio 1977", ["Fantascienza", "Fantapolitico"], 18);

/* $movie_1->name = "Guerre stellari (Star Wars: Episodio IV - Una nuova speranza)";
$movie_1->year = "25 maggio 1977";
$movie_1->type = "Fantascienza"; */


$movie_2 = new movie("L'Impero colpisce ancora (Star Wars: Episodio V - L'Impero colpisce ancora)", "21 maggio 1980", ["Fantascienza", "Fantapolitico"], 18);

    /* $movie_2->name = "L'Impero colpisce ancora (Star Wars: Episodio V - L'Impero colpisce ancora)";
$movie_2->year = "21 maggio 1980";
$movie_2->type = "Fantascienza" */;


$movie_3 = new movie("Il ritorno dello Jedi (Star Wars: Episodio VI - Il ritorno dello Jedi)", "25 maggio 1983", ["Fantascienza", "Fantapolitico"], 17);

/* $movie_3->name = "Il ritorno dello Jedi (Star Wars: Episodio VI - Il ritorno dello Jedi)";
$movie_3->year = "25 maggio 1983";
$movie_3->type = "Fantascienza"; */



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title></title>
</head>

<body>
    <div class="container black">
        <div class="row">
            <div class="col-12 text-center pt-3">
                <h1>I MIGLIORI FILM DELLA SAGA DI STAR WARS</h1>
            </div>
            <div class="col-8 my-4 text-center">
                <div class="card" style="width: 50rem;">
                    <img src="https://i5.walmartimages.com/asr/c218724c-fc11-4dfc-9652-80a6b56d4137.76408bb17269c9daf22ba2570cb7168d.jpeg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text"><?php echo $movie_1->name . " è uscito nelle sale il " . $movie_1->year  . $movie_1->getGeneri() . "," . $movie_1->getPegi() . "<br>"; ?></p>
                    </div>
                </div>
            </div>
            <div class="col-4 my-4">
                <div class="card" style="width: 30rem;">
                    <div class="card-body">
                        <h5 class="card-title">Guerre stellari (Star Wars: Episodio IV - Una nuova speranza)</h5>
                        <p class="card-text">Sono trascorsi 19 anni dalla fondazione dell'Impero Galattico. Dal Palazzo Imperiale di Coruscant, l'Imperatore Palpatine, ovvero l'Oscuro Signore dei Sith Darth Sidious, ha rafforzato il suo potere sulla Galassia nelle vesti di monarca assoluto, ed il suo allievo Lord Darth Fener, sempre più consumato dal Lato Oscuro della Forza e leader della Marina Imperiale, ha inseguito e ucciso gli ultimi cavalieri Jedi sopravvissuti. L'Impero ha però trovato un nemico nell'Alleanza Ribelle, composta dai senatori, dai governi e dalle forze armate planetarie dei mondi rimasti fedeli agli ideali della vecchia Repubblica Galattica, che si sta rinforzando sempre di più grazie alla guida della senatrice Mon Mothma e ai successi diplomatici della giovane principessa di Alderaan Leila Organa, figlia adottiva dei governatori Bail e Breha Organa, da tempo in ritiro.</p>
                    </div>
                </div>
            </div>
            <div class="col-8 my-4 text-center">
                <div class="card" style="width: 50rem;">
                    <img src="https://www.swx.it/wp/wp-content/uploads/2009/09/impero-colpisce-ancora-trascrizione-e1482511758869.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text"><?php echo $movie_2->name . " è uscito nelle sale il " . $movie_2->year . $movie_2->getGeneri() . "," . $movie_2->getPegi() . "<br>"; ?></p>
                    </div>
                </div>
            </div>
            <div class="col-4 my-4">
                <div class="card" style="width: 30rem;">
                    <div class="card-body">
                        <h5 class="card-title">L'Impero colpisce ancora (Star Wars: Episodio V - L'Impero colpisce ancora)</h5>
                        <p class="card-text">Sono trascorsi due anni dalla battaglia di Yavin e le forze dell'Alleanza Ribelle sono costrette a rifugiarsi sul gelido pianeta Hoth per sfuggire alla persecuzione da parte delle armate imperiali. Queste, ancora una volta guidate dal perfido Dart Fener, sono decise a stroncare una volta per tutte i focolai di ribellione, soprattutto dopo la distruzione della Morte Nera. Pur di catturare i suoi nemici, Fener ha inviato ai più remoti confini dello spazio dei droidi-sonda, con l'intento di scovare il nascondiglio ribelle, prendendo al proprio servizio un drappello di cacciatori di taglie desiderosi soprattutto di catturare Ian, sul quale il potente gangster Jabba the Hutt ha posto una taglia. Durante una ricognizione Luke viene attaccato da un wampa, un pericoloso animale delle nevi, </p>
                    </div>
                </div>
            </div>
            <div class="col-8 my-4 text-center">
                <div class="card" style="width: 50rem;">
                    <img src="https://www.swx.it/wp/wp-content/uploads/2009/09/ritorno-dello-jedi-trascrizione-e1482511542222.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text"><?php echo $movie_3->name . " è uscito nelle sale il " . $movie_3->year . $movie_3->getGeneri() . "," . $movie_3->getPegi() . "<br>"; ?></p>
                    </div>
                </div>
            </div>
            <div class="col-4 my-4">
                <div class="card" style="width: 30rem;">
                    <div class="card-body">
                        <h5 class="card-title">Il ritorno dello Jedi (Star Wars: Episodio VI - Il ritorno dello Jedi)</h5>
                        <p class="card-text">Luke Skywalker e i suoi amici sono giunti su Tatooine in un ultimo tentatvio di liberare Han Solo prigioniero nel palazzo di Jabba. Dappria arrivano i due droidi, R2-D2 e C-3PO, con un messaggio olografico di Skywalker che chiede a Jabba di lasciare libero Solo, ma finiscono per diventare schiavi del bandito. Quella sera, la Max Rebo Band (con a capo Sy Snootles e Max Rebo) intrattiene gli ospiti di Jabba. Questi è affascinato dai graziosi volteggi della sua schiava Oola. Oola respinge le sue avances e viene gettata nel pozzo del rancor, un mostro da cui viene uccisa immediatamente. Inaspettatamente, la Principessa Leia Organa (nei panni del cacciatore di taglie Boushh) arriva con Chewbacca in manette, apparentemente per riscuotere una parte della taglia che Jabba stesso aveva posto anni prima sulla testa di Solo. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>