<?php
require_once('db.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/appoint.css">
</head>
<body>
    <header>
        <div class="logo"></div>
        <h1>Мой Фитнес</h1>
        <nav>
            <a href="#" class = "appoint">Заявки</a>
            <a href="#">Расписание тренеров</a>
            <a href="#">Тренировки</a>
            <a href="indexAdmin.php">Пользователи</a>
                <form action="logout.php" method = "POST">
                    <button type = "submit">Выйти</button>
                </form>
        </nav>
    </header>
    <h1 class = "greetings">Админ панель приветствует!</h1>
    <?php
    require_once('db.php');
    $result = $conn->query("SELECT * FROM appointment");
    ?>
    <table style = "border-collapse: separate;">
        <tr class = "tr1">
            <th>ID</th>
            <th>Тип тренировки</th>
            <th>Дата</th>
            <th>время</th>
            <th>Тренер</th>
            <th>Комментарий</th>
            <th>Статус</th>
            <th>Изменить статус</th>
        </tr>
        <?php
        while($row = $result->fetch_assoc()):
        ?>
        <tr class = "tr2">
            <td><?= $row['id'] ?></td>
            <td><?= $row['trainType'] ?></td>
            <td><?= $row['date'] ?></td>
            <td><?= $row['time'] ?></td>
            <td><?= $row['trainer'] ?></td>
            <td><?= $row['comment'] ?></td>
            <td><?= $row['status'] ?></td>
            <td>
                <form action="status.php" method="POST">
                    <input type="hidden" name="id" value="<?= $row['id'] ?>">
                    <select name="status" onchange="if(this.value) this.form.submit()">
                        <option>Выберите действие</option>
                        <option value="новая">новая</option>
                        <option value="подтвержден">подтвержден</option>
                        <option value="отклонен">отклонен</option>
                        <option value="завершен">завершен</option>
                    </select>
                </form>
            </td>
        </tr>
        <?php
        endwhile;
        ?>
    </table>
    <?php
    $conn->close(); 
    ?>
    <script>
        function change(sel) {
        if (sel.value) sel.form.submit();
        }
    </script>
</body>
</html>