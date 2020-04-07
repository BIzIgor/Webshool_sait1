
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Вход</title>
    <link rel="stylesheet" href="css/main.css">
    <link href="https://fonts.googleapis.com/css?family=Staatliches&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">
</head>
<body>
    <section>
        <div class="container registration_succes">
            <?php   
                $name = $_POST['name'];
                $lastname = $_POST['lastname'];
                $email = $_POST['email'];
                $login = $_POST['login'];
                $password = md5($_POST['password']);
                $verify_password = md5($_POST['verify_password']);
                $mysql = new mysqli('127.0.0.1:3306','root','','users');
                
                if($password != $verify_password){
                    echo("Пароли не совпадают! Повторите попытку!");
                    echo '<a class="reg_succes_item reg_succes_item_btn" href="registration.php">Назад</a>';
                    exit();
                }    
                if (preg_match('/[^(\w)|(\@)|(\.)|(\-)]/', $email)){
                    echo("Введите корректный E-mail");
                    echo '<a class="reg_succes_item reg_succes_item_btn" href="registration.php">Назад</a>';
                    exit();
                }
                $check_email = $mysql->query("SELECT * FROM `users` WHERE `email` = '$email'");
                $user = $check_email->fetch_assoc();
                if(isset($user)){
                    echo("Данная почта уже используется!");
                    echo '<a class="reg_succes_item reg_succes_item_btn" href="registration.php">Назад</a>';
                    exit();
                }
                $check_pnumber = $mysql->query("SELECT * FROM `users` WHERE `pnumber` = '$pnumber'");
                $user = $check_pnumber->fetch_assoc();
                if(isset($user)){
                    echo("Данный номер телефона уже используется!");
                    echo '<a class="reg_succes_item reg_succes_item_btn" href="registration.php">Назад</a>';
                    exit();
                }
                $check_login = $mysql->query("SELECT * FROM `users` WHERE `login` = '$login'");
                $user = $check_login->fetch_assoc();
                if(isset($user)){
                    echo("Данный логин уже используется!");
                    echo '<a class="reg_succes_item reg_succes_item_btn" href="registration.php">Назад</a>';
                    exit();
                }
                if(!isset($name)||!isset($lastname)||!isset($email)||!isset($login)||!isset($password)){
                    echo("Введите корректные данные!");
                    exit();
                }else{
                    $result = $mysql->query("INSERT INTO `users`(`name`, `lastname`, `email`, `login`, `password`) VALUES ('$name', '$lastname', '$email', '$login', '$password')");   
                }
                if($result) {
                    echo('<h3 class="reg_succes_item">Регистрация прошла успешно!</h3>');
                    echo '<a class="reg_succes_item reg_succes_item_btn" href="index.php">На главную</a>';
                } else {
                    echo '"Something went wrong!"';
                }
            ?>
        </div>    
    </section>
</body>
</html>

