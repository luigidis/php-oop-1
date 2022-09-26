<?php 

class Movie {
    public $title;
    public $original_title; 
    public $vote; 
    public $languages;
    public $poster;

    function __construct($title, $original_title, $vote, $languages, $poster)
    {
        $this->title = $title;
        $this->original_title = $original_title;
        $this->vote = $vote;
        $this->languages = $languages;
        $this->poster = $poster;    
    }

    public function setVote($vote) {
        if (($vote >= 0 || $vote <= 5) && is_numeric($vote)) {
            $this->vote = $vote;
        } else echo 'Voto non inserito';
    }
}


//Prima istanza

$movie_1 = new Movie('Una notte da leoni', 'The Hangover', 5, 'it', 'https://spettacolo.periodicodaily.com/wp-content/uploads/2020/03/the-wolf-of-wall-street.jpg');

//Seconda istanza

$movie_2 = new Movie('Il lupo di Wall Street', 'The Wolf of Warr Street', 5, 'it', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTOmrn5weXWxW6RWbnhE9u-dtarzK8PWrk3krPzSOtZTHEZ40Cz');

var_dump($movie_1, $movie_2);