<?php
require_once('db.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/admin.css">
</head>
<body>
    <header>
        <div class="logo"></div>
        <h1>Мой Фитнес</h1>
        <nav>
            <a href="indexAdminAppoint.php">Заявки</a>
            <a href="#">Расписание тренеров</a>
            <a href="#">Тренировки</a>
            <a href="#" class = "users">Пользователи</a>
                <form action="logout.php" method = "POST">
                    <button type = "submit">Выйти</button>
                </form>
        </nav>
    </header>
    <h1 class = "greetings">Админ панель приветствует!</h1>
    <?php
    require_once('db.php');
    $result = $conn->query("SELECT * FROM users");
    ?>
    <table style = "border-collapse: separate;">
        <tr class = "tr1">
            <th>ID</th>
            <th>Логин</th>
            <th>Пароль</th>
            <th>ФИО</th>
            <th>Телефон</th>
            <th>Почта</th>
            <th>Дата рождения</th>
        </tr>
        <?php
        while($row = $result->fetch_assoc()):
        ?>
        <tr class = "tr2">
            <td><?= $row['id'] ?></td>
            <td><?= $row['login'] ?></td>
            <td><?= $row['password'] ?></td>
            <td><?= $row['full_name'] ?></td>
            <td><?= $row['phone'] ?></td>
            <td><?= $row['email'] ?></td>
            <td><?= $row['date'] ?></td>
        </tr>
        <?php
        endwhile;
        ?>
    </table>
    <?php
    $conn->close(); 
    ?>
</body>
</html>