$(document).ready(function () {
    //После нажатия кнопки  submit
    $("form").submit(function (event) {
        //Запрещаем отправку данных формы
        event.preventDefault();

        //Забираем значение поля login из формы
        var login = $("#login").val();

        //Забираем значение поля password из формы
        var password = $("#password").val();

        //Забираем значение поля password_confirm из формы
        var password_confirm = $("#password_confirm").val();

        //Забираем значение поля email из формы
        var email = $("#email").val();

        //Забираем значение поля name из формы
        var name = $("#name").val();

        //Получаем кнопку submit из формы
        var submit = $("#do_signup").val();

        //Передаем данные в файл signup_action.php для последующей валидации и регистрации
        $(".form-message").load("signup_action.php", {
            login: login,
            password: password,
            password_confirm: password_confirm,
            email: email,
            name: name,
            submit: submit
        });
    });

});