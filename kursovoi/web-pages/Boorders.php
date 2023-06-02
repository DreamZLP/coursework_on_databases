<?php
session_start();
include '../functions/func_for_orders_table.php';
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- CSS only -->
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css">
	<title> Список заказов</title>
</head>
<body>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
		<header>
			<!-- nagition_bar -->
			<nav class="navbar navbar-light sticky-top bg-light fixed-top">
  			<div class="container-fluid">
			  <a class="navbar-brand" href="Boindex.php">База данных коменданта МЦК-ЧЭМК</a>
				<ul class="nav nav-pills mb-o py-1" id="pills-tab" role="tablist">
				<li class="nav-item" role="presentation">
    					<button class="nav-link" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true" onclick="window.location.href ='Boindex.php'">Главная</button>
  					</li>
  					<li class="nav-item" role="presentation">
    					<button class="nav-link" id="pills-managers-tab" data-bs-toggle="pill" data-bs-target="#pills-managers" type="button" role="tab" aria-controls="pills-managers" aria-selected="true" onclick="window.location.href ='Bomanagers.php'">Список заведущих</button>
  					</li>
  					<li class="nav-item" role="presentation">
    					<button class="nav-link" id="pills-cabinets-tab" data-bs-toggle="pill" data-bs-target="#pills-cabinets" type="button" role="tab" aria-controls="pills-cabinets" aria-selected="false" onclick="window.location.href ='Bocabinets.php'">Список кабинетов</button>
  					</li>
					  <li class="nav-item" role="presentation">
    					<button class="nav-link" id="pills-orders-tab" data-bs-toggle="pill" data-bs-target="#pills-orders" type="button" role="tab" aria-controls="pills-orders" aria-selected="false" onclick="window.location.href ='Boorders.php'">Список сделанных заказов</button>
  					</li>
				</ul>
    			<button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
      			<span class="navbar-toggler-icon"></span>
    			</button>
    				<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      				<div class="offcanvas-header">
        				<h5 class="offcanvas-title" id="offcanvasNavbarLabel">Панель навигации</h5>
        					<button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      				</div>
      				<div class="offcanvas-body">
        				<ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          				<li class="nav-item">
            				<a class="nav-link active" aria-current="page" href="Boprof.php">Профиль</a>
          				</li>
          				<li class="nav-item dropdown">
            				<a class="nav-link dropdown-toggle" href="#" id="offcanvasNavbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              				Регистрация/вход
            				</a>
            			<ul class="dropdown-menu" aria-labelledby="offcanvasNavbarDropdown">
              			<li><a class="dropdown-item" href="Boauth.php">Войти</a></li>
              			<hr class="dropdown-divider">
              			</li>
              			<li><a class="dropdown-item" href="Boreg.php">Зарегистрироваться</a></li>
            			</ul>
          			</li>
        			</ul>
        		</div>
    		</div>
  		</div>
		</nav>
		<!-- navigation_bar// -->
		</header>
		<main>
		<div class="container">
				<div class="row">
					<div class="col mt-1">
					<?
					if ($_SESSION['user']) {
						if ($_SESSION['user'][3] == 'system_user') {
						echo '<button class="btn btn-success mb-1" data-toggle="modal" data-target="#Modal">
							<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-plus" viewBox="0 0 16 16">
								<path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
								<path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
						  	</svg></i>
							Добавить заказ
						</button>';
						}
					} 
					?>
						<table class="table shadow ">
							<thead class="thead-dark">
								<tr>
									<th>Код заказа</th>
									<th>Тип заказа</th>
									<th>Дата заказа</th>
									<th>Количество</th>
									<th>Цена</th>
									<th>Код заведущего</th>
									<th>Действие</th>
								</tr>
								<?php foreach ($result as $value) { ?>
								<tr>
									<td><?=$value['order_id'] ?></td>
									<td><?=$value['order_type'] ?></td>
									<td><?=$value['order_data'] ?></td>
									<td><?=$value['order_count'] ?></td>
									<td><?=$value['order_price'] ?></td>
									<td><?=$value['manager_id'] ?></td>
									<td>	
										<a href="?edit=<?=$value['order_id'] ?>" class="btn btn-success btn-sm" data-toggle="modal" data-target="#editModal<?=$value['order_id'] ?>"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
 											<path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
  											<path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
											</svg>
										</a> 
										<a href="?delete=<?=$value['order_id'] ?>" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteModal<?=$value['order_id'] ?>"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
											<path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
											<path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
											</svg>
										</a>
										<?
										if ($_SESSION['user']) {
											if ($_SESSION['user'][3] == 'system_user') {
												require 'modal_for_orders_table.php';
											}
										}
										?>
									</td>
								</tr> <?php } ?>
							</thead>
						</table>
					</div>
				</div>
			</div>
			<script>
				var myModal = document.getElementById('myModal')
				var myInput = document.getElementById('myInput')

				myModal.addEventListener('shown.bs.modal', function () {
 			 	myInput.focus()
			})
			</script>
			
			<div class="modal fade" tabindex="-1" role="dialog" id="Modal">
				<div class="modal-dialog modal-dialog-centered" role="document">
				  <div class="modal-content shadow">
					<div class="modal-header">
					  <h5 class="modal-title">Добавить заказ</h5>
					</div>
					<div class="modal-body">
					  <form action="" method="post">
						  <div class="form-group">
							  <input type="text" class="form-control" name="order_type" value="" placeholder="Тип заказа">
						  </div>
						  <div class="form-group">
							  <input type="date" class="form-control" name="order_data" value="" placeholder="Дата">
						  </div>
						  <div class="form-group">
							  <input type="text" class="form-control" name="order_count" value="" placeholder="Количество">
						  </div>
						  <div class="form-group">
							  <input type="text" class="form-control" name="order_price" value="" placeholder="Цена">
						  </div>
						  <div class="form-group">
							  <input type="text" class="form-control" name="manager_id" value="" placeholder="Код заведующего">
						  </div>
					</div>
					<div class="modal-footer">
					  <button type="button" class="btn btn-secondary" data-dismiss="modal">Отмена</button>
					  <button type="submit" name="submit" class="btn btn-primary">Добавить</button>
					</div>
						</form>
				  </div>
				</div>
			  </div>

			<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
			<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
		</main>
		
		<footer>
			<div class="p-3 border bg-light">
				<div class="row g-0">
  				<div class="col-sm-6 col-md-10	">All right reserved © Захаров Алексей</div>
  				<div class="col-6 col-md-2"></div>
  				<hr>
  				<div class="col-sm-6 col-md-10	"><a href="#" class="footer-navbar">Вопросы и ответы</a></div>
  				<div class="col-sm-6 col-md-10	"><a href="#" class="footer-navbar">О нас</a></div>
  				<div class="col-sm-6 col-md-10	"><a href="#" class="footer-navbar">Контакты</a></div>
				</div>
			</div>
		</footer>	
</body>
</html>