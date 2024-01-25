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


// Funzione per visualizzare le informazioni del film
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

// info Nolan 
echo "Christopher Nolan Movies:\n";
foreach ($nolanMovies as $movie) {
    displayMovieInfo($movie);
}

// info Tarantino
echo "Quentin Tarantino Movies:\n";
foreach ($tarantinoMovies as $movie) {
    displayMovieInfo($movie);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>nolan and tarantino's films</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>

    <main>
        <section class="container-fluid">
            <div class="card" style="width: 18rem;">
                <img src="..." class="card-img-top" alt="movie img">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $movie->title; ?></h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">An item</li>
                    <li class="list-group-item">A second item</li>
                    <li class="list-group-item">A third item</li>
                </ul>
                <div class="card-body">
                    <a href="#" class="card-link">Card link</a>
                    <a href="#" class="card-link">Another link</a>
                </div>
            </div>
        </section>
    </main>

</body>

</html>