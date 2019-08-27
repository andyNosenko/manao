<?php
require 'db.php';

?>
    //Пользователь авторизован, отображение привестввия с возможностью выхода
<?php if (isset($_SESSION['logged_user'])) : ?>
    Hello, <?php echo $_SESSION['logged_user']->login; ?>
    <hr>
    <a href="/logout.php">Выйти</a>
    //Пользователь не авторизован
<?php else: ?>
    Вы не авторизованы!
    <hr>
    <a href="/login/login.php">Авторизоваться</a>
    <a href="/signup/signup.php">Регистрироваться</a>
<?php endif; ?>