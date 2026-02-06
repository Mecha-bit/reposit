<?php
require_once('db.php');

$status = $_POST['status'];
$id = $_POST['id'];
$sql = "UPDATE appointment SET status = '$status' WHERE id = '$id'";
$conn->query($sql);
header('Location: indexAdminAppoint.php');
?>
