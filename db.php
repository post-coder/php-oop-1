<?php

require './Models/Movie.php';


$movies = [
    new Movie("Poor Things!", "Yorgos Lanthimos", ["Commedia", "Drammatico", "Sentimentale"], 2024),
    new Movie("La leggenda di Al, John e Jack", "Massimo Venier", ["Commedia", "Gangster", "Noir"], 2002),
];


$movies[1]->poster = "https://pad.mymovies.it/filmclub/2002/12/008/locandina.jpg";

// var_dump($movies);