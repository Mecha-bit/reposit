<?php
require_once('db.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/signupTrain.css">
</head>
<body>
     <header>
        <div class="logo"></div>
        <h1>Мой Фитнес</h1>
        <nav>
            <a href="signupTrain.php">Запись</a>
            <a href="#">Отзыв</a>
            <a href="#">Профиль</a>
            <a href="#">История</a>
        </nav>
    </header>
    <form action="trainsign.php" method = "POST">
        <h1>Запись на тренеровку</h1>
        <label>Тип тренировки</label><br>
        <select name="trainType">
            <option>Йога</option>
            <option>Силовая тренировка</option>
            <option>кардио</option>
            <option>кроссфит</option>
            <option>пилатес</option>
        </select> <br>
        <label>Дата и время тренировки</label> <br>
        <input class ="date" type="date" name = "date" required>
        <input class ="time" type="time" name = "time" required> <br>
        <label>Тренер</label> <br>
        <select name="trainer">
            <option >Василий Тбилисев</option>
            <option >Измаил Романович</option>
            <option >Ахмад Владович</option>
        </select>
        <label>Комментарий</label> <br>
        <textarea class = "comment" name="comment" placeholder = "Ваши пожелания к тренировке"></textarea>
        
        <button type = "submit">Забронировать</button> <br>
    </form>
</body>
</html>