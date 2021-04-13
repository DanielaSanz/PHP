<?php

    include_once 'connection.php';

    $id = $_GET['id'];

    $sql_delete = 'DELETE FROM colors WHERE id = ?';
    $statement_delete = $pdo -> prepare($sql_delete);
    $statement_delete -> execute(array($id));

    $sql_delete = null;
    $pdo = null;
    
    header('location:index.php');
?>