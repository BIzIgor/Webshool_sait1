<?php
session_start();
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Вход</title>
    <link rel="stylesheet" href="main.css">
    <link href="https://fonts.googleapis.com/css?family=Staatliches&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">
</head>
<body>
<div class="avto_reg"> 
        <section>
            <div class="container">
                <div class="login_input">
                    <div class="form">
                    <form action="" method="POST">    
                        <div class="reg-titles">
                        <div class="reg-logo">
                           Заядлый вархаммерист
                        </div>
                        <div class="reg-name">
                            Авторизация
                        </div>
                        </div>      
                        <form action="" method="POST">
                            <div class="input_data">    
                                <input type="text" placeholder="Логин" size="50" name="login" class="reg-input"> <br>
                                <input type="password" placeholder="Пароль" size="50" name="password" class="reg-input">
                                <?php
                                    if (isset($_POST['login']) && isset($_POST['password'])) {  
                                        $login = $_POST['login'];
                                        $password = md5($_POST['password']);
                                        $mysql = new mysqli('127.0.0.1:3306','root','','users');
                                        $authQuery = "SELECT * FROM `users` WHERE `login` = '$login'";
                                    if (!$result = $mysql->query($authQuery)) {
                                        die('Ошибка запроса: '. $mysqli->error);
                                    }
                                    if (!$result->num_rows) {
                                        echo('<font color="red">Неверный логин или пароль!</font>');
                                    } else {
                                        $user = $result->fetch_assoc();
                                    if ($user['password'] !== $password) {
                                        echo('<font color="red">Неверный логин или пароль!</font>');
                                    } else {
                                        $_SESSION['user'] = $user;
                                    }
                                    }
                                    }
                                ?>
                            </div>
                            <input type="submit" class="login-btn" value="Войти">
                        </form>
                        <?php
                         if (isset($_SESSION['user'])) {
                            echo("<div class='login-greeting'><h1>Добро пожаловать, " . $_SESSION['user']['name'] . "</h1></div>");
                            echo("<div class='login_succes_btn'><a href='index.php'>На главную</a></div>");
                        }
                        ?>
                </div>
            </div>
            <div class="reg-links">
            </div>
        </div>    
        <div class="container">
            <div class="registration_input">
                <div class="reg-titles">
        
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
            </div>
        </div>    
    </section>
    <script src="script/validate_script.js"></script>
</div>
    </body>
</html>