<?php
// esecizio ricominciato da capo 

class MOVIE
{
    // variabili d'istanza
    public $title;
    public $director;
    public $releaseYear;
    public $genre;
    public $duration;
    public $rating;
    public $actors;
    public $plot;
    public $language;
    public $budget;

    // construct
    public function __construct($title, $director, $releaseYear, $genre, $duration, $rating, $actors, $plot, $language, $budget)
    {
        $this->title = $title;
        $this->director = $director;  // <-- Added semicolon here
        $this->releaseYear = $releaseYear;
        $this->genre = $genre;
        $this->duration = $duration;
        $this->rating = $rating;
        $this->actors = $actors;
        $this->plot = $plot;
        $this->language = $language;
        $this->budget = $budget;
    }
}

// creazione di due oggetti Movie, all'interno dei quali inserisco rispettivamente 4 film
$nolanMovies = [
    new Movie("Inception", "Christopher Nolan", 2010, "Sci-Fi", 148, 8.8, ["Leonardo DiCaprio", "Joseph Gordon-Levitt"], "A thief who enters the dreams of others", "English", "$160 million"),
    new Movie("The Dark Knight", "Christopher Nolan", 2008, "Action", 152, 9.0, ["Christian Bale", "Heath Ledger"], "Batman faces the Joker's chaos", "English", "$185 million"),
    new Movie("Interstellar", "Christopher Nolan", 2014, "Sci-Fi", 169, 8.6, ["Matthew McConaughey", "Anne Hathaway"], "Space voyage to save humanity", "English", "$165 million"),
    new Movie("Dunkirk", "Christopher Nolan", 2017, "War", 106, 7.8, ["Fionn Whitehead", "Tom Hardy"], "Evacuation of Allied soldiers during World War II", "English", "$100 million"),
];

$tarantinoMovies = [
    new Movie("Pulp Fiction", "Quentin Tarantino", 1994, "Crime", 154, 8.9, ["John Travolta", "Samuel L. Jackson"], "Interconnected crime stories in Los Angeles", "English", "$8 million"),
    new Movie("Kill Bill: Vol. 1", "Quentin Tarantino", 2003, "Action", 111, 8.1, ["Uma Thurman", "Lucy Liu"], "The Bride seeks revenge against her former allies", "English", "$30 million"),
    new Movie("Django Unchained", "Quentin Tarantino", 2012, "Drama", 165, 8.4, ["Jamie Foxx", "Christoph Waltz"], "A freed slave sets out to rescue his wife", "English", "$100 million"),
    new Movie("Once Upon a Time in Hollywood", "Quentin Tarantino", 2019, "Comedy", 161, 7.6, ["Leonardo DiCaprio", "Brad Pitt"], "A fading actor and his stunt double navigate the changing industry", "English", "$90 million"),
];


// Funzione per visualizzare le informazioni di un film
function displayMovieInfo($movie)
{
    echo "Title: {$movie->title}\n";
    echo "Director: {$movie->director}\n";
    echo "Release Year: {$movie->releaseYear}\n";
    echo "Genre: {$movie->genre}\n";
    echo "Duration: {$movie->duration} minutes\n";
    echo "Rating: {$movie->rating}\n";
    echo "Actors: " . implode(", ", $movie->actors) . "\n";
    echo "Plot: {$movie->plot}\n";
    echo "Language: {$movie->language}\n";
    echo "Budget: {$movie->budget}\n\n";
}
