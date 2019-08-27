<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
<form action="login_action.php" method="POST">
    <p class="form-message"></p>
    <p>
    <p><strong>Логин:</strong></p>
    <input type="text" name="login" id="login">
    </p>
    <p>
    <p><strong>Пароль:</strong></p>
    <input type="password" name="password" id="password">
    </p>
    <p>
        <button type="submit" name="do_login" id="do_login">Войти</button>
    </p>
</form>
</body>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="/login/login.js"></script>
</html>