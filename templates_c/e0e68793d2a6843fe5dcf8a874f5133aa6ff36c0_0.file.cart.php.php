<?php
/* Smarty version 3.1.29, created on 2019-02-22 22:26:49
  from "C:\xampp\htdocs\BarcaTrain\cart.php" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5c706919dac461_53416868',
  'file_dependency' => 
  array (
    'e0e68793d2a6843fe5dcf8a874f5133aa6ff36c0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\BarcaTrain\\cart.php',
      1 => 1550785302,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c706919dac461_53416868 ($_smarty_tpl) {
echo '<?php
	';?>session_start();
<?php echo '?>';?>
<!DOCTYPE html>

<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>FC Barcelona Fan Site</title>
	<!-- dropdown button from w3s -->
	<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">

	<!-- Bootstrap -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	
	<!-- Site CSS -->
	<link href="mystyle.css" rel="stylesheet">

	<style>
		aside {
			background-color: #DDD;
		}

		/* aside */
		/* standings */
		.table{
		  transition: all 0.2s ease-in-out;
		  margin-top: 10px;
		}
		thead>tr>th {
			text-align: center;
		}
		tbody a:hover {
			text-decoration: none;
		}

		#danger-zone {
			background-color: tomato;
		}
		#champ-leag {
			background-color: lightgreen;
		}
		#leag-europe {
			background-color: rgb(143, 188, 143);
		}
		#champ-leag-qualific {
			background-color: rgb(202, 231, 202);
		}
		#tabl-head {
			background-color: darkgrey;
		}
		


		/* Carousel News */
		#carousel-indicators-news {
		    bottom:-40px;
			left:0;
			width:100%;
			background: darkgrey;
			padding: 6px 0px;
			margin-left:0;
			border-top:2px solid #fff;
		}
		#carousel-indicators-news li {
			background:#fff;
			border-color:#fff;
		 
		}
		#carousel-indicators-news .active {
			width:14px;
			height:14px;
			background:#428bca;
			border-color:#428bca;
		}
		.carousel-inner .thumbnail {
			margin-bottom:0;
			border-bottom-left-radius:0;
			border-bottom-right-radius:0;
		}
		.carousel-inner .caption {
			background:#ddd;
			padding: 10px;
		}
		#news-carousel-content {
			height: 130px;
		}



		/*Last News */
		.card {
		  background: #fff;
		  text-decoration: none;
		  color: #2b2b2b;
		  height: 240px;
		  box-shadow: 0 0 0 1px rgba(0, 0, 0, 0.1), 0 1px 5px rgba(0, 0, 0, 0.15);
		  transform-origin: center center;
		}

		.title-small { 
			color: #141517; 
			font-size: 16px; 
			font-weight: 400; 
			margin: 10px 0 0;
			max-height: 50px;
			overflow: hidden;
		}
		.title-small>a:hover {
			text-decoration: none;
			color: darkblue;
		}
		.text-time {
			color: #ff0000; 
			font-weight: 600;
			font-size: 12px;
			margin-top: 5px;
		}
		.img-fluid {
			max-width: 100%;
			margin-top: 15px;
			height: 140px;
		}
		/* end aside */

		.btnAddAction {
			/* background-color: #eb9e4f;
		    border: 0;
		    padding: 3px 10px;
		    margin-top: 10px;
		    border-radius: 2px; */
			text-align: center;
			border: 1px solid white;
			padding: 2px;
			width: 62%;
			background-color: blue;
			color: #fff;
		}
		.btnAddAction:hover {
			background-color: skyblue;
			/* color: rgb(255, 255, 255); */
			color: blue;
		}
		/* .btnReview {
			background-color: rgb(3, 14, 72); 
			background-image: linear-gradient(90deg, rgb(0, 15, 75), rgb(92, 0, 0));
			text-align: center;
			border: 1px solid white;
			padding: 5px;
			width: 100%;
			background-color: skyblue;
		}
		.btnReview:hover {
			background-color: darkblue;
			color: rgb(255, 255, 255);
		} */


		#quantity {
			/* max-width: 50px; */
			width: 36%;
			margin-top: 2px;
		}
		.product-item form {
			text-align: center;
		}
		.product-price {    
			color: #005dbb;
		    font-weight: 600;
		    padding-bottom: 10px;
		    font-size: 20px;
		}
		.product-image {
			height: 200px;
			padding-top: 30px;
			background-color:#FFF;  
		}

		.product-item {
			height: 220px;
			width: 236px;
			margin-bottom: 80px;
		}

		.product-name {
			position: absolute;
			bottom: 0px;
			background: rgba(0, 0, 0, 0.7); /* Black background with transparency */
			color: #f1f1f1;
			width: 100%;
			padding-top: 15px;
			height: 50px;
			overflow: hidden;
		}

		.pagination-row {
			text-align: center;
		}

		.pagination>li>a, .pagination>li>span {
			border-radius: 50% !important;
			margin-left: 5px;
		}

		.smallimg {
			max-height: 150px;
			max-width: 200px;
		}

		.product-item>form>a {
			color: white;
		}

		.product-item>form>a:hover {
			text-decoration: none;
			color: white;
		}
		
		.product-head {
			position: relative;
			max-width: 800px;
			margin: 0 auto;
		}

		.btnAdd {
			border-radius: 4px;
			/* background-color: #f4511e; */
			background-color: #15C0DE;
			border: none;
			color: #FFFFFF;
			text-align: center;
			font-size: 17px;
			width: 50%;
			transition: all 0.5s;
			cursor: pointer;
			margin-left: 5px;
		}

		.btnAdd span {
			cursor: pointer;
			display: inline-block;
			position: relative;
			transition: 0.5s;
		}

		.btnAdd span:after {
			content: '\00bb';
			position: absolute;
			opacity: 0;
			top: 0;
			right: -20px;
			transition: 0.5s;
		}

		.btnAdd:hover span {
			padding-right: 25px;
		}

		.btnAdd:hover span:after {
			opacity: 1;
			right: 0;
		}

		
		/* SHAKE EFFECT IMG */
		/* .product-item img:hover {
		  animation: shake 0.5s;
		  animation-iteration-count: infinite;
		}
		
		@keyframes shake {
		  0% { transform: translate(1px, 1px) rotate(0deg); }
		  10% { transform: translate(-1px, -2px) rotate(-1deg); }
		  20% { transform: translate(-3px, 0px) rotate(1deg); }
		  30% { transform: translate(3px, 2px) rotate(0deg); }
		  40% { transform: translate(1px, -1px) rotate(1deg); }
		  50% { transform: translate(-1px, 2px) rotate(-1deg); }
		  60% { transform: translate(-3px, 1px) rotate(0deg); }
		  70% { transform: translate(3px, 1px) rotate(-1deg); }
		  80% { transform: translate(-1px, -1px) rotate(1deg); }
		  90% { transform: translate(1px, 2px) rotate(0deg); }
		  100% { transform: translate(1px, -2px) rotate(-1deg); }
		} */
		/* END SHAKE EFFECT IMG */


		/* IMG ALERT */
		#imgalert {
		    position: relative;
		}
		#imgalert:hover:after {
		    background: hsla(0,0%,0%,.8);
		    border-radius: 3px;
		    color: #f6f6f6;
		    content: 'Виж повече';
		    font: bold 12px/30px sans-serif;
		    height: 30px;
		    margin-left: -60px;
		    position: absolute;
		    text-align: center;
		    top:-110px;
		    width: 120px;
		}
		/* END IMG ALERT */


	</style>
</head>

<body>
	<div class="container">
		<header id="header" class="col-xs-12 col-sm-12">
			<div class="col-xs-12 col-sm-12 col-lg-6">
				<h1>Футболен клуб Барселона</h1>
				The Cataluña
			</div>
			<div class="hidden-xs hidden-sm hidden-md col-lg-6">
				<img src="./img/mesqueunclub.png">
			</div>
			<div id="nav_bar" class="col-xs-12 col-sm-12">
				<!-- navbar with search4  http://bootsnipp.com/snippets/a6aV0 -->
				<nav class="[ navbar ][ navbar-bootsnipp animate ]" role="navigation">
					<div class="[ container-fluid ]">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="[ navbar-header ]">
							<button type="button" class="[ navbar-toggle ]" data-toggle="collapse" data-target="#myNavbar">
								<span class="[ sr-only ]">Toggle navigation</span>
								<span class="[ icon-bar ]"></span>
								<span class="[ icon-bar ]"></span>
								<span class="[ icon-bar ]"></span>
							</button>
							<div class="[ animbrand ]">
								<a href="index.php?cmd=Home" id="headerLogonew" class="headerLogonew">
									<img src="./img/barcelona.png" width="50" height="50">
								</a>
							</div>
						</div>

						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="[ collapse navbar-collapse ]" id="myNavbar">
							<ul class="nav navbar-nav">
								<!-- <li class="[ visible-xs ]">
									<form action="http://bootsnipp.com/search" method="GET" role="search">
										<div class="[ input-group ]">
											<input type="text" class="[ form-control ]" name="q" placeholder="Search for snippets">
											<span class="[ input-group-btn ]">
												<button class="[ btn btn-primary ]" type="submit"><span class="[ glyphicon glyphicon-search ]"></span></button>
												<button class="[ btn btn-danger ]" type="reset"><span class="[ glyphicon glyphicon-remove ]"></span></button>
											</span>
										</div>
									</form>
								</li> -->
								<li><a href="index.php?cmd=News">Новини</a></li>
								<li><a href="index.php?cmd=FanZone">Фен зона</a></li>
								<li class="[ w3-dropdown-hover ]">
									<a href="#" class="[ dropdown-toggle ]" data-toggle="w3-dropdown-hover">Ла Лига</a>
									<ul class="[ w3-dropdown-content w3-white w3-card-4 ]">
										<li><a href="index.php?cmd=Standings">Класиране</a></li>
										<li><a href="index.php?cmd=Results">Резултати</a></li>
										<li><a href="index.php?cmd=Fixtures">Програма</a></li>
									</ul>
								</li>
								<li class="[ w3-dropdown-hover ]">
									<a href="#" class="[ dropdown-toggle ][ animate ]" data-toggle="w3-dropdown-hover">ФК Барселона</a>
									<ul class="[ w3-dropdown-content w3-white w3-card-4 ]">
										<li><a href="index.php?cmd=History">История</a></li>
										<li><a href="index.php?cmd=Squad">Състав</a></li>
										<li><a href="index.php?cmd=Campnou">Камп Ноу</a></li>
									</ul>
								</li>
							</ul>		
							<ul class="nav navbar-nav navbar-right">
								<li><a href="index.php?cmd=Logout"><span class="glyphicon glyphicon-log-out"></span> Изход</a></li>
								<!-- <li class="[ hidden-xs ]"><a href="#toggle-search" class="[ animate ]"><span class="[ glyphicon glyphicon-search ]"></span></a></li> -->
							</ul>
						</div>
					</div>
					<!-- <div class="[ bootsnipp-search animate ]">
						<div class="[ container-fluid ]">
							<form action="http://bootsnipp.com/search" method="GET" role="search">
								<div class="[ input-group ]">
									<input type="text" class="[ form-control ]" name="q" placeholder="Search...">
									<span class="[ input-group-btn ]">
										<button class="[ btn btn-danger ]" type="reset"><span class="[ glyphicon glyphicon-remove ]"></span></button>
									</span>
								</div>
							</form>
						</div>
					</div> -->
				</nav>
			</div>
		</header>
		<main class="col-xs-12 col-sm-12">
			<div class="hidden-sm" id="title">
				<h2>Фен зона</h2>
				<hr>
			</div>

			<!-- Fan Carousel -->
			<div class="fan-carousel hidden-sm">
				<div id="myCarousel" class="carousel slide" data-ride="carousel">
					<!-- Indicators -->
					<ol class="carousel-indicators">
						<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
						<li data-target="#myCarousel" data-slide-to="1" class=""></li>
					</ol>
					<div class="carousel-inner" role="listbox">
						<div class="item active">
							<img class="fan-first-slide" src="./img/shopcarousel1.jpg" alt="First slide" width="1170" height="600">
							<div class="header-text">
								<h1>ФЕН ЗОНА</h1>
								<h2>Официални фен артикули</h2>
							</div>
						</div>
						<div class="item">
							<img class="fan-second-slide" src="./img/shopcarousel2.jpg" alt="Second slide" width="1170" height="600">
							<div class="header-text">
								<br><br>
								<h2>Чудесна идея за подарък <br><br> на един истински фен!</h2>
							</div>
						</div>
					</div>
					<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>
			</div>

			<!-- Content and sidebar -->
			<div class="row">
				<div class="container-fluid">
					
					<?php echo '<?php
						';?>require_once("dbcontroller.php");
						$db_handle = new DBController();
					<?php echo '?>';?>

					<div id="product-grid">
						<div class="col-md-8" id="content">
							<div id="title">
								<h3>Фен Артикули</h3>
							</div>
							<hr>



							<?php echo '<?php
								';?>$product_array = $db_handle->runQuery("SELECT * FROM tblproduct ORDER BY id ASC limit 12");

								if (!empty($product_array)) { 
									foreach($product_array as $key=>$value) {
							<?php echo '?>';?>
										<div class="product-item col-xs-6 col-sm-4 col-md-3">
											<form method="post" action="index1.php?action=add&code=<?php echo '<?php ';?>echo $product_array[$key]['code']; <?php echo '?>';?>">
												<a id="imgalert" class="imgalert" href="review.php?action=review&code=<?php echo '<?php ';?>echo $product_array[$key]['code']; <?php echo '?>';?>">
													<div class="product-head">
														<div class="product-image">
															<img class="smallimg" src="<?php echo '<?php ';?>echo $product_array[$key]['image']; <?php echo '?>';?>">
														</div>
														<div class="product-name">
															<strong><?php echo '<?php ';?>echo $product_array[$key]["name"]; <?php echo '?>';?></strong>
														</div>
													</div>
												</a>
												<div class="item-content">
													<!-- <div class="desc std">
														<strong><?php echo '<?php ';?>echo $product_array[$key]["description"]; <?php echo '?>';?></strong>
													</div> -->
													<div class="product-price">
														<?php echo '<?php ';?>echo $product_array[$key]["price"]."лв."; <?php echo '?>';?>
													</div>
													<div>
														<!-- <input type="number" name="quantity" class="text-center col-xs-6" id="quantity" min="1" value="1"> -->
														<input type="number" name="quantity" class="text-center" id="quantity" min="1" value="1" max="<?php echo $_smarty_tpl->tpl_vars['quantity']->value;?>
">



														<!-- <div class="input-group number-spinner">
															<span class="input-group-btn data-dwn">
																<button class="btn btn-default btn-info" data-dir="dwn"><span class="glyphicon glyphicon-minus"></span></button>
															</span>
															<input type="text" class="form-control text-center" value="1" min="1" max="<?php echo $_smarty_tpl->tpl_vars['quantity']->value;?>
">
															<span class="input-group-btn data-up">
																<button class="btn btn-default btn-info" data-dir="up"><span class="glyphicon glyphicon-plus"></span></button>
															</span>
														</div> -->



														
														<!-- <input type="submit" value="КУПИ" class="btnAddAction"> -->
														<button type="submit" class="btnAdd"><span>КУПИ </span></button>
													</div>
												</div>
											</form>
											<!-- <form method="post" action="review.php?action=review&code=<?php echo '<?php ';?>echo $product_array[$key]['code']; <?php echo '?>';?>">
												<input type="submit" value="Виж повече" class="btnReview">
											</form> -->
										</div>
							<?php echo '<?php
									';?>}
								}
							<?php echo '?>';?>
							<div class="col-md-12 pagination-row">
								<form method="post" action="cart1.php">
									<ul class="pagination">
										<li class="disabled"><a href="#">«</a></li>
										<li class="active"><a href="#">1<span class="sr-only">(current)</span></a></li>
										<!-- <li><a href="cart1.php" name="second_page">2</a></li> -->
									</ul>
								</form>
							</div>
						</div>
						<aside class="hidden-sm col-md-4">
							<table class="table table-responsive table-bordered table-hover table-condensed">
								<thead>
								  <tr>
								    <th id="tabl-head">№</th>
								    <th id="tabl-head">Отбор</th>
								    <th id="tabl-head">П</th>
								    <th id="tabl-head">Р</th>
								    <th id="tabl-head">З</th>
								    <th id="tabl-head">Т</th>
								  </tr>
								</thead>
								<tbody>
								  <tr class="success">
								  	<td id="champ-leag">1</td>
								    <td>Реал Мадрид</td>
								    <td>29</td>
								    <td>6</td>
								    <td>3</td>
								    <td>93</td>
								  </tr>
								  <tr class="success">
								  	<td id="champ-leag">2</td>
								    <td>Барселона</td>
								    <td>28</td>
								    <td>6</td>
								    <td>4</td>
								    <td>90</td>
								  </tr>
								  <tr class="success">
								    <td id="champ-leag">3</td>
								    <td>Атлетико Мадрид</td>
								    <td>23</td>
								    <td>9</td>
								    <td>6</td>
								    <td>78</td>
								  </tr>
								  <tr>
								    <td id="champ-leag-qualific">4</td>
								    <td>Севиля</td>
								    <td>21</td>
								    <td>8</td>
								    <td>6</td>
								    <td>72</td>
								  </tr>
								  <tr>
								    <td id="leag-europe">5</td>
								    <td>Виляреал</td>
								    <td>19</td>
								    <td>10</td>
								    <td>9</td>
								    <td>67</td>
								  </tr>
								  <tr>
								    <td>6</td>
								    <td>Реал Сосиедад</td>
								    <td>19</td>
								    <td>7</td>
								    <td>12</td>
								    <td>64</td>
								  </tr>
								  <tr>
								    <td>7</td>
								    <td>Атлетик Билбао</td>
								    <td>19</td>
								    <td>6</td>
								    <td>13</td>
								    <td>63</td>
								  </tr>
								  <tr>
								    <td>8</td>
								    <td>Еспаньол</td>
								    <td>15</td>
								    <td>11</td>
								    <td>12</td>
								    <td>56</td>
								  </tr>
								  <tr>
								    <td>9</td>
								    <td>Алавес</td>
								    <td>14</td>
								    <td>13</td>
								    <td>11</td>
								    <td>55</td>
								  </tr>
								  <tr>
								    <td>10</td>
								    <td>Ейбар</td>
								    <td>15</td>
								    <td>9</td>
								    <td>14</td>
								    <td>54</td>
								  </tr>
								  <tr>
								  	<td colspan="6"><a href="standings.html">Виж пълното класиране<span class="glyphicon glyphicon-chevron-right"></span></a></td>
								  </tr>
								</tbody>
							</table>
							
							<!-- News Carousel
				            ================================================== -->
							<div id="myCarouselNews" class="carousel slide" data-ride="carousel">
								<div class="carousel-inner" role="listbox">
									<div class="item active">
										<a href="#"><img class="thumbnail first-slide" src="./img/news/valverde1.jpg" alt="First slide"></a>
										<p><time>29 май 2017</time></p>
										<div id="news-carousel-content">
											<h4>Официално: Барселона има нов старши треньор</h4>
		                            		<p>Ръководството на Барселона взе решение кой да наследи Луис Енрике на треньорския пост на "Камп Ноу". Само часове след като отпадна възможността досегашният помощник на Лучо Хуан Карлос Унсуе да поеме кормилото на каталунците и той отпътува в посока Селта, шефовете на "лос кулес" окончателно се спряха на Ернесто Валверде, чийто договор ще бъде за срок от 2+1 години. Бившият наставник на Атлетик Билбао ще вземе в щаба си и двамата си най-доверени хора, с които работи и при баските – Йоан Аспиасу, който ще му бъде първи асистент, както и Хосе Антонио Посанко, чиято отговорност ще бъде физическата подготовка. Триото работи неизменно заедно от сезон 2008/2009 насам, когато изведе Олимпиакос до титлата в Гърция. 53-годишният Валверде бе основен фаворит за следващ треньор на Барселона, макар през сезона да бяха спрягани и имената на Еусебио Сакристан и Роналд Куман. Той има два сезона в Барса от годините си на професионален футболист и между 1988 и 1990 година печели Купата на краля и КНК. Като треньор пък е водил градския съперник Еспаньол, както и Виляреал, Валенсия, Олимпиакос, Атлетик Билбао и Билбао Атлетик – втория тим на "лъвовете" от Биская. Официалното представяне на Ернесто Валверде ще се състои в четвъртък.</p>
										</div>
									</div>
									<div class="item">
										<a href="#"><img class="thumbnail second-slide" src="./img/news/valverde2.jpg" alt="Second slide"></a>
										<p><time>31 май 2017</time></p>
										<div id="news-carousel-content">
											<h4>Новият треньор: Искам да направя Барселона още по-велик</h4>
											<p>Назначеният на мястото на Луис Енрике начело на Барселона Ернесто Валверде даде първото си интервю като наставник на клуба. По-рано днес 53-годишният специалист пристигна на “Камп Ноу” и говори пред клубния ТВ канал на каталунците, а официалното му представяне ще се състои утре (четвъртък). 

											“За мен е привилегия и шанс, че точно в този момент Барселона се сети за мен, предлагайки ми този пост. Посрещам този нов етап от кариерата си с голям ентусиазъм, но и като огромно предизвикателство. Ще се опитам да направя отбора още по-силен”, коментира Валверде. 

											“Иска ми се всичко да е наред и феновете да се наслаждават на играта ни, продължи наставникът. - Бих искал да виждам отбор, който се раздава на терена. Досега през годините запалянковците на Барселона се наслаждаваха на редица класни футболисти и треньори. Идеята ми е да продължа тази линия и, ако е възможно, отборът да стане още по-добър. Футболът е за това: да постигаш победи и да радваш хората, които се идентифицират с клуба и които се гордеят с него. Това искаме и дано да успеем да го постигнем.”

											Валверде ще подпише за 2+1 години.</p>
										</div>
									</div>
									<div class="item">
										<a href="#"><img class="thumbnail third-slide" src="./img/news/iniesta.jpg" alt="Third slide"></a>
										<p><time>31 май 2017</time></p>
										<div id="news-carousel-content">
											<h4>Иниеста: Валверде има качества да води Барса</h4>
											<p>Капитанът на Барселона Андрес Иниеста коментира назначението на Ернесто Валверде за старши треньор на каталунския тим. "Валверде има качества да води Барса. Ако нямаше, нямаше да бъде избран", довери 33-годишният халф по време на събитие Save the Children. "През новия сезон ще се завърнем с нови сили и надежди. Убеден съм, че той ще бъде успешен за нас, ако правим нещата по правилния начин. Тук трябва да играеш добре и да печелиш трофеи", сподели номер 8 на "лос кулес". 

											"Чувствам се силен, позитивен и мотивиран, за да продължа да играя на високо ниво в следващите няколко години. Желанието ми е да остана в Барса. Винаги съм искал това, още от момента, в който пристигнах тук на 12-годишна възраст", каза още Иниеста.</p>
										</div>
									</div>
								</div>
								<!-- Indicators -->
								<ol class="carousel-indicators" id="carousel-indicators-news">
									<li data-target="#myCarouselNews" data-slide-to="0" class="active"></li>
									<li data-target="#myCarouselNews" data-slide-to="1"></li>
									<li data-target="#myCarouselNews" data-slide-to="2"></li>
								</ol>
							</div><!-- End Carousel -->
							<br>
							<br>

							<!-- Next Game -->
							<div class="row">
								<div class="featured-event">
									<div class="cell cell--justified u-p12 col-sm-12">
										<h3>Следваща среща</h3>
										<p id="demo"></p>
										<div class="cell__section col-sm-4">
											<div class="cell__content">
												<img src="./img/barcelona.png" class="img-responsive img--x48">
											</div>
											<div class="cell__content">Barcelona</div>
										</div>
										<div class="cell__section col-sm-4">
											<div class="cell__content h3">
												<span class="js-adjust-date" data-timestamp="1488726900" data-format="H:i">21:45</span>
											</div>
										</div>
										<div class="cell__section col-sm-4">
											<div class="cell__content">
												<img src="./img/standings/juventus.png" class="img-responsive img--x48">
											</div>
											<div class="cell__content">Juventus</div>
										</div>
									</div>
								</div>
							</div>
						</aside>
					</div>
				</div>
			</div>
		</main>
		<div class="clearfix"></div>
		<footer>
			<img src="./img/fu.png" width="130" height="40">
			&nbsp;
			<a href="https://www.facebook.com/fcbarcelona/?fref=ts" target="_blank" id="headerLogonew" class="headerLogonew">
				<img src="./img/facebook/fb3white.png" width="40" height="40">
			</a>
			<a href="https://www.instagram.com/fcbarcelona/" target="_blank" id="headerLogonew" class="headerLogonew">
				<img src="./img/instagram/inst1.png" width="40" height="40">
			</a>
			<a href="https://twitter.com/fcbarcelona" target="_blank" id="headerLogonew" class="headerLogonew">
				<img src="./img/twitter/tw.png" width="40" height="40">
			</a>
			<a href="https://plus.google.com/116151548242653888082/posts" target="_blank" id="headerLogonew" class="headerLogonew">
				<img src="./img/google_plus/gp3.png" width="40" height="40">
			</a>
			<a href="https://www.youtube.com/fcbarcelona" target="_blank" id="headerLogonew" class="headerLogonew">
				<img src="./img/youtube/yt4.png" target="_blank" width="40" height="40">
			</a>
			<a href="#" class="button-to-top">
				<span class="glyphicon glyphicon-chevron-up"></span>
			</a>
		</footer>
	</div>
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"><?php echo '</script'; ?>
>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<?php echo '<script'; ?>
 src="js/bootstrap.min.js"><?php echo '</script'; ?>
>

	<!-- Next game Countdown JS -->
	<?php echo '<script'; ?>
>
		// Set the date we're counting down to
		var countDownDate = new Date("July 23, 2017 21:45:00").getTime();

		// Update the count down every 1 second
		var countdownfunction = setInterval(function() {

		    // Get todays date and time
		    var now = new Date().getTime();
		    
		    // Find the distance between now an the count down date
		    var distance = countDownDate - now;
		    
		    // Time calculations for days, hours, minutes and seconds
		    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
		    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
		    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
		    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
		    
		    // Output the result in an element with id="demo"
		    document.getElementById("demo").innerHTML = days + "д " + hours + "ч " + minutes + "м " + seconds + "с ";
		    
		    // If the count down is over, write some text 
		    if (distance < 0) {
		        clearInterval(countdownfunction);
		        document.getElementById("demo").innerHTML = "Приключил";
		    }
		}, 1000);
	<?php echo '</script'; ?>
>

	<!-- navbar with search4 -->
	<?php echo '<script'; ?>
 type="text/javascript">
		$(function() { 

		    $('a[href="#toggle-search"], .navbar-bootsnipp .bootsnipp-search .input-group-btn > .btn[type="reset"]').on('click', function(event) {
				event.preventDefault();
				$('.navbar-bootsnipp .bootsnipp-search .input-group > input').val('');
				$('.navbar-bootsnipp .bootsnipp-search').toggleClass('open');
				$('a[href="#toggle-search"]').closest('li').toggleClass('active');

				if ($('.navbar-bootsnipp .bootsnipp-search').hasClass('open')) {
					/* I think .focus dosen't like css animations, set timeout to make sure input gets focus */
					setTimeout(function() { 
						$('.navbar-bootsnipp .bootsnipp-search .form-control').focus();
					}, 100);
				}			
			});

			$(document).on('keyup', function(event) {
				if (event.which == 27 && $('.navbar-bootsnipp .bootsnipp-search').hasClass('open')) {
					$('a[href="#toggle-search"]').trigger('click');
				}
			});
		    
		});
	<?php echo '</script'; ?>
>

	<!-- Number Spinner -->
	<?php echo '<script'; ?>
>
		$(function() {
		    var action;
		    $(".number-spinner button").mousedown(function () {
		        btn = $(this);
		        input = btn.closest('.number-spinner').find('input');
		        btn.closest('.number-spinner').find('button').prop("disabled", false);

		    	if (btn.attr('data-dir') == 'up') {
		            action = setInterval(function(){
		                if ( input.attr('max') == undefined || parseInt(input.val()) < parseInt(input.attr('max')) ) {
		                    input.val(parseInt(input.val())+1);
		                }else{
		                    btn.prop("disabled", true);
		                    clearInterval(action);
		                }
		            }, 60);
		    	} else {
		            action = setInterval(function(){
		                if ( input.attr('min') == undefined || parseInt(input.val()) > parseInt(input.attr('min')) ) {
		                    input.val(parseInt(input.val())-1);
		                }else{
		                    btn.prop("disabled", true);
		                    clearInterval(action);
		                }
		            }, 60);
		    	}
		    }).mouseup(function(){
		        clearInterval(action);
		    });
		});
	<?php echo '</script'; ?>
>
</body>
</html><?php }
}
