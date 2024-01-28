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
    new Movie("Memento", "Christopher Nolan", 2000, "Mystery", 113, 8.4, ["Guy Pearce", "Carrie-Anne Moss"], "A man with short-term memory loss trying to solve a mystery", "English", "$9 million"),
    new Movie("The Prestige", "Christopher Nolan", 2006, "Drama", 130, 8.5, ["Christian Bale", "Hugh Jackman"], "Rival magicians engage in a competitive rivalry", "English", "$40 million"),
    new Movie("Batman Begins", "Christopher Nolan", 2005, "Action", 140, 8.2, ["Christian Bale", "Liam Neeson"], "Bruce Wayne becomes Batman", "English", "$150 million"),
    new Movie("The Dark Knight Rises", "Christopher Nolan", 2012, "Action", 164, 8.4, ["Christian Bale", "Tom Hardy"], "Batman faces a new enemy, Bane", "English", "$230 million"),
    new Movie("Tenet", "Christopher Nolan", 2020, "Action", 150, 7.4, ["John David Washington", "Robert Pattinson"], "Time manipulation and inversion", "English", "$200 million"),
];

$tarantinoMovies = [
    new Movie("Pulp Fiction", "Quentin Tarantino", 1994, "Crime", 154, 8.9, ["John Travolta", "Samuel L. Jackson"], "Interconnected crime stories in Los Angeles", "English", "$8 million"),
    new Movie("Kill Bill: Vol. 1", "Quentin Tarantino", 2003, "Action", 111, 8.1, ["Uma Thurman", "Lucy Liu"], "The Bride seeks revenge against her former allies", "English", "$30 million"),
    new Movie("Django Unchained", "Quentin Tarantino", 2012, "Drama", 165, 8.4, ["Jamie Foxx", "Christoph Waltz"], "A freed slave sets out to rescue his wife", "English", "$100 million"),
    new Movie("Once Upon a Time in Hollywood", "Quentin Tarantino", 2019, "Comedy", 161, 7.6, ["Leonardo DiCaprio", "Brad Pitt"], "A fading actor and his stunt double navigate the changing industry", "English", "$90 million"),
    new Movie("Reservoir Dogs", "Quentin Tarantino", 1992, "Crime", 99, 8.3, ["Harvey Keitel", "Tim Roth"], "A botched jewelry heist and its aftermath", "English", "$1.2 million"),
    new Movie("Jackie Brown", "Quentin Tarantino", 1997, "Crime", 154, 7.5, ["Pam Grier", "Samuel L. Jackson"], "Flight attendant gets involved in smuggling money", "English", "$12 million"),
    new Movie("The Hateful Eight", "Quentin Tarantino", 2015, "Mystery", 168, 7.8, ["Samuel L. Jackson", "Kurt Russell"], "Bounty hunters seek shelter during a blizzard", "English", "$44 million"),
    new Movie("Kill Bill: Vol. 2", "Quentin Tarantino", 2004, "Action", 137, 8.0, ["Uma Thurman", "David Carradine"], "The Bride continues her quest for vengeance", "English", "$30 million"),
    new Movie("Inglourious Basterds", "Quentin Tarantino", 2009, "Drama", 153, 8.3, ["Brad Pitt", "Christoph Waltz"], "A group of Jewish U.S. soldiers plot to kill Hitler", "English", "$70 million"),
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


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>nolan and tarantino's films</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body class="bg-dark">

    <main class="container fluid d-flex flex-wrap">
        <?php foreach ($nolanMovies as $movie) : ?>
            <div class="card m-2 bg-primary-subtle" style="width: 18rem;">
                <!-- <img src="..." class="card-img-top" alt="movie img"> -->
                <div class="card-body">
                    <h5 class="card-title text-center mb-4"><?php echo $movie->title; ?></h5>
                    <p class="card-text"><?php echo $movie->director; ?></p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <p>
                            Release date: <?php echo $movie->releaseYear ?>
                        </p>
                    </li>
                    <li class="list-group-item">
                        <p>
                            Genre: <?php echo $movie->genre ?>
                        </p>
                    </li>
                    <li class="list-group-item">
                        <p>
                            Rating: <?php echo $movie->rating ?>
                        </p>
                    </li>
                    <li class="list-group-item">
                        <p>
                            Rating: <?php echo $movie->genre ?>
                        </p>
                    </li>
                    <li class="list-group-item">
                        <p>
                            Actors:
                            <?php echo implode(", ", $movie->actors); ?>
                        </p>
                    </li>
                    <li class="list-group-item">
                        <p>
                            Rating: <?php echo $movie->genre ?>
                        </p>
                    </li>
                    <li class="list-group-item">
                        <p>
                            Rating: <?php echo $movie->genre ?>
                        </p>
                    </li>
                </ul>
            </div>
        <?php endforeach; ?>

        <?php foreach ($tarantinoMovies as $movie) : ?>
            <div class="card m-2 bg-info-subtle
" style="width: 18rem;">
                <!-- <img src="..." class="card-img-top" alt="movie img"> -->
                <div class="card-body">
                    <h5 class="card-title text-center mb-4"><?php echo $movie->title; ?></h5>
                    <p class="card-text"><?php echo $movie->director; ?></p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <p>
                            Release date: <?php echo $movie->releaseYear ?>
                        </p>
                    </li>
                    <li class="list-group-item">
                        <p>
                            Genre: <?php echo $movie->genre ?>
                        </p>
                    </li>
                    <li class="list-group-item">
                        <p>
                            Rating: <?php echo $movie->rating ?>
                        </p>
                    </li>
                    <li class="list-group-item"><?php echo $movie->genre ?></li>
                    <li class="list-group-item"><?php echo $movie->rating ?></li>
                </ul>
            </div>
        <?php endforeach; ?>
    </main>

</body>

</html>