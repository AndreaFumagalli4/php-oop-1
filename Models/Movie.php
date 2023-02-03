<?php 
class Movie {

    public $name;
    public $genre;
    public $mainCharacter;
    public $year;

    function __construct($_name, $_genre, $_mainCharacter, $_year)
    {
        $this->name = $_name;
        $this->genre = $_genre;
        $this->mainCharacter = $_mainCharacter;
        $this->year = $_year;
    }

    public function getName(){
        return $this->name;
    }
}

?>