<?php
    //Fundamental para iniciar sesion
    session_start();
    $login = "Nana";

    //Constante es un array porque puede haber distintas sesiones
    $_SESSION['admin'] = $login;

    if (isset($_SESSION['admin'])) {
        header('Location:index.php');
    }

    /* echo '<br>'; 
    var_dump($_SESSION); */
?>