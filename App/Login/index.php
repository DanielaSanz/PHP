    <!-- $login = 'Nana';

    var_dump( isset($login));

    if( isset($login)) {
        echo '<br> this variable is started ';
    } else {
        echo 'this variable is not started';
    } -->
<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
</head>
<body>
    <a href="login.php"> Log In </a>
    <a href="protected.php"> Protected content </a>
    <h1> Welcome <?php echo isset($_SESSION['admin']) ? $_SESSION['admin'] : 'Guest' ?> </h1>
</body>
</html>