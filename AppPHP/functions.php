<?php
    
    function lorem() {
        return '<h2> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatem, sit praesentium! Delectus, maxime, 
        non rerum adipisci odio recusandae at vitae cupiditate facere consectetur eaque. Mollitia commodi ullam dolores in 
        doloribus. </h2>';
    }

    function average($n1, $n2) {
        return ($n1+$n2)/2;
    }

    echo average(10,20);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions</title>
</head>
<body>
    <section>
        <?php echo lorem() ?>
    </section>
    <footer>
        <h3>
            All rights reserved  <?php echo date('Y') ?>
        </h3>
    </footer>
</body>
</html>