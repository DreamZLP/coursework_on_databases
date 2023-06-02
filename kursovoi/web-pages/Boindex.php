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
	<title> Главная </title>
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
			<div class="hero d-flex align_items_center">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<h1 class="display-4"> База данных коменданта МЦК-ЧЭМК</h1>
							<p> Данный сайт создан для сопровождения курсового проекта по теме "Разработка и защиты базы данных коменданта образовательног учреждения".</p>
							<p>Работу выполнил студент группы Ип3-19 Захаров Алексей.Ниже предоставлены модель базы данных.</p>
							<div class="row">
								<figure class="figure col-6">
								<img src="../images/image1.jpg" class="figure-img img-fluid rounded" alt="...">
								<figcaption class="figure-caption">Логическая модель БД.</figcaption>
							  </figure>
							  <figure class="figure col-6">
								<img src="../images/image2.jpg" class="figure-img img-fluid rounded" alt="...">
								<figcaption class="figure-caption">Реляционная модель БД.</figcaption>
							  </figure>
							</div>
						</div>
					</div>
				</div>
			</div>
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