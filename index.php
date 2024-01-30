<?php

class Movie {
    public $title;
    public $genre;
    public $releaseDate;
    public $vote = 0;

    function __construct($_title, $_genre, $_releaseDate){
        $this->title = $_title;
        $this->genre = implode(" - ", $_genre);
        $this->releaseDate = $_releaseDate;
    }

    function setVote($_vote){
        $this->vote = $_vote;
    }

    function getVote(){
        return $this->vote;
    }
}

$oppenheimer = new Movie('Oppenheimer', ['Thriller'], 2023);
$oppenheimer->setVote(5);

$theOthers = new Movie('The Others', ['Thriller', 'Horror'], 2001);
$theOthers->setVote(5);

$schindler = new Movie("Schindler's List - La lista di Schindler", ['Guerra', 'Documentario'], 1993);
$schindler->setVote(4);

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
            <p><?php echo "Vote: ".$oppenheimer->getVote() ?></p>
        </li>
        <li>
            <h3><?php echo $theOthers->title ?></h3>
            <b><?php echo $theOthers->genre."<br>" ?></b>
            <b><?php echo "Released on: ".$theOthers->releaseDate ?></b>
            <p><?php echo "Vote: ".$theOthers->getVote() ?></p>
        </li>
        <li>
            <h3><?php echo $schindler->title ?></h3>
            <b><?php echo $schindler->genre."<br>" ?></b>
            <b><?php echo "Released on: ".$schindler->releaseDate ?></b>
            <p><?php echo "Vote: ".$schindler->getVote() ?></p>
        </li>
    </ul>
    
</body>
</html>