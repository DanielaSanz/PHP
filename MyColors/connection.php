<?php

    $link = 'mysql:host=localhost;dbname=my_colors';
    $user = 'root';
    $password = 'root';

    try {
          $pdo = new PDO($link, $user, $password);
          //echo 'Connected';
         /*  foreach($pdo->query('SELECT * from `colors`') as $fila) {
            print_r($fila);
        } */
    } catch (PDOException $e) {
        print "¡Error!: " . $e->getMessage() . "<br/>";
        die();
    }    
?>