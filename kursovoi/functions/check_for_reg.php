<?php


session_start();
    include('../config.php');
    if (isset($_POST['register'])) {
        $full_name= $_POST['full_name'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $password_hash = password_hash($password, PASSWORD_BCRYPT);
        $query = $pdo->prepare("SELECT * FROM `users` WHERE `username`=:username");
        $query->bindParam("username", $username, PDO::PARAM_STR);
        $query->execute();
        if ($query->rowCount() > 0) {
            echo '<p class="error">Данный логин уже занят!</p>';
        }
        if ($query->rowCount() == 0) {
            $query = $pdo->prepare("INSERT INTO `users` (`full_name`,`username`,`password`) VALUES (:full_name,:username,:password_hash)");
            $query->bindParam("full_name", $full_name, PDO::PARAM_STR);
            $query->bindParam("username", $username, PDO::PARAM_STR);
            $query->bindParam("password_hash", $password_hash, PDO::PARAM_STR);
            $result = $query->execute();
            if ($result) {
                header("Location:../web-pages/Boauth.php");
                echo '<p class="success">Регистрация прошла успешно!</p>';
            } else {
                echo '<p class="error">Неверные данные!</p>';
            }
        }
    }
?>
