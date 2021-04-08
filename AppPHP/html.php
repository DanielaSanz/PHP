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
            <title>HTML</title>
        </head>
        <body>
            <h1> My favorite animal is: <?php echo $animals[1] ?> </h1>
            <?php
                $i = 0;
                while( $i <= 2) {
                    echo '<h1>  My animal favorite is: ' .$animals[$i]. '</h1>';
                    $i++;
                }
            ?>
        </body>
    </html>

    
