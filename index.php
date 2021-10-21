<?php
#created class
class Movie
{
#instance variables
    public $title;
    public $description;
    public $rating;
#constructor function
    public function __construct($_title, $_rating, $_description)
    {
        $this->title = $_title;
        $this->rating = $_rating;
        $this->description = $_description;
        #rederclared instance variables
    }
#add attributes Method
public function addAttributes($title,$description,$rating) {

    echo 'ciao0';

}

}
$movie->addAttributes();
$movies =  new Movie($_title, $_rating, $_description);
var_dump($movies);


