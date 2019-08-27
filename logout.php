<?php
require 'db.php';

//Удаление сессии после выхода из учетной записи
unset($_SESSION['logged_user']);

//Перенаправление на главную страницу
header('Location: /');
?>