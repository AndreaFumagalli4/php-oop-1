<?php 

    require __DIR__ . '/./Models/Movie.php';

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>OOP-1</title>
    </head>
    <body>
        <header>
            <h1>
                OOP-1
            </h1>
        </header>
        <main>
            <div>
                <?php
                $avengers = new Movie('Avengers age of Ultron', 'Action', 'Robert Downey Jr');
                echo "<h2>";
                echo $avengers->getName();
                echo "</h2>";
                echo "<p>";
                echo $avengers->genre;
                echo "</p>";
                echo "<p>";
                echo $avengers->mainCharacter;
                echo "</p>";
                ?>
            </div>
        </main>
    </body>
</html>