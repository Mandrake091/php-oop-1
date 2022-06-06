<?php
class Movie{
    protected $title;
    protected $trama;
    protected $year;
    protected $actors;
    protected $language;

    function __construct($_title, $_trama)
    {
        $this->title = $_title;
        $this->trama = $_trama;        
    }
    
    function getTitle(){
        return $this->title;
    }

    public function getTrama(){
        return $this->trama;
    }
    public function getColor(){
        return $this->color;
    }
}
?>