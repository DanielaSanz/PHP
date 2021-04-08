<?php

    //Array asiciativo
    $cities[] = [
        'name' => 'Cordoba',
        'population' => 100 
    ];
    $cities[1] = [
        'name' => 'Mendoza',
        'population' => 200 
    ];
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
                /* for($i=0; $i <= 1; $i++) {
                    echo '<h1> Name: ' .$cities[$i]['name']. '</h1>';
                    echo '<h2> Population: ' .$cities[$i]['population']. '</h2>';
                    echo '</br>'; 
                } */
                foreach($cities as $value) {
                    echo '<h1> Name: ' .$value['name']. '</h1>';
                    echo '<h2> Population: ' .$value['population']. '</h2>';
                }
            ?>
        </body>
    </html>