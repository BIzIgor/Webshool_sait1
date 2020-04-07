<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Регистрация</title>
    <link rel="stylesheet" href="css/main.css">
    <link href="https://fonts.googleapis.com/css?family=Staatliches&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">
</head>
<body>
<section>
        <div class="container">
            <div class="registration_input">
                <div class="reg-titles">
                    <div class="reg-logo">
                       Заядлый вархаммерист
                    </div>
                    <div class="reg-name">
                        Регистрация
                    </div>
                </div>    
                <form action="index_registration.php" method="POST">
                    <div class="input_data">
                            <div class="reg-name-lastname">
                                <div class="reg-nameblock">
                                    <input type="text" placeholder="Имя" name="name" onchange="validateInputName(this)" id="reg_name-input" class="reg-input reg-name-input">
                                    <div id="text-error_name" class="error-block">
                                    </div>
                                </div>
                                <div class="reg-nameblock">
                                    <input type="text" placeholder="Фамилия" name="lastname" onchange="validateInputLastname(this)" id="reg_lastname-input" class="reg-input reg-name-input">
                                    <div id="text-error_lastname" class="error-block">
                                    </div>
                                </div>
                            </div>
                            <input type="email" placeholder="E-mail" name="email" onchange="validateInputEmail(this)" id="reg_email-input" class="reg-input">
                            <div id="text-error_email" class="error-block">
                            </div>
                            <input type="text" placeholder="Логин" name="login" onchange="validateInputLogin(this)" id="reg_login-input" class="reg-input">
                            <div id="text-error_login" class="error-block">
                            </div>
                            <input type="password" placeholder="Пароль" name="password" onchange="validateInputPassword(this)" id="reg_password-input" class="reg-input">
                            <div id="text-error_password" class="error-block">
                            </div>    
                            <input type="password" placeholder="Подтверждение пароля" name="verify_password" onchange="validateInputVerifyPassword(this)" id="reg_verify_password-input" class="reg-input">
                            <div id="text-error_verifypassword" class="error-block">
                            </div>  
                    </div>
                        <input type="SUBMIT" value="Зарегестрироваться" class="reg-btn"  id="reg_btn-submit" disabled>
                </form>
            </div>
            <div class="reg-links">
                    <a href="index.php">На главную</a>
                    <a href="login.php">Вход</a>
            </div>
        </div>    
    </section>
    <script src="js/validate_script.js"></script>
</body>
</html>