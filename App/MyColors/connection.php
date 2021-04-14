<?php

    $link = 'mysql:host=localhost;dbname=my_colors';
    $user = 'root';
    $pass = 'root';

    try {
          $pdo = new PDO($link, $user, $pass);
          echo 'Connected <br>';
         /*  foreach($pdo->query('SELECT * from `colors`') as $fila) {
            print_r($fila);
        } */
    } catch (PDOException $e) {
        print "¡Error!: " . $e->getMessage() . "<br/>";
        die();
    }    
?>