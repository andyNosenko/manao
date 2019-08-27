<?php
//Подключение файла, содержащего таблицу users c описанием всех столбцов
require "../db.php";
?>
<?php
//Помещаем суперглобальный массив $_POST в переменную $data, полученный в результате работы скрипта signup.js
$data = $_POST;

//Пользователь нажимает кнопку и отправляет данные
if (isset($data['submit'])) {

    $errors = array();

    //Проверка на наличе заполненного поля login
    if (trim($data['login'] == '')) {
        $errors[] = 'Введите логин!';
    }

    //Проверка на наличие заполненного поля password
    if ($data['password'] == '') {
        $errors[] = 'Введите пароль!';
    }

    //Сравнение введенных паролей пользователем
    if ($data['password'] != $data['password_confirm']) {
        $errors[] = 'Пароли не совпадают!';
    }

    //Проверка на наличие заполненного поля email
    if (trim($data['email'] == '')) {
        $errors[] = 'Введите email!';
    }

    //Проверка на наличие заполненного поля name
    if (trim($data['name'] == '')) {
        $errors[] = 'Введите имя!';
    }

    //Проверка на наличие уже зарегистрированного пользоватяля с укзанным login и email
    $user_exist = $db->from('users')->select('login, email')->where('login', $data['login'])->orWhere('email', $data['email'])->getRow();
    if ($user_exist->login == $data['login']) {
        $errors[] = 'Пользователь с таким логином уже существует!';
    }

    if ($user_exist->email == $data['email']) {
        $errors[] = 'Пользователь с таким email уже зарегистирован!';
    }

    //Если все поля заполненны верно регистрируем пользователя
    if (empty($errors)) {
        $user = [
            'login' => $data['login'],
            'password' => password_hash($data['password'], PASSWORD_DEFAULT),
            'email' => $data['email'],
            'name' => $data['name']

        ];
        $db->in('users')->insert($user);
        echo '<div style="color: green;">Вы успешно зарегистрировались <br>
                      Можете перейти на страницу <a href="/login/login.php">авторизации</a> страницу</div><hr>';

    } else {
        //Выводим ошибку, если пользователь неверно ввел данные
        echo '<div style="color: red;">' . array_shift($errors) . '</div><hr>';
    }
}


?>



