<!--  è definita una classe ‘Movie’
   => all’interno della classe sono dichiarate delle variabili d’istanza
   => all’interno della classe è definito un costruttore
   => all’interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà -->

<?php

class Movie {
// Variabili
public $title;
public $year;
public $news;
public $description;
public $genre;
public $ratings;


// Costruttore
function __construct($year, $title) {
    $this -> year = $year;
    $this -> title = $title;
}


// Metodo
public function setNews() {
if($this->year > 2020) {
    $this -> news = "Novità";
} else {
    $this -> news = "Classico";
}
}

public function getNews() {
    return $this -> news;
}

public function setRatings() {
    if($this -> title === "Jurassic Park") {
        $this -> ratings = "Figata!";
    } else {
        $this -> ratings = "È meglio Jurassic Park";
    }
}

public function getRatings() {
    return $this -> ratings;
}

}

// Istanza 1
$JurassicPark = new Movie(1993, 'Jurassic Park');
// $JurassicPark -> title = 'Jurassic Park';
$JurassicPark -> setNews();
$news_JurassicPark = $JurassicPark -> getNews();
$JurassicPark -> description = 'Su Isla Nublar, una piccola isola di proprietà della InGen situata a 120 miglia a nord-ovest della Costa Rica, un operaio viene assalito e ucciso da una feroce creatura, custodita in una gabbia che la vittima stava spostando insieme ai colleghi. La famiglia dell\'uomo fa causa al proprietario della InGen, John Hammond, un simpatico ed eccentrico miliardario con la passione per i dinosauri.';
$JurassicPark -> genre = 'Azione';
$JurassicPark -> setRatings();
$ratings_JurassicPark = $JurassicPark -> getRatings();


// Istanza 2
$KingsMan = new Movie(2022, 'The King\'s Man - Le Origini');
// $KingsMan-> title = 'The King\'s Man - Le Origini';
$KingsMan -> setNews();
$news_KingsMan= $KingsMan-> getNews();
$KingsMan -> description = 'Le radici della società segreta affondano nella Gran Bretagna della Prima guerra mondiale ed è in questo periodo che nella terra inglese nasce una generazione di guerrieri d\'élite. Segue una raccolta dei peggiori tiranni e menti criminali della storia, riuniti tutti insieme per uno scopo comune: organizzare una guerra che spazzi via milioni di vite umane.';
$KingsMan-> genre = 'Avventura';
$KingsMan -> setRatings();
$ratings_KingsMan = $KingsMan -> getRatings();

?>