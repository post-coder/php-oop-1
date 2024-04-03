<?php 

// title, director, genre, publicationYear

class Movie {

    public $title;
    public $director;
    public $genres;
    public $publicationYear;
    public $poster = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT-r_cd2YunvZ5iqRYvb4QJ312hlRGqDNnTRmLVuxRw7CDnH1yQLf6dKrCdJ-9dCrwukHI&usqp=CAU'; // NULL

    
    /**
     * __construct
     *
     * @param  string $title
     * @param  Director $director
     * @param  string[] $genres
     * @param  int $publicationYear
     */
    function __construct($title, Director $director, $genres, $publicationYear) {
        $this->title = $title;
        $this->director = $director;
        $this->genres = $genres;
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