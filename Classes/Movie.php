<?php


class Movie{
    protected $title;
    protected $trama;
    protected $year;
    protected $color;
    protected $actors;
    protected $language;
    protected $genre;
    

    function __construct($_title, $_trama, $_color)
    {
        $this->title = $_title;
        $this->trama = $_trama;
        $this->color = $_color;    
    }
    
    function getTitle(){
        return $this->title;
    }
    function getTrama(){
        return $this->trama;
    }
    function getColor(){
        return $this->color;
    }
    function setGenre(){
        return $this->genre;
    }
}
?>