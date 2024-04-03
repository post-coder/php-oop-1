<?php

require './Models/Movie.php';
require './Models/Director.php';

$venier = new Director("Massimo", "Venier", "italiana");
$lanthimos = new Director("Yorgos", "Lanthimos", "greca");




// ______________________________________________________

$movies = [
    new Movie("Poor Things!", $lanthimos, ["Commedia", "Drammatico", "Sentimentale"], 2024),
    new Movie("La leggenda di Al, John e Jack", $venier, ["Commedia", "Gangster", "Noir"], 2002),
];


$movies[1]->poster = "https://pad.mymovies.it/filmclub/2002/12/008/locandina.jpg";

// var_dump($movies);