<?php
    session_start();
    include('../config.php');
    if (isset($_POST['login'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $query = $pdo->prepare("SELECT * FROM `users` WHERE `username`=:username");
        $query->bindParam("username", $username, PDO::PARAM_STR);
        $query->execute();
        $result = $query->fetch(PDO::FETCH_ASSOC);
        if (!$result) {
            echo '<p class="error">Неверные пароль или имя пользователя!</p>';
        } else {
            if (password_verify($password, $result['password'])) {
                $_SESSION['user'] = [$result['id'] , $result['full_name'], $result['username'], $result['user_role']]; 
                $_SESSION['cabinet'] = [$result['cabinet_number']];
                $_SESSION['manager_id'] = [$result['manager_id']];
                header("Location:../web-pages/Boprof.php");
                echo '<p class="success">Поздравляем, вы прошли авторизацию!</p>';
                
            } else {
                echo '<p class="error"> Неверные пароль или имя пользователя!</p>';
            }
        }
        
    }
?>
