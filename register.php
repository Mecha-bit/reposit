<?php
require_once('db.php');

$login = $_POST['login'];
$password = $_POST['password'];
$fullName = $_POST['fio'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$date = $_POST['date'];
$sql = "INSERT INTO users (login, password, full_name, phone, email, date) VALUES ('$login', '$password','$fullName', '$phone', '$email', '$date')";
$conn->query($sql);

header("Location: indexAuth.php");
?>