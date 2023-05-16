<?php

include "data.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Uci cinemas</title>
</head>

<body>
    <div class="container">
        <h1>List Film</h1>
        <?php foreach ($movies as $movie) { ?>
            <div class="movie">
                <?php $movie->getFilm() ?>
            </div>
        <?php } ?>
    </div>
</body>

</html>