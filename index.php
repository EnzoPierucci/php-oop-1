<?php
class Movie {
    // Variabili d'istanza
    public $title;
    public $director;
    public $genre;
    public $year;

    // Costruttore
    public function __construct($title, $director, $genre, $year) {
        $this->title = $title;
        $this->director = $director;
        $this->genre = $genre;
        $this->year = $year;
    }

    // Metodo d'istanza
    public function getMovieInfo() {
        return "{$this->title}, diretto da {$this->director}, è un film di genere {$this->genre} uscito nell'anno {$this->year}.";
    }
}

// Istanza del primo oggetto Movie
$movie1 = new Movie("Interstellar", "Christopher Nolan", "Sci-fi", 2014);
// Istanza del secondo oggetto Movie
$movie2 = new Movie("Il Signore degli Anelli", "Peter Jackson", "Fantasy", 2001);

// Stampa le informazioni dei film
echo $movie1->getMovieInfo();
echo "<br>";
echo $movie2->getMovieInfo();
?>
