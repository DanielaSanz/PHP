<?php

    session_start();
    include_once '../MyColors/connection.php';

    $user_login = $_POST['user'];
    $password_login = $_POST['password'];

    echo '<pre>';
    var_dump($user_login);
    var_dump($password_login);
    echo '</pre>';

    //Verifica si el usuario existe
    $sql = 'SELECT * FROM users WHERE user = ? ';
    $statement_sql = $pdo -> prepare($sql);
    $statement_sql -> execute(array($user_login));
    $result_sql = $statement_sql -> fetch();

    echo '<pre>';
    var_dump($result_sql);
    echo '</pre>';

    //Matar la operación porque tiene ! es decir lo contrario
    if (!$result_sql) {
        echo 'User does not exist';
        die();
    } 
    echo 'User exist';

    echo '<pre>';
    var_dump($result_sql['password']);
    echo '</pre>'; 

    //Verificación de contraseña
    if (password_verify($password_login, $result_sql['password'])) {
        $_SESSION['admin'] = $user_login;
        header('Location: restricted.php');
    } else {
        echo 'Passwords are not the same';
        die();
    } 
?> 