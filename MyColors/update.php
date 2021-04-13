<?php

    /* echo 'update.php?id=1&color=success&description=This is a green color';
    echo '<br>'; */

    //Capturar el ID de la URL
    $id = $_GET['id'];
    $color = $_GET['color'];
    $description = $_GET['description'];

    /* echo $id;
    echo '<br>';
    echo $color;
    echo '<br>';
    echo $description;  */

    include_once 'connection.php';

    $sql_update = 'UPDATE colors SET color = ?, description = ? WHERE id = ? ';
    $statement_update = $pdo -> prepare($sql_update);
    $statement_update -> execute(array($color, $description, $id));

    $sql_update = null;
    $pdo = null;

    header('location:index.php');
?>