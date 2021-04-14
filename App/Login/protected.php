<?php

    session_start();
    //Se guarda en las cookies del navegador
    if(isset ($_SESSION['admin'])) {
        echo 'Welcome ' .$_SESSION['admin'];
        echo '<br> <a href="logout.php"> Log Out </a>';
    } else {
        header('Location:index.php');
    }

?>