<?php
    $conn = new mysqli('127.0.0.1:3306',
        'root',
        '',
        'wah');
    if ($conn->connect_errno) {
        echo $conn->connect_error;
        exit;
    }
    $ep = "CREATE TABLE IF NOT EXISTS users(
        id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
        name VARCHAR(255) NOT NULL,
        lastname VARCHAR(255) NOT NULL,
        email VARCHAR(255) NOT NULL,
        login VARCHAR(255) UNIQUE NOT NULL,
        password VARCHAR(255) NOT NULL,
        repidpassword VARCHAR(255) NOT NULL,


    );";

    $conn->query($usersTable);

    if ($conn->errno) {
        echo $conn->error;
        exit;
    }

    $messagesTable = "CREATE TABLE IF NOT EXISTS messages(
        id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
        sender_id INT NOT NULL,
        reciever_id INT NOT NULL,
        message TEXT NOT NULL,
        sent_at TIMESTAMP NOT NULL,
        FOREIGN KEY (sender_id) REFERENCES users (id),
        FOREIGN KEY (reciever_id) REFERENCES users (id)
    )";

    $conn->query($messagesTable);

    if ($conn->errno) {
        echo $conn->error;
        exit;
    }

    echo "Migration success!";
    $conn->close();
?>