<?php
#created class
class Movie
{
#instance variables
    public $title;
    public $rating;
    public $description;

#constructor function
    public function __construct($_title, $_rating, $_description)
    {
        $this->title = $_title;
        $this->rating = $_rating;
        $this->description = $_description;
        #rederclared instance variables
    }
# setting and getting
    public function getTitle()
    {
        return $this->title;
    }
    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getRating()
    {
        return $this->rating;
    }
    public function setRating($rating)
    {
        $this->rating = $rating;
    }

    public function getDescription()
    {
        return $this->rating;
    }
    public function setDescription($description)
    {
        $this->description = $description;
    }

}
$movies = new Movie($_GET['title'], $_GET['rating'], $_GET['description']);

var_dump($movies);
$movies->setTitle('string1');
$movies->setRating('string2');
$movies->setDescription('string3');
var_dump($movies);
