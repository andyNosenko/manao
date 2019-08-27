$(document).ready(function () {

    //После нажатия пользователем кнопки авторизации
    $("form").submit(function (event) {

        //Хапрещаем отправку данных формы
        event.preventDefault();

        //Забираем значение поля login из формы
        var login = $("#login").val();

        //Забираем значение поля password из формы
        var password = $("#password").val();

        //Получаем кнопку submit из формы
        var submit = $("#do_login").val();

        //Передаем данные в файл login_action.php для последующей валидации и авторизации
        $(".form-message").load("login_action.php", {
            login: login,
            password: password,
            submit: submit
        });
    });
});