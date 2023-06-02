<?php
include '../functions/check_for_auth.php';

if($_SESSION['user']){
	header("Location:Boprof.php");
}
?>

<!doctype html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../css/bootstrap.min.css">
    <title>Авторизация</title>
  </head>
  <body>
	<style>
	form {
		border: 3px solid #f1f1f1;
	}
	
	/* Full-width inputs */
	input[type=text], input[type=password] {
		width: 100%;
		padding: 12px 20px;
		margin: 8px 0;
		display: inline-block;
		border: 1px solid #ccc;
		box-sizing: border-box;
	}
	
	/* Set a style for all buttons */
	button {
		background-color: #5e91ff;
		color: white;
		padding: 14px 20px;
		margin: 8px 0;
		border: none;
		cursor: pointer;
		width: 100%;
	}
	
	/* Add a hover effect for buttons */
	button:hover {
		opacity: 0.8;
	}
	/* Add a href for button */
	.back_main{
		color: #fff;
		background-color: #5e91ff;
      	border: none;
      	padding: 10px 18px;
      	text-align: center;
      	text-decoration: none;
      	display: block;
      	font-size: 20px;
      	margin: 4px 2px;
      	cursor: pointer;
	}

	.back_main:hover{
		color: #fff;
	}
	
	/* Extra style for the cancel button (red) */
	.cancelbtn {
		width: auto;
		padding: 10px 18px;
		background-color: #f44336;
	}
	
	/* Center the avatar image inside this container */
	.imgcontainer {
		text-align: center;
		margin: 24px 0 12px 0;
	}
	
	/* Avatar image */
	img.avatar {
		width: 10%;
		border-radius: 50%;
	}
	
	/* Add padding to containers */
	.container {
		padding: 16px;
	}
	
	/* The "Forgot password" text */
	span.psw {
		float: right;
		padding-top: 16px;
	}
	
	/* Change styles for span and cancel button on extra small screens */
	@media screen and (max-width: 300px) {
		span.psw {
			display: block;
			float: none;
		}
		.back_main {
			width: 100%;
		}
	}
	</style>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
  <div class="container">
	<form method="post" action="" name="signin-form">
		<div class="imgcontainer">
		  <img src="../images/img_avatar2.png" alt="Avatar" class="avatar">
		</div>
	  
		<div class="container">
		  <label for="username"><b>Логин</b></label>
		  <input type="text" placeholder="Введите логин" name="username" required>
	  
		  <label for="psw"><b>Пароль</b></label>
		  <input type="password" placeholder="Введите пароль" name="password" required>
	  
		  <button type="submit" name="login" value="login">Войти</button>
		  
		  <div class="row">
				<div class="col-6">
				<a class="back_main" href="Boreg.php">Нет учётной записи?Зарегистрируйтесь!</a>
				</div>
				<div class="col-6">
				<a class="back_main" href="Boindex.php">Вернуться на главную</a>
				</div>
			</div>
		</div>
	  </form>
  </div>	
  </body>
</html>