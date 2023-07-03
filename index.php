<?php

class Movie {

    public $title;
    public $year;
    public $genre;
    public $duration;
    public $director;

    public function __construct(
        $title, $year, $genre, $duration, $director,
    ) {

        $this -> title = $title;
        $this -> year = $year;
        $this -> genre = $genre;
        $this -> duration = $duration;
        $this -> director = $director;

        
    }

    public function getInfo() {

        return "Title: " . $this -> title 
            . "<br>Year: " . $this -> year
            . "<br>Genre: " . $this -> genre
            . "<br>Duration: " . $this -> duration
            . "<br>Director: " . $this -> director; 
    }
}

$m1 = new Movie("The wolf Of Wall Street", 2013, "biografico, commedia, drammatico", 180, "Martin Scorsese");
$m2 = new Movie("La grande scommessa", 2015, "Commedia", 130, "Adam McKay");

echo "M1:<br>" . $m1 -> getInfo()
    . "<br>-------------<br>"
    . "M2:<br>" . $m2 -> getInfo();