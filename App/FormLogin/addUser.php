<?php
    include_once '../MyColors/connection.php';
    //echo password_hash("nana", PASSWORD_DEFAULT)."\n";

    $new_user = $_POST['user'];
    $password = $_POST['password'];
    $password2 = $_POST['password2'];

    /* echo '<pre>';
    var_dump($new_user);
    var_dump($password);
    var_dump($password2);
    echo '</pre>'; */

    //Verifica si el usuario existe
    $sql = 'SELECT * FROM users WHERE user = ? ';
    $statement_sql = $pdo -> prepare($sql);
    $statement_sql -> execute(array($new_user));
    $result_sql = $statement_sql -> fetch();

    var_dump($result_sql);

    if ($result_sql) {
        echo 'user already exists';
        die();
    }
    
    //Has de contraseña
    $password = password_hash($password, PASSWORD_DEFAULT);
    
    //Verificación de contraseña
    if (password_verify($password2, $password)) {
        echo '¡Password valid! <br>';

        $sql_add = 'INSERT INTO users (user, password) VALUES (?, ?)';
        $statement_add = $pdo -> prepare($sql_add);

        if($statement_add -> execute(array($new_user, $password))) {
            echo 'Add <br>';
        } else {
            echo 'Error <br>';
        }  

        //Para cerrar la conexion a la DDBB y la sentencia
        $sql_add = null;
        $pdo = null;

        //header('location:index.php');

    } else {
        echo 'Password invalid';
    }

?>