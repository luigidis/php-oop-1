<?php

class Movie
{
    public $title;
    public $original_title;
    public $vote;
    public $languages;
    public $poster;
    public $actors = [];

    function __construct($title, $original_title, $vote, $languages, $poster, $actors)
    {
        $this->title = $title;
        $this->original_title = $original_title;
        $this->setVote($vote);
        $this->languages = $languages;
        $this->poster = $poster;
        $this->actors = $actors;
    }

    public function setVote($vote)
    {
        if (($vote >= 0 && $vote <= 5) && is_numeric($vote)) {
            $this->vote = $vote;
        } else {
            $this->vote = 0;
            die("Error: Invalid Vote.");
        }
    }

    // public function actorHere($actor) {
    //     foreach ($this->$actors as $actor)
    //     if ($actor != $actors) {
    //         array_push($actors);
    //     }
    // }
};

class Actor {
    public $name;
    public $last_name;
    public $full_name;
    
    function __construct($name, $last_name)
    {
        $this->name = $name;
        $this->last_name = $last_name;
        $this->full_name = $name + $last_name;
    }
};

$actor_1 = new Actor('Zio', 'Gianni');
var_dump($actor_1);

$actors_movie_1 = ['Bradleu Cooper', 'Zach Galifianakis', 'Ed Helms', 'Ken Jeong'];
$actors_movie_2 = ['Jordan Belfort', 'Leonardo di Caprio', 'Jonah Hill', 'Margot Robbie'];
$actors_movie_3 = ['Russel Crowe', 'Joaquin Phoenix', 'Connie Nielsen'];
$actors_movie_4 = ['Brad Pitt', 'Eli Roth', 'Cristoph Waltz'];
$actors_movie_5 = ['Samuel L. Jackson', 'Kurt Russell', 'Jennifer Jason Leigh'];



$array_movies = [
    $movie_1 = new Movie(
        'Una notte da leoni',
        'The Hangover',
        5,
        'it',
        'https://spettacolo.periodicodaily.com/wp-content/uploads/2020/03/the-wolf-of-wall-street.jpg',
        $actors_movie_1
    ),
    $movie_2 = new Movie(
        'Il lupo di Wall Street',
        'The Wolf of Warr Street',
        5,
        'it',
        'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTOmrn5weXWxW6RWbnhE9u-dtarzK8PWrk3krPzSOtZTHEZ40Cz',
        $actors_movie_2
    ),
    $movie_3 = new Movie(
        'Il Gladiatore',
        'Gladiator',
        5,
        'it',
        'https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcRNMl-WdjohldG9Ff2xNw-2P22BpVMsFIv0eTpMdPpHvAvQ8Ft0',
        $actors_movie_3
    ),
    $movie_4 = new Movie(
        'Bastardi senza gloria',
        'Inglourious Basterds',
        5,
        'it',
        'https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcTbTnP7s3OW6zwZ_8-_IPoLYI6n2qGbAYOo4yUqp1wc-aV3GQwH',
        $actors_movie_4
    ),
    $movie_5 = new Movie(
        'The Hateful Eight',
        'The Hateful Eight ',
        5,
        'it',
        'https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcQ7pMlpbg-6z3unFu_EdGHq-wNUsEPZ7K2SljgUpO6pNy3M7g3U',
        $actors_movie_5
    ),
];



// var_dump($array_movies);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>My Favourite Films</title>
</head>

<body>
    <div class="container">
        <div class="wrapper">
            <ul class="film_wrapper">
                <?php
                foreach ($array_movies as $movie) {
                    $title = $movie->title;
                    $original_title = $movie->original_title;
                    $vote = $movie->vote;
                    $languages = $movie->languages;
                    $poster = $movie->poster;
                    // var_dump($movie->title);

                ?>
                    <li id="film">
                        <h2>Title: "<?= $title ?>" </h2>
                        <h4>Original Title: "<?= $original_title ?>"" </h4>
                        <div>Vote: <?= $vote ?> </div>
                        <div>Lang: <?= $languages ?> </div>
                        <img src="<?= $poster ?>" alt="<?= $title ?>">
                    </li>
                <?php
                };
                ?>
            </ul>
        </div>
    </div>
</body>

</html>