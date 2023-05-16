<?php

class Movie
{
    public $title;
    public $duration;
    public $genre = array();

    function __construct($_title, $_duration, $_genre)
    {
        $this->title = $_title;
        $this->duration = $_duration;
        $this->genre = $_genre;
    }

    public function getFilm()
    {
        echo "<h2>" . $this->title . "</h2>";
        echo "<h3>" . $this->duration . "</h2>";
        echo "<p>" . implode(", ", $this->genre) . "</p>";
    }
}
