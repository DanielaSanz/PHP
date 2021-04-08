<?php
    $election = 'Muffins';
    switch($election) {
        case 'Muffins':
            echo 'The price is $15';
            break;
        case 'Cake':
            echo 'The price is $20';
            break;
        case 'Ice Cream':
            echo 'The price is $20';
            break;
        default:
            echo   'Invalid option';
            break;  
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Switch</title>
    </head>
    <body>
        <h1> Options </h1>
        <h2> 1) Muffins </h2>
        <h2> 2) Cake </h2>
        <h2> 3) Ice Cream </h2>
    </body>
</html>