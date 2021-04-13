<?php

    include_once 'connection.php';



    //echo ' From index.php file';

    //READ SELECT
    $sql_select = 'SELECT * FROM colors';
    $gsent = $pdo -> prepare($sql_select);
    $gsent -> execute();
    //Para que devuelva
    $result = $gsent -> fetchAll();

    //Para que se pinte en pantalla
    //var_dump ($result);

    //ADD OBJECT
    if($_POST) {
        $color = $_POST['color'];
        $description = $_POST['description'];
        //SE USA ? PARA EVITAR INYECCIONES EN SQL.
        $sql_add = 'INSERT INTO colors (color, description) VALUES (?, ?)';
        $statement_add = $pdo -> prepare($sql_add);
        $statement_add -> execute(array($color, $description));

        //Para cerrar la conexion a la DDBB y la sentencia
        $sql_add = null;
        $pdo = null;

        header('location:index.php');
    }

    //UPDATE
    if($_GET) {
        //Captura lo que viene por URL
        $id = $_GET['id'];
        $sql_unique = 'SELECT * FROM colors WHERE id = ?';
        $gsent_unique = $pdo -> prepare($sql_unique);
        $gsent_unique -> execute(array($id));
        $result_unique = $gsent_unique -> fetch();

        $sql_unique = null;
        $pdo = null;

        //var_dump($result_unique);

    }

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link 
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" 
        rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" 
        crossorigin="anonymous"
    >
    <link 
        rel="stylesheet" 
        href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" 
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" 
        crossorigin="anonymous"
    >

    <title>PHP and DDBB</title>
  </head>
  <body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <!-- Los dos puntos son para cerrar posteriormente el array -->
                <?php foreach($result as $dato): ?>
                <div 
                class="alert alert-<?php echo $dato['color'] ?> text-uppercase" 
                role="alert"
                >
                    <?php echo $dato['color'] ?>
                    -
                    <?php echo $dato['description'] ?>

                    <a href="delete.php?id=<?php echo $dato['id'] ?>" class="float-right ml-3">
                        <i class="far fa-trash-alt"></i>
                    </a>

                    <a href="index.php?id=<?php echo $dato['id'] ?>" class="float-right">
                        <i class="fas fa-pencil-alt"> </i>
                    </a>

                </div>
                
                <?php endforeach ?>

            </div>

            <div class="col-md-6">
            <?php if(!$_GET): ?>
            <h2> ADD COLOR </h2>
                <form method="POST">
                    <input type="text" class="form-control" name="color">
                    <input type="text" class="form-control mt-3" name="description">
                    <button class="btn btn-primary mt-3"> Add </button>
                </form>
                <?php endif ?>

            <?php if($_GET): ?>
            <h2> UPDATE COLOR </h2>
                <form method="GET" action="update.php">
                    <input type="text" class="form-control" name="color" value= "<?php echo $result_unique['color'] ?>">
                    <input type="text" class="form-control mt-3" name="description" value= "<?php echo $result_unique['description'] ?>">
                    <input type="hidden" name="id" value= "<?php echo $result_unique['id'] ?>">
                    <button class="btn btn-primary mt-3"> Update </button>
                </form>
                <?php endif ?>
            </div>
        </div>
        
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
  </body>
</html>

