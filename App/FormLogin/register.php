<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form User</title>
</head>
<body>
    <h3> Sign In </h3>
    <form action="addUser.php" method="POST">
        <input type="text" name="user" placeholder="Enter user">
        <input type="text" name="password" placeholder="Enter password">
        <input type="text" name="password2" placeholder="Enter password">
        <button type="submit"> Save </button>
    </form>

    <h3> Login In </h3>
    <form action="login.php" method="POST">
        <input type="text" name="user" placeholder="Enter user">
        <input type="text" name="password" placeholder="Enter password">
        <button type="submit"> Save </button>
    </form>
</body>
</html>