<?php

class Movie {
    public $title;
    public $genre;
    public $releaseDate;
    public $vote;

    function __construct($_title, $_genre, $_releaseDate, $_vote){
        $this->title = $_title
        $this->genre = $_genre
        $this->releaseDate = $_releaseDate
        $this->vote = $_vote
    }
};

$oppenheimer = new Movie('Oppenheimer', 'Thriller', 2023, 5);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Object Oriented Programming</title>
</head>
<body>
    <?php 
        echo $oppenheimer->title
    ?>
</body>
</html>