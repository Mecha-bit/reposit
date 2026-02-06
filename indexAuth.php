<?php
require_once('db.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <form action="login.php" method = "POST">
        <h1>Авторизация</h1>
        <label>Логин</label><br>
        <input type="text" name = "login" placeholder = "login" required> <br>
        <label>Пароль</label> <br>
        <input type="password" name = "password" placeholder = "password" required> <br>
        <button type = "submit">Войти</button> <br>
       <div class="authHref">
        <p>Нет аккаунта?<a href="index.php">Зарегистрируйся</a></p>
       </div>
    </form>
</body>
</html>