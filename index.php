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
        $this->setVote($vote);
        $this->languages = $languages;
        $this->poster = $poster;    
    }

    public function setVote($vote) {
        if (($vote >= 0 && $vote <= 5) && is_numeric($vote)) {
            $this->vote = $vote;
        } else {
            $this->vote = 0;
            echo 'Voto non inserito correttamente';
        }
    }
}
            
        


$array_movies = [
    $movie_1 = new Movie('Una notte da leoni', 'The Hangover', 5, 'it', 'https://spettacolo.periodicodaily.com/wp-content/uploads/2020/03/the-wolf-of-wall-street.jpg'),
    $movie_2 = new Movie('Il lupo di Wall Street', 'The Wolf of Warr Street', 5, 'it', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTOmrn5weXWxW6RWbnhE9u-dtarzK8PWrk3krPzSOtZTHEZ40Cz'),
    $movie_3 = new Movie('Il Gladiatore', 'Gladiator', 9, 'it', 'https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcRNMl-WdjohldG9Ff2xNw-2P22BpVMsFIv0eTpMdPpHvAvQ8Ft0'),
    $movie_4 = new Movie('Bastardi senza gloria', 'Inglourious Basterds', 5, 'it', 'https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcTbTnP7s3OW6zwZ_8-_IPoLYI6n2qGbAYOo4yUqp1wc-aV3GQwH'),
    $movie_5 = new Movie('The Hateful Eight', 'The Hateful Eight ', 5, 'it', 'https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcQ7pMlpbg-6z3unFu_EdGHq-wNUsEPZ7K2SljgUpO6pNy3M7g3U'),
];

var_dump($array_movies);









