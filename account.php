<?php
session_start();
require_once('db.php');

$login = $_SESSION['user'];

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
    <header>
        <div class="logo"></div>
        <h1>Мой Фитнес</h1>
        <nav>
            <a href="signupTrain.php">Запись</a>
            <a href="#">Отзыв</a>
            <a href="account.php">Профиль</a>
            <a href="#">История</a>
        </nav>
    </header>
    <h1 class = "greetings">Здравствуйте, <?php echo $login; ?>!</h1>
    <form action="logout.php" method = "POST">
        <button type = "submit">Выйти</button>
    </form>
</body>
</html>