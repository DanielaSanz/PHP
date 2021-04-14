<?php

    session_start();

    if( isset($_SESSION['admin'])) {
        echo 'Welcome ' .$_SESSION['admin'];
        echo '<br><a href="logout.php"> Log Out </a>';
    } else {
        header('Location:register.php');
    }
?>