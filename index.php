<?php

class Movie {
    public $title;
    public $genre;
    public $releaseDate;
    public $vote;

    function __construct($_title, $_genre, $_releaseDate, $_vote){
        $this->title = $_title;
        $this->genre = implode($_genre);
        $this->releaseDate = $_releaseDate;
        $this->vote = $_vote;
    }

}

$oppenheimer = new Movie('Oppenheimer', ['Thriller - ', 'Horror'], 2023, 5);
$theOthers = new Movie('The Others', ['Thriller'], 2001, 5);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Object Oriented Programming</title>
</head>
<body>
    <ul>
        <li>
            <h3><?php echo $oppenheimer->title ?></h3>
            <b><?php echo $oppenheimer->genre."<br>" ?></b>
            <b><?php echo "Released on: ".$oppenheimer->releaseDate ?></b>
            <p><?php echo "Vote: ".$oppenheimer->vote ?></p>
        </li>
        <li>
            <h3><?php echo $theOthers->title ?></h3>
            <b><?php echo $theOthers->genre."<br>" ?></b>
            <b><?php echo "Released on: ".$theOthers->releaseDate ?></b>
            <p><?php echo "Vote: ".$theOthers->vote ?></p>
        </li>
    </ul>
    
</body>
</html>