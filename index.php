<?php

include __DIR__ . "/Models/Movie.php";

$film1 = new Movie("Guardiani della Galassia", "150 minuti", ["Commedia - Azione"]);
echo ("<br>");
$film2 = new Movie("Spider-Man: Accros the Spider Verse", "150 minuti", ["Commedia - Azione"]);

$film1->getFilm();
$film2->getFilm();
