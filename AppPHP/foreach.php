<?php

    $animals = ['Bird', 'Cat', 'Dog'];
    //$animals = array['Dog', 'Cat', 'Bird'];

?>
<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Cities</title>
        </head>
        <body>
            <?php
                /* for($i=0; $i <= 2; $i++) {
                    echo '<h1> My favorite animal is: ' .$animals[$i]. '</h1>';
                } */
                foreach($animals as $value) {
                    echo '<h1> My favorite animal is: ' .$value. '</h1>';
                }
            ?>
        </body>
    </html>