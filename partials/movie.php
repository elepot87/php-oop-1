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


// Costruttore
function __construct($year) {
    $this -> year = $year;
}

// Metodo
public function setNews($year) {
if($year > 2020) {
    $this -> news = "Novità";
} else {
    $this -> news = "Classico";
}
}

public function getNews() {
    return $this -> news;
}



}

// Istanza 1

$JurassicPark = new Movie(2022);
$JurassicPark -> title = 'Jurassic Park';
$news_JurassicPark = $JurassicPark -> getNews();
$JurassicPark -> setNews($year);
$JurassicPark -> description = 'Su Isla Nublar, una piccola isola di proprietà della InGen situata a 120 miglia a nord-ovest della Costa Rica, un operaio viene assalito e ucciso da una feroce creatura, custodita in una gabbia che la vittima stava spostando insieme ai colleghi. La famiglia dell\'uomo fa causa al proprietario della InGen, John Hammond, un simpatico ed eccentrico miliardario con la passione per i dinosauri.';
$JurassicPark -> genre = 'Azione';
?>