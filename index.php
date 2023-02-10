<?php

class Movie{
    public $title;
    public $language;
    public $genre;
    public $year;
    public $discount;
    function __construct($_title,$_language,$_genre,$_year){
        $this->title = $_title;
        $this->language = $_language;
        $this->genre = $_genre;
        $this->year = $_year;
    }

    public function setDiscount($year){
        if ($year < 2000){
            $this->discount = 50;
        }
        else {
            $this->discount = 10;
        }
    }
    public function getDiscount(){
        return $this->discount;
    }
};

$movie_1 = new Movie('Avatar','Inglese','Fantasy','2022');
$movie_2 = new Movie('Titanic','Italiano','Romantico','1997');
$movie_3 = new Movie('Jurassic World','Inglese','Sci-fi','2015');

$array_movie = 
[
    $movie_1,
    $movie_2,
    $movie_3
]

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Document</title>
</head>

<body>
    <h1>LISTA FILM</h1>
    <div>I film usciti prima del 2000 hanno lo sconto del 50%, quelli dopo il 2000 del 10%</div>
    <div>
        <?php
            foreach ($array_movie as $key => $value) {
                ?>
        <h2>
            <?php
                echo $value->title;
            ?>
        </h2>
        <p>
            <?php
                echo $value->language;
                echo "<br>".$value->genre;
                echo "<br>".$value->year;
            ?>
        </p>
        <span>
            <?php
                $movie_year = $value->year;
                $value->setDiscount($movie_year);
                echo "Sconto:". $value->getDiscount()."%";
            ?>
        </span>
        <?php }?>
    </div>
</body>

</html>