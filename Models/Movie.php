<?php 

// title, director, genre, publicationYear

class Movie {

    public $title;
    public $director;
    public $genre;
    public $publicationYear;
    public $poster; // NULL

    
    /**
     * __construct
     *
     * @param  string $title
     * @param  string $director
     * @param  string $genre
     * @param  int $publicationYear
     */
    function __construct($title, $director, $genre, $publicationYear) {
        $this->title = $title;
        $this->director = $director;
        $this->genre = $genre;
        $this->publicationYear = $publicationYear;
    }

    
    /**
     * getAge restituisce il numero di anni passati dalla pubblicazione del film
     *
     * @return void
     */
    public function getAge() {
        return date("Y") - $this->publicationYear;
    }

}