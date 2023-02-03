<?php 
class Movie {

    public $name;
    public $genre;
    public $mainCharacter;

    function __construct($_name, $_genre, $_mainCharacter)
    {
        $this->name = $_name;
        $this->genre = $_genre;
        $this->mainCharacter = $_mainCharacter;
    }

    public function getName(){
        return $this->name;
    }
}

?>