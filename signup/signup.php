<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Signup</title>
</head>
<body>
<form action="signup_action.php" method="POST" id="signupForm">
    <p class="form-message"></p>
    <p>
    <p><strong>Ваш логин:</strong></p>
    <input type="text" name="login" id="login" value="">
    </p>
    <p>
    <p><strong>Ваш пароль:</strong></p>
    <input type="password" name="password" id="password" value="">
    </p>
    <p>
    <p><strong>Повторите Ваш пароль:</strong></p>
    <input type="password" name="password_confirm" id="password_confirm" value="">
    </p>
    <p>
    <p><strong>Ваш email:</strong></p>
    <input type="email" name="email" id="email" value="">
    </p>
    <p>
    <p><strong>Ваше имя:</strong></p>
    <input type="text" name="name" id="name" value="">
    </p>
    <p>
        <button type="submit" id="do_signup" name="do_signup">Зарегистироваться</button>
    </p>
</form>
</body>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="/signup/signup.js"></script>
</html>