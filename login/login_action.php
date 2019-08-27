<?php
require '../db.php';

$data = $_POST;

//Пользователь нажимает кнопку и отправляет данные
if (isset($data['submit'])) {
    $errors = array();

    //Проверка на наличие уже зарегистрированного пользоватяля с укзанным login
    $user = $db->from('users')->where('login', $data['login'])->getRow();

    //Если пользователь с введенным login существует
    if ($user) {

        //Сверяем пароль с тем, что в бд
        if (password_verify($data['password'], $user->password)) {

            //Создаем сессию
            $_SESSION['logged_user'] = $user;
            echo '<div style="color: green;">Вы успешно авторизовались <br>
                      Можете перейти на <a href="/">главную</a> страницу</div><hr>';
        } else {
            $errors[] = 'Неверно введен пароль!';
        }
    } else {
        //Если пользователь с введенным login не существует
        $errors[] = 'Пользователь с таким логином не найден!';
    }

    //Отображение ошибок, если пользователь вводит неверные данные
    if (!empty($errors)) {
        echo '<div style="color: red;">' . array_shift($errors) . '</div><hr>';
    }
}
?>
