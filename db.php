<?php
//Используем сторонний модуль для хранения пользователей в xml файле
require 'xmldb.php';

//Указываем xml файл, который является базой данных
$db = xmlDb::connect("database");

//Добавление таблицы users
$db->addTable("users");
$db->in('users')->addColumn('id', '');
$db->in('users')->addColumn('login', '');
$db->in('users')->addColumn('password', '');
$db->in('users')->addColumn('email', '');
$db->in('users')->addColumn('name', '');

//Запуск сессии
session_start();
?>