<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="" method="post">
        Username : <input type="text" name="username" > <br>
        Password : <input type="password" name="password" ><br>
        <button type="submit" name="login">Login</button>
    </form>
</body>
</html>

<?php 

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    echo "Username : $username <br>  Password : $password";
}

?>