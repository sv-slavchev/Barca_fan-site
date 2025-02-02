<?php
/* Smarty version 3.1.29, created on 2018-04-21 11:22:00
  from "C:\xampp\htdocs\BarcaTrain\news.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5adb02b8253fb9_01831172',
  'file_dependency' => 
  array (
    'dbdefae5ab8115930d25845cafc2958266ab9951' => 
    array (
      0 => 'C:\\xampp\\htdocs\\BarcaTrain\\news.html',
      1 => 1524302516,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5adb02b8253fb9_01831172 ($_smarty_tpl) {
?>
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
		body>.container>#header {
			margin-top: -20px;
		}
		
		/* first carousel */
		/* #myCarousel .carousel-caption {
		    left:0;
			right:0;
			bottom:0;
			text-align:left;
			padding:10px;
			background:rgba(0,0,0,0.6);
			text-shadow:none;
		}
		
		#myCarousel .list-group {
			position:absolute;
			top:0;
			right:0;
		}
		#myCarousel .list-group-item {
			border-radius:0px;
			cursor:pointer;
		}
		#myCarousel .list-group .active {
			background-color:#eee;	
		}
		
		@media (min-width: 992px) { 
			#myCarousel {
				padding-right:33.3333%;
			}
			#myCarousel .carousel-controls {
				display:none;
			} 	
		}
		@media (max-width: 991px) { 
			.carousel-caption p, #myCarousel .list-group {
				display:none;
			} 
		} */
		/* end first carousel */



		/* second carousel */
		#myCarousel .nav a small
		{
		    display: block;
		}
		#myCarousel .nav
		{
		    background: #eee;
		}

		.item{
		    height:340px;}
		    
		.item h3{
		    font-size:5em;
		    text-align:center;
		    margin:60px 0;
		    }
		    
		.item p{
		    text-align:left;
		    color:#fff;
		    }
		    
		carousel-caption {
		float:left;    
		}




		.nav-justified > li > a
		{
		    border-radius: 0px;
		}
		.nav-pills>li[data-slide-to="0"].active a, .item[data-slide-bg="0"] { 
		    background-color: #16a085; 
		    transition:all 0.3s;
		    }
		.nav-pills>li[data-slide-to="1"].active a, .item[data-slide-bg="1"]{ 
		    background-color: #e67e22;
		    transition:all 0.3s;
		    }
		.nav-pills>li[data-slide-to="2"].active a,.item[data-slide-bg="2"] { 
		    background-color: #2980b9;
		    transition:all 0.3s;
		    }
		.nav-pills>li[data-slide-to="3"].active a, .item[data-slide-bg="3"] { 
		    background-color: #8e44ad;
		    transition:all 0.3s;
		    }
		/* end second carousel */





		.news {
			margin-left: -15px;
			margin-bottom: 15px;
		    background: #fff;
			position: relative;
			overflow: hidden;
			z-index:1;
		 	-webkit-transition: all 0.5s ease;
			-moz-transition: all 0.5s ease;
			-ms-transition: all 0.5s ease;
			-o-transition: all 0.5s ease;
			transition: all 0.5s ease;	

			border: 1px solid #eaeaea;
		}

		#new-row {
			margin-bottom: 30px;
		}

		.news .img-figure {
			position: relative;
			max-height: 200px;
		}

		.news .img-figure img {
			max-height: 200px;
			position: relative;	
			overflow: hidden;
			-webkit-transition: all 1s ease;
			-moz-transition: all 1s ease;
			-ms-transition: all 1s ease;
			-o-transition: all 1s ease;
			transition: all 1s ease;
		}

		.news:hover .img-figure img {
			-webkit-transform: scale(1.10);
			-moz-transform: scale(1.10);
			-ms-transform: scale(1.10);
			-o-transform: scale(1.10);
			transform: scale(1.10);
		}

		.news .title {
			/*padding: 29px 30px;*/
			padding: 20px;
			position: absolute;
			left: 0;
			background: #fff;
			width: 100%;
			height: 100%;
			-webkit-transition: all 0.5s ease;
			-moz-transition: all 0.5s ease;
			-ms-transition: all 0.5s ease;
			-o-transition: all 0.5s ease;
			transition: all 0.5s ease;	
		}

		.news .title h4 {
			max-height: 60px;
			overflow: hidden;
			margin: 0;
			text-transform: uppercase;
			font-weight: bold;
		/*	color: #3D6AA2;*/
			text-align: center;
		}

		.news:hover .title  {
			margin-top: -70px;
			background: #fff;
		}

		.news  p.description {
			max-height: 100px;
			overflow: hidden;
			position: relative;
			font-weight: normal;
			line-height: 22px;
			opacity: 0;

			text-align: center;

			padding: 15px 30px 0px 30px;

			-webkit-transition: all 0.5s ease;
			-moz-transition: all 0.5s ease;
			-ms-transition: all 0.5s ease;
			-o-transition: all 0.5s ease;
			transition: all 0.5s ease;	
		}

		.news:hover p.description  {
			opacity: 1;
		}

		/* p.more {
			text-align: center;
		}

		.more a {
		    position: relative;
		    font-size: 13px;
		    margin-top: 30px;
		    display: block;
		    -webkit-transition: all 0.5s ease;
		    -moz-transition: all 0.5s ease;
		    -ms-transition: all 0.5s ease;
		    -o-transition: all 0.5s ease;
		    transition: all 0.5s ease;
		    display: inline-block;
		    color: #28998b;
		}

		.more a:after {
		    content: '';
		    width: 18px;
		    height: 1px;
		
		    position: absolute;
		    left: 55px;
		    top: 9px;
		
		    background: #28998b;
		
		    vertical-align: middle;
		    margin-left: 10px;
		    -webkit-transition: all 0.5s ease;
		    -moz-transition: all 0.5s ease;
		    -ms-transition: all 0.5s ease;
		    -o-transition: all 0.5s ease;
		    transition: all 0.5s ease;
		} */


		.news:hover a:after {
		    width: 30px;
		}

		.cat {
			background: #a0bc9f;
			color: #fff;
			text-transform: uppercase;
			position: absolute;
			left: 0;
			top: 25px;
			z-index: 1;
			padding: 3px 15px;
		}

		.cat-modal {
			background: #a0bc9f;
			color: #fff;
			text-transform: uppercase;
			position: absolute;
			left: 15px;
			top: 50px;
			z-index: 1;
			padding: 3px 15px;
		}

		.panel-body .title h4 {
			font-size: 28px;
			margin-top: 20px;
			margin-bottom: 20px;
		}
		.panel-body p img {
			margin-bottom: 5px;
		}

		#content div a {
			text-decoration: none;
		}
		.description iframe {
			margin-top: 5px;
			margin-left: -10px;
		}
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
				<!-- <nav class="navbar navbar-default">
					<div class="container-fluid">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button> 
							<a class="navbar-brand" href="home.html"><span class="glyphicon glyphicon-home"></span>&nbsp;FCB</a>
							<a href="home.html" id="headerLogonew" class="headerLogonew">
								<img src="./img/barcelona.png" width="50" height="50">
							</a>
						</div>
						<div class="collapse navbar-collapse" id="myNavbar">
							<ul class="nav navbar-nav">
								<li><a href="#">Новини</a></li>
								<li><a href="shop.html">Фен зона</a></li>
								<li class="w3-dropdown-hover">
									<a href="#">Ла лига</a>
									<div class="w3-dropdown-content w3-white w3-card-4">
										<a href="standings.html">Класиране</a>
										<a href="results.html">Резултати</a>
										<a href="fixtures.html">Програма</a>
									</div>
								</li>
								<li class="w3-dropdown-hover">
									<a href="#">ФК Барселона</a>
									<div class="w3-dropdown-content w3-white w3-card-4">
										<a href="history.html">История</a>
										<a href="squad.html">Състав</a>
										<a href="campnou.html">Камп Ноу</a>
									</div>
								</li>
							</ul>
							<ul class="nav navbar-nav navbar-right">
								<form class="navbar-form navbar-left">
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Search in the site">
									</div>
									<button type="submit" class="btn btn-default">
										<span class="glyphicon glyphicon-search"></span>
									</button>
								</form>
								<li>
									<a href="" data-toggle="modal" data-target="#myModalReg"><span class="glyphicon glyphicon-user"></span> Sign Up</a>
								</li>
								<li>
									<a href="" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-log-in"></span> Login</a>
								</li>
							</ul>
						</div>
					</div>
				</nav> -->

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
								<li><a href="registration_final.php" class="animate"><span class="glyphicon glyphicon-user"></span> Регистрация</a></li>
								<li><a href="login.php" class="animate"><span class="glyphicon glyphicon-log-in"></span> Вход</a></li>
								<!-- <li><a href="" class="animate" data-toggle="modal" data-target="#myModalReg"><span class="glyphicon glyphicon-user"></span> Register</a></li>
								<li><a href="" class="animate" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
								
								<li class="[ hidden-xs ]"><a href="#toggle-search" class="[ animate ]"><span class="[ glyphicon glyphicon-search ]"></span></a></li> -->
							</ul>
						</div>
					</div>
					<div class="[ bootsnipp-search animate ]">
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
					</div>
				</nav>
			</div>
		</header>
		<main class="col-xs-12 col-sm-12">
			<!-- Content and sidebar -->
			<div class="row">
				<div id="content" class="col-sm-12">
					<div id="title">
						<h2>Новини</h2>
					</div>
					<hr>
					<!-- <div id="myCarousel" class="carousel slide" data-ride="carousel">
						    
						Wrapper for slides
						<div class="carousel-inner">
					
							<div class="item active">
								<img src="http://placehold.it/760x400/cccccc/ffffff">
								<div class="carousel-caption">
									<h4><a href="#">Lorem ipsum dolor sit amet consetetur sadipscing</a></h4>
									<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat. <a class="label label-primary" href="http://sevenx.de/demo/bootstrap-carousel/" target="_blank">Free Bootstrap Carousel Collection</a></p>
								</div>
							</div>End Item
					
							<div class="item">
								<img src="http://placehold.it/760x400/999999/cccccc">
								<div class="carousel-caption">
									<h4><a href="#">consetetur sadipscing elitr, sed diam nonumy eirmod</a></h4>
									<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat. <a class="label label-primary" href="http://sevenx.de/demo/bootstrap-carousel/" target="_blank">Free Bootstrap Carousel Collection</a></p>
								</div>
							</div>End Item
					
							<div class="item">
								<img src="http://placehold.it/760x400/dddddd/333333">
								<div class="carousel-caption">
									<h4><a href="#">tempor invidunt ut labore et dolore</a></h4>
									<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat. <a class="label label-primary" href="http://sevenx.de/demo/bootstrap-carousel/" target="_blank">Free Bootstrap Carousel Collection</a></p>
								</div>
							</div>End Item
					
							<div class="item">
								<img src="http://placehold.it/760x400/999999/cccccc">
								<div class="carousel-caption">
									<h4><a href="#">magna aliquyam erat, sed diam voluptua</a></h4>
									<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat. <a class="label label-primary" href="http://sevenx.de/demo/bootstrap-carousel/" target="_blank">Free Bootstrap Carousel Collection</a></p>
								</div>
							</div>End Item
					
							<div class="item">
								<img src="http://placehold.it/760x400/dddddd/333333">
								<div class="carousel-caption">
									<h4><a href="#">tempor invidunt ut labore et dolore magna aliquyam erat</a></h4>
									<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat. <a class="label label-primary" href="http://sevenx.de/demo/bootstrap-carousel/" target="_blank">Free Bootstrap Carousel Collection</a></p>
								</div>
							</div>End Item
					
						</div>End Carousel Inner
					
					
						<ul class="list-group col-sm-4">
							<li data-target="#myCarousel" data-slide-to="0" class="list-group-item active">
								<h4>Lorem ipsum dolor sit amet consetetur sadipscing</h4>
							</li>
							<li data-target="#myCarousel" data-slide-to="1" class="list-group-item">
								<h4>consetetur sadipscing elitr, sed diam nonumy eirmod</h4>
							</li>
							<li data-target="#myCarousel" data-slide-to="2" class="list-group-item">
								<h4>tempor invidunt ut labore et dolore</h4>
							</li>
							<li data-target="#myCarousel" data-slide-to="3" class="list-group-item">
								<h4>magna aliquyam erat, sed diam voluptua</h4>
							</li>
							<li data-target="#myCarousel" data-slide-to="4" class="list-group-item">
								<h4>tempor invidunt ut labore et dolore magna aliquyam erat</h4>
							</li>
						</ul>
					
						Controls
						<div class="carousel-controls">
							<a class="left carousel-control" href="#myCarousel" data-slide="prev">
								<span class="glyphicon glyphicon-chevron-left"></span>
							</a>
							<a class="right carousel-control" href="#myCarousel" data-slide="next">
								<span class="glyphicon glyphicon-chevron-right"></span>
							</a>
						</div>
					
					</div> -->
					<!-- End Carousel -->

					<!-- <div id="myCarousel" class="carousel slide" data-ride="carousel">
					    Wrapper for slides
					    <div class="carousel-inner">
					        <div class="item active" data-slide-bg="0">
					            <div class="col-md-6">
					                <h3>Headline</h3>
					                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
					                tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. Lorem
					                ipsum dolor sit amet, consetetur sadipscing elitr.</p>
					            </div>
					            <div class="col-md-6">
					                <img  src="http://www.w3.org/html/logo/downloads/HTML5_1Color_Black.png" height="340" align="center" class="center" />
					            </div>
					        </div>
					        End Item
					        <div class="item" data-slide-bg="1">
					            <img src="http://placehold.it/1200x400/e67e22/ffffff&text=Projects">
					            <div class="carousel-caption">
					                <h3>
					                    Headline</h3>
					                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
					                tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. Lorem
					                ipsum dolor sit amet, consetetur sadipscing elitr.</p>
					            </div>
					        </div>
					        End Item
					        <div class="item" data-slide-bg="2">
					            <img src="http://placehold.it/1200x400/2980b9/ffffff&text=Portfolio">
					            <div class="carousel-caption">
					                <h3>
					                    Headline</h3>
					                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
					                tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. Lorem
					                ipsum dolor sit amet, consetetur sadipscing elitr.</p>
					            </div>
					        </div>
					        End Item
					        <div class="item" data-slide-bg="3">
					            <img src="http://placehold.it/1200x400/8e44ad/ffffff&text=Services">
					            <div class="carousel-caption">
					                <h3>
					                    Headline</h3>
					                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
					                tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. Lorem
					                ipsum dolor sit amet, consetetur sadipscing elitr.</p>
					            </div>
					        </div>
					        End Item
					    </div>
					    End Carousel Inner
					    <ul class="nav nav-pills nav-justified">
					        <li data-target="#myCarousel" data-slide-to="0" class="active"><a href="#">About<small>Lorem
					            ipsum dolor sit</small></a></li>
					        <li data-target="#myCarousel" data-slide-to="1"><a href="#">Projects<small>Lorem ipsum
					            dolor sit</small></a></li>
					        <li data-target="#myCarousel" data-slide-to="2"><a href="#">Portfolio<small>Lorem ipsum
					            dolor sit</small></a></li>
					        <li data-target="#myCarousel" data-slide-to="3"><a href="#">Services<small>Lorem ipsum
					            dolor sit</small></a></li>
					    </ul>
					</div> -->
				    <!-- End Carousel -->

					<br>

					<div class="col-xs-6 col-sm-4">
						<a href="" class="animate" data-toggle="modal" data-target="#myModal1">
							<div class="news">
								<div class="img-figure">
									<div class="cat">футбол</div>
									<img src="./img/news/pique.jpg">
								</div>	

								<div class="title">
									<h4>Пике пак дразни "белите": Твърде рано е да говорите за превъзходство</h4>
								</div>
								<p class="description">
									Един от най-големите дразнители за феновете на Реал Мадрид - Жерард Пике, пак намери начин да провокира големия съперник от “Сантиаго Бернабеу”. След втория пореден успех на отбора в Шампионската лига Кристиано Роналдо заяви, че Реал е навлязъл в нова ера на доминация. Пике обаче не е съгласен. “Твърде рано е за подобно твърдение”, убеден е защитникът на Барселона в интервю за "Minuto 0" по Movistar Plus.

									“Не мисля, че постигнатото от нас през изминалите сезони може да се сравнява с това, което в Мадрид спечелиха за последните две години, продължи испанският национал. - Заради нашите успехи в Реал отпразнуваха спечелването на Купата на Краля с обиколка из града. Когато ние направим такъв парад само заради една купа на Испания, то тогава вече ще може да се каже, че сме в период на превъзходство на Реал”. 

									Пике намеква за 2014 г., когато “лос бланкос” взеха Купата на Испания след 2:1 над каталунците и след това дефилириха с рейс из Мадрид. Бранителят е допълнително засегнат от големия враг, защото докато празнуваха титлата си от този сезон, играчите на Зинедин Зидан си позволиха да скандират "Пике, копеле".

									От 2006 г. насам Барселона завоюва около 30 трофея, в това число 7 титли на Примера, 6 Суперкупи на Испания, 4 крайни успеха в ШЛ, 3 Суперкупи на Европа, 5 Купи на Испания и 3 титли от Световното клубно първенство. 

									За същия период “кралете” записаха на своята сметка 3 Шампионски лиги, 4 титли в Ла Лига, 2 Купи на Испания, 2 Суперкупи на Испания, 2 Суперкупи на Европа и 2 Световни клубни първенства.
								</p>
							</div>
						</a>
					</div>

					<div class="col-xs-6 col-sm-4">
						<a href="" class="animate" data-toggle="modal" data-target="#myModal2">
							<div class="news">
								<div class="img-figure">
									<div class="cat">футбол</div>
									<img src="./img/news/pep.jpg">
								</div>	

								<div class="title">
									<h4>Пеп предупреди "белите": Барса винаги се завръща</h4>
								</div>
								<p class="description">
									Бившият наставник на Барселона Джосеп Гуардиола честити на Реал Мадрид за триумфа в Кардиф, но е оптимист, че каталунците ще отговорят на предизвикателството. 

									“Поздравявам Реал - това е заслуженият първенец в Шампионската лига. Искам обаче да обърна внимание на Зинедин Зидан, че Барса винаги се завръща”, заяви Пеп по време на голф турнир, организиран от фондацията на Йохан Кройф.

									“Със Зизу си приличаме по това, че имаме еднакви прически, продължи Гуардиола. Като футболист той беше на много по-високо ниво от мен. Радвам се за него, защото сега той върши отлична работа”. 

									Испанецът беше запитан какво трябва да направят в Барселона, за да триумфират с ШЛ отново. “Няма какво толкова много да се стори, след като така или иначе си спечелил Купата на Испания и до последно си се борил за титлата в първенството, отговори Гуардиола. - Барса е най-силният отбор за последните 15 години. А това означава да печелиш всяка седмица. Никой друг в Примера дивисион не успя да постигне това, което тимът стори за въпросния период. В Европа обаче можеш да отпаднеш и само след един слаб двубой. Никой обаче не се съревновава като каталунците. Шампионската лига е по-къса надпревара, в която можеш да направиш осем силни срещи. В Ла Лига обаче говорим за всеки един кръг. Ето защо няма по-силен отбор от Барселона и той ще се завърне на върха.”

									Мениджърът на Манчестър Сити коментира и новия наставник на тима от “Камп Ноу” - Ернесто Валверде: “Той е много добър специалист и ми е добър приятел. Това беше отличен избор.”
								</p>
							</div>
						</a>
					</div>

					<div class="col-xs-6 col-sm-4">
						<a href="" class="animate" data-toggle="modal" data-target="#myModal3">
							<div class="news">
								<div class="img-figure">
									<div class="cat">футбол</div>
									<img src="./img/news/messi.jpg">
								</div>	

								<div class="title">
									<h4>Меси: Не познавам Валверде, но целта е да спечелим всичко</h4>
								</div>
								<p class="description">
									Големият лидер и вдъхновител на Барселона Лионел Меси е в Пекин, за да представи новата сделка между Phoenix Group и Mediapro. Журналистите използваха събитието, за да се запознаят с мнението на аржентинеца за новия треньор на каталунците Ернесто Валверде. "Не познавам новия треньор, но ще се запознаем в следващите седмици", заяви Лео. 

									"Познавам го единствено от отбори, в които е работил. Не познавам начина му на работа. Целта обаче е да спечелим всичко", довери Ла Пулга. Меси изрази надежди, че Аржентина ще се класира на Мондиала в Русия.

									Мениджърът на Манчестър Сити коментира и новия наставник на тима от “Камп Ноу” - Ернесто Валверде: “Той е много добър специалист и ми е добър приятел. Това беше отличен избор.”
								</p>
							</div>
						</a>
					</div>

					<div class="col-xs-6 col-sm-4">
						<a href="" class="animate" data-toggle="modal" data-target="#myModal4">
							<div class="news">
								<div class="img-figure">
									<div class="cat">футбол</div>
									<img src="./img/news/valverde3.jpg">
								</div>	

								<div class="title">
									<h4>Валверде: Идеята ми е да се обърна още повече към стила на Барса</h4>
								</div>
								<p class="description">
									Новият старши треньор на Барселона Ернесто Валверде официално подписа договор за 2+1 години с каталунския клуб. 53-годишният специалист не скри вълнението си от новото предизвикателство. "Благодарен съм за доверието в мен. За мен е огромна привилегия. Зная, че с това идва и голяма отговорност. Тук съм заедно с работата си, с идеите си, с които започвам този нов проект", заяви наставникът след подписването на контракта. 

									"Идвам от много специален клуб (Атлетик Билбао). Тук (в Барселона) искам да пренеса всичките си идеи. Моите предшественици в Барселона свършиха много работа и спечелиха много трофеи. Нямам никакви съмнения в правото на философията на Кройф", довери той.

									"Зная добре, че предишните треньори са работили тук с идеята да запазят стила на Барса. Аз добре зная какво представлява в Барселона, работил съм тук. Сега трябва отново да се адаптирам. Идеята ми е да се обърна още повече към стила на Барса", сподели новият треньор.

									След първоначалното си изказване Валверде даде и първата си пресконференция като треньор на "лос кулес". "Трябва да се приспособя към играта и стила на отбора, защото с тях тимът постигна много успехи. С каква система ще играя? Мисля, че отборът се справя добре и в 4-3-3, и в  3-4-3. Всичко е динамика, важното е да контролираме играта. Луис Енрике не се отдалечи от стила, Барса беше разпознаваем отбор", призна той.

									"За мен ще е страхотно преживяване да ръководя Меси, той най-добрият футболист в света. Меси сякаш е стигнал върха си, но винаги може да ни изненада. Надявам се да успея да му помогна. Аз лично ще се наслаждавам на работата с него. Той може да бъде решаваща фигура без значение от позицията си на терена", каза специалистът от Екстремадура. Запитан за изтичащия договор на Лео, Ернесто заяви: "Всички са настроени положителни, че той ще остане, аз също". 

									"Иниеста е много важен за отбора и за клуба. Сержи Роберто може да играе и като бек, и в центъра на терена. Алейш Видал също е част от отбора", довери наставникът на "синьо-червените". "Трябва да анализираме добре всичко. Играта на Барса винаги е била въз основа на колектива. Важно е тимът да играе балансирано. Нужно е да намерим точната форма, за да играем комфортно. (…) Да, тимът не спечели титлата тази година, но взе Купата на краля и Суперкупата на Испания. Луис Енрике нареди куп трофеи в последните години", призна Валверде.

									Запитан дали трябва да се дава почивка на триото Меси, Луис Суарес и Неймар, за да бъдат свежи в края на сезона, той отговори: "Трябва да преценим нещата. Наистина е важно в края на сезона да имаме шанс за всички трофеи, но и да сме в добра форма. Най-важното е в края да се борим на всички фронтове". 

									Това лято предстоят три издания на Ел Класико - два мача за Суперкупата на Испания и една контрола с Реал Мадрид. "Важно е да започнем силно. Суперкупата ни предлага възможност да започнем сезона с трофей", каза той. Валверде обърна внимание и на детско-юношеската школа: "Бих искал да имам силна връзка с школата. Там са момчетата, които могат да се изкачат в първия тим. Ще е по-хубаво дублиращият отбор да се изкачи в Сегунда. За мен е важно да знам за момчетата, които се развиват добре".
								</p>
							</div>
						</a>
					</div>

					<div class="col-xs-6 col-sm-4">
						<a href="" class="animate" data-toggle="modal" data-target="#myModal5">
							<div class="news">
								<div class="img-figure">
									<div class="cat">футбол</div>
									<img src="./img/news/belerin.jpg">
								</div>	

								<div class="title">
									<h4>Белерин се отдалечава от Барса, каталунците се насочват към играч на Челси</h4>
								</div>
								<p class="description">
									Оставането на Арсен Венгер в Арсенал е лоша новина за Барселона, пишат испанските медии. Това намалява шансовете на Ектор Белерин да се присъедини към "лос блаугранас". Каталунският десен бек е много близък с френския специалист и евентуално напускане на мениджъра щеше да проправи път на бранителя към "Камп Ноу". Голямата трансферна сума също ще усложни трансфера. 

									План "Б" за ръководството на барселонци е друг испанец - Сесар Аспиликуета от Челси. 27-годишният наварски футболист наскоро подписа договор със "сините" до 2020 година. Очаква се трансферната цена за Аспи да е между 25 и 30 милиона евро.

									Шефовете на Барса задължително искат да привлекат десен защитник, за да се залага на Сержи Роберто в центъра на терена.
								</p>
							</div>
						</a>
					</div>

					<div class="col-xs-6 col-sm-4">
						<a href="" class="animate" data-toggle="modal" data-target="#myModal6">
							<div class="news">
								<div class="img-figure">
									<div class="cat">футбол</div>
									<img src="./img/news/iniesta.jpg">
								</div>	

								<div class="title">
									<h4>Иниеста: Валверде има качества да води Барса</h4>
								</div>
								<p class="description">
									Капитанът на Барселона Андрес Иниеста коментира назначението на Ернесто Валверде за старши треньор на каталунския тим. "Валверде има качества да води Барса. Ако нямаше, нямаше да бъде избран", довери 33-годишният халф по време на събитие Save the Children. "През новия сезон ще се завърнем с нови сили и надежди. Убеден съм, че той ще бъде успешен за нас, ако правим нещата по правилния начин. Тук трябва да играеш добре и да печелиш трофеи", сподели номер 8 на "лос кулес". 

									"Чувствам се силен, позитивен и мотивиран, за да продължа да играя на високо ниво в следващите няколко години. Желанието ми е да остана в Барса. Винаги съм искал това, още от момента, в който пристигнах тук на 12-годишна възраст", каза още Иниеста.
								</p>
							</div>
						</a>
					</div>

					<div class="col-xs-6 col-sm-4">
						<a href="" class="animate" data-toggle="modal" data-target="#myModal7">
							<div class="news">
								<div class="img-figure">
									<div class="cat">футбол</div>
									<img src="./img/news/valverde2.jpg">
								</div>	

								<div class="title">
									<h4>Новият треньор: Искам да направя Барселона още по-велик</h4>
								</div>
								<p class="description">
									Назначеният на мястото на Луис Енрике начело на Барселона Ернесто Валверде даде първото си интервю като наставник на клуба. По-рано днес 53-годишният специалист пристигна на “Камп Ноу” и говори пред клубния ТВ канал на каталунците, а официалното му представяне ще се състои утре (четвъртък). 

									“За мен е привилегия и шанс, че точно в този момент Барселона се сети за мен, предлагайки ми този пост. Посрещам този нов етап от кариерата си с голям ентусиазъм, но и като огромно предизвикателство. Ще се опитам да направя отбора още по-силен”, коментира Валверде. 

									“Иска ми се всичко да е наред и феновете да се наслаждават на играта ни, продължи наставникът. - Бих искал да виждам отбор, който се раздава на терена. Досега през годините запалянковците на Барселона се наслаждаваха на редица класни футболисти и треньори. Идеята ми е да продължа тази линия и, ако е възможно, отборът да стане още по-добър. Футболът е за това: да постигаш победи и да радваш хората, които се идентифицират с клуба и които се гордеят с него. Това искаме и дано да успеем да го постигнем.”

									Валверде ще подпише за 2+1 години.
								</p>
							</div>
						</a>
					</div>

					<div class="col-xs-6 col-sm-4">
						<a href="" class="animate" data-toggle="modal" data-target="#myModal8">
							<div class="news">
								<div class="img-figure">
									<div class="cat">футбол</div>
									<img src="./img/news/valverde1.jpg">
								</div>	

								<div class="title">
									<h4>Официално: Барселона има нов старши треньор</h4>
								</div>
								<p class="description">
									Ръководството на Барселона взе решение кой да наследи Луис Енрике на треньорския пост на "Камп Ноу". Само часове след като отпадна възможността досегашният помощник на Лучо Хуан Карлос Унсуе да поеме кормилото на каталунците и той отпътува в посока Селта, шефовете на "лос кулес" окончателно се спряха на Ернесто Валверде, чийто договор ще бъде за срок от 2+1 години. Бившият наставник на Атлетик Билбао ще вземе в щаба си и двамата си най-доверени хора, с които работи и при баските – Йоан Аспиасу, който ще му бъде първи асистент, както и Хосе Антонио Посанко, чиято отговорност ще бъде физическата подготовка.

									Триото работи неизменно заедно от сезон 2008/2009 насам, когато изведе Олимпиакос до титлата в Гърция. 53-годишният Валверде бе основен фаворит за следващ треньор на Барселона, макар през сезона да бяха спрягани и имената на Еусебио Сакристан и Роналд Куман. Той има два сезона в Барса от годините си на професионален футболист и между 1988 и 1990 година печели Купата на краля и КНК. Като треньор пък е водил градския съперник Еспаньол, както и Виляреал, Валенсия, Олимпиакос, Атлетик Билбао и Билбао Атлетик – втория тим на "лъвовете" от Биская. Официалното представяне на Ернесто Валверде ще се състои в четвъртък.
								</p>
							</div>
						</a>
					</div>

					<div class="col-xs-6 col-sm-4">
						<a href="" class="animate" data-toggle="modal" data-target="#myModal19">
							<div class="news">
								<div class="img-figure">
									<div class="cat">футбол</div>
									<img src="./img/news/enrique-cirk.jpg">
								</div>	

								<div class="title">
									<h4>Луис Енрике: Това е цирк, но няма да кажа кой е клоунът</h4>
								</div>
								<p class="description">
									Старши треньорът на Барселона Луис Енрике даде последната си пресконференция преди мач на каталунците. Утре вечер Лучо ще има шанса да спечели Купата на краля за трети пореден сезон. "Алавес е отбор във форма, който направи забележителен сезон. Възползват се много добре от вертикалната игра с Дейверсон и добрите действия по фланговете. На Алавес доста трудно се вкарват попадения", заяви специалистът. 

									"Много пъти съм бъркал. В един случай съм бил точен, в друг - не. Без значение какво правиш винаги има някой, който те критикува. В спомените ми ще остане ежедневната работа. Не искам да пазя негативни моменти", довери той. 

									Луис Енрике си тръгва след края на сезона, но си оставя вратичка за някогашно завръщане на "Камп Ноу". "Ако се появя тук на 10 юли, ще ви изненадам. Може да докарам и някой друг инфаркт. Никога не казвай никога. Аз съм млад, симпатичен, благ човек… Защо да не се върна?", попита риторично Лучо. 

									Запитан за отношенията си с журналистите, Луис Енрике беше доста описателен: "Това е цирк, но няма да кажа кой е клоунът. Залата за пресконференции не е най-приятното ми място. Това е моят стил и няма да се променям на 47 години. Опитвам се да бъда себе си без да обиждам никого".
									<img src="./img/news/enrique-cirk1" alt="">
									Битката за трофея на "Висенте Калдерон" е утре от 22,30 часа.
								</p>
							</div>
						</a>
					</div>

					<div class="col-xs-6 col-sm-4">
						<a href="" class="animate" data-toggle="modal" data-target="#myModal20">
							<div class="news">
								<div class="img-figure">
									<div class="cat">футбол</div>
									<img src="./img/news/messi-boateng.jpg">
								</div>	

								<div class="title">
									<h4>Боатенг: Срещу Кристиано ми е по-лесно, отколкото срещу Меси</h4>
								</div>
								<p class="description">
									Световният шампион Жером Боатенг коментира какво за него е да се изправи срещу считаните за двама от най-силните футболисти Кристиано Роналдо и Лионел Меси. “Срещу тях ми е най-сложно, започна защитникът на Байерн (Мюнхен) пред Bild. - Бих включил в списъка още Карим Бензема, Еден Азар и Неймар. На Меси е направо невъзможно да се противопоставиш. Срещу Роналдо ми е по-лесно, защото той разчита и на физическата си мощ. В последно време Кристиано залага по-малко на дрибъла, а гледа да се съсредоточи към завършването на атаките. Португалецът има невероятната способност да се оказва на нужното място в нужното време”.

									Германският национал увери, че не планира да напусна Байерн, каквито информации се появиха преди седмици.
									<iframe width="558" height="416" src="https://www.youtube.com/embed/7DFbKrqemls" frameborder="0" allowfullscreen></iframe>
								</p>
							</div>
						</a>
					</div>

					<div class="col-xs-6 col-sm-4">
						<a href="" class="animate" data-toggle="modal" data-target="#myModal21">
							<div class="news">
								<div class="img-figure">
									<div class="cat">футбол</div>
									<img src="./img/news/herrera.jpg">
								</div>	

								<div class="title">
									<h4>Валверде иска най-добрия играч на Манчестър Юнайтед в Барселона</h4>
								</div>
								<p class="description">
									Бъдещият наставник на Барселона Ернесто Валведре иска първото му попълнение на "Камп Ноу" да бъде халфът на Манчестър Юнайтед Андер Ерера, който наскоро бе избран от феновете за най-добър играч на "червените дяволи" през изминалия сезон. Според каталунския ежедневник Sport 53-годишният специалист вече е обсъдил трансферните си планове с ръководството на Барса и го е уведомил, че иска Ерера в отбора си. Двамата работиха заедно един сезон в Атлетик Билбао, преди играчът да премине в Манчестър Юнайтед. 
									<img src="./img/news/herrera1.jpg" alt="" class="img-responsive">
									Настоящият договор на 27-годишния Ерера изтича след година, но се очаква още през това лято от клуба да му предложат ново споразумение. Каталунците ще се опитат да действат бързо и да изпреварят този ход на Юнайтед.
									<iframe width="558" height="416" src="https://www.youtube.com/embed/cl_XRSEPyg8" frameborder="0" allowfullscreen></iframe>
								</p>
							</div>
						</a>
					</div>

					<div class="col-xs-6 col-sm-4">
						<a href="" class="animate" data-toggle="modal" data-target="#myModal22">
							<div class="news">
								<div class="img-figure">
									<div class="cat">футбол</div>
									<img src="./img/news/enrique-champ.jpg">
								</div>	

								<div class="title">
									<h4>Луис Енрике: Борихме се докрай, но сега трябва да поздравим шампиона</h4>
								</div>
								<p class="description">
									Треньорът на Барселона Луис Енрике похвали своите играчи след трудната победа с 4:2 над Ейбар. Каталунците получиха два гола и трябваше да правят пълен обрат, за да стигнат до успеха. Той обаче не се оказа достатъчен, за да донесе титлата на тима, който остава втори за сметка на вечния враг Реал Мадрид.

									“Мачът започна лошо и не успяхме да се съвземем бързо, след което стана доста трудно. Не бяхме достатъчно постоянни през сезона, особено в домакинските си мачове, и това ни изигра лоша шега. Отборът направи и много хубави неща през кампанията, но понякога границата между победа и загуба е доста малка. Искаше ми се да продължим да печелим титли, но е видно, че и други отбори искат същото и понякога е трудно да ги преборим. Днес знаехме, че не всичко зависи от нас. Въпреки това се борихме докрай, но сега остава единствено да поздравим новия шампион”, заяви Енрике.

									“Тръгвам си с много топли чувства към всеки от играчите, към клуба и към феновете. Преди слушах много пъти как Пеп хвали футболистите и сега разбирам защо. Няма как да постигнем всички тези успехи без тяхната помощ. Нещата можеха да се развият доста по-зле. Няма за какво да съжалявам. Постигнахме много хубави неща тук. Барселона е голям клуб и е нормално да е трудно. Късметлия съм, че бях тук като играч и като треньор. Не беше лесно и няма да бъде лесно и занапред за моя наследник”, допълни специалистът.
								</p>
							</div>
						</a>
					</div>
				</div>
				&nbsp;
				<!-- <aside class="hidden-xs col-sm-4">
						<table class="table-responsive table-bordered table-hover table-condensed col-xs-12 col-sm-12">
							<thead>
								<tr>
									<th>№</th>
									<th>Отбор</th>
									<th>Mачове</th>
									<th>Точки</th>
								</tr>
							</thead>
							<tbody>
								<tr class="success">
									<td>1</td>
									<td>Anna</td>
									<td>Anna</td>
									<td>1</td>
								</tr>
								<tr>
									<td>2</td>
									<td>Anna</td>
									<td>Anna</td>
									<td>1</td>
								</tr>
								<tr>
									<td>3</td>
									<td>Anna</td>
									<td>Anna</td>
									<td>1</td>
								</tr>
								<tr>
									<td>4</td>
									<td>Anna</td>
									<td>Anna</td>
									<td>1</td>
								</tr>
								<tr>
									<td>5</td>
									<td>Anna</td>
									<td>Anna</td>
									<td>1</td>
								</tr>
								<tr>
									<td>6</td>
									<td>Anna</td>
									<td>Anna</td>
									<td>1</td>
								</tr>
								<tr>
									<td>7</td>
									<td>Anna</td>
									<td>Anna</td>
									<td>1</td>
								</tr>
								<tr>
									<td>8</td>
									<td>Anna</td>
									<td>Anna</td>
									<td>1</td>
								</tr>
								<tr>
									<td>9</td>
									<td>Anna</td>
									<td>Anna</td>
									<td>1</td>
								</tr>
								<tr class="danger">
									<td>10</td>
									<td>Anna</td>
									<td>Anna</td>
									<td>1</td>
								</tr>
							</tbody>
						</table>
						
						<div class="row">
							<a href="/atletico-madrid-valencia-cf/DgbsLgb" class="featured-event featured__eventLink js-event-link" data-id="7127680" target="_blank" title="View match details">
								
								<div class="cell cell--justified u-p12 col-sm-12">
									<h3>Next game</h3>
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
											<br>
											<small>Today</small>
										</div>
									</div>
									<div class="cell__section col-sm-4">
										<div class="cell__content">
											<img src="./img/club_logo/valencia.png" class="img-responsive img--x48">
										</div>
										<div class="cell__content">Valencia</div>
									</div>
								</div>
							</a>
						</div>
				</aside> -->
			</div>
			<!-- Modal for Login -->
			<!-- <div class="modal fade" id="myModal" role="dialog">
				<div class="modal-dialog modal-content">
					Modal content
					<div id="signin" class="panel panel-default modal-body panel-heading">
						<strong>Sign in to continue</strong>
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<div class="panel-body">
							<form role="form" action="op.php" method="POST">
								<fieldset>
									<div class="row">
										<div class="center-block">
											<img class="profile-img"
												src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=120" alt="">
										</div>
									</div>
									<div class="row">
										<div class="col-sm-12 col-md-10  col-md-offset-1 ">
											<div class="form-group">
												<div class="input-group">
													<span class="input-group-addon">
														<i class="glyphicon glyphicon-user"></i>
													</span>
													<input class="form-control" placeholder="Username" name="loginname" type="text" autofocus>
												</div>
											</div>
											<div class="form-group">
												<div class="input-group">
													<span class="input-group-addon">
														<i class="glyphicon glyphicon-lock"></i>
													</span>
													<input class="form-control" placeholder="Password" name="password" type="password" value="">
												</div>
											</div>
											<div class="form-group">
												<input type="submit" name="submit_button" class="btn btn-lg btn-primary btn-block" value="Sign in">
											</div>
										</div>
									</div>
								</fieldset>
							</form>
						</div>
						<div class="panel-footer">
							Don't have an account! <a href="" data-toggle="modal" data-target="#myModalReg" onClick=""> Sign Up Here </a>
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						</div>
					</div>
				</div>
			</div> -->
			<div class="modal fade" id="myModal1" role="dialog">
				<div class="modal-dialog modal-content">
					<!-- Modal content-->
					<div class="panel-default modal-body panel-heading">
						<!-- <strong>Sign in to continue</strong> -->
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<div class="panel-body">
							<div class="row">
								<div class="img-figure">
									<div class="cat-modal">футбол</div>
									<img class="img-responsive" src="./img/news/pique.jpg">
								</div>	
							</div>
							<div class="title text-center">
								<h4><strong>Пике пак дразни "белите": Твърде рано е да говорите за превъзходство</strong></h4>
							</div>
							<hr>
							<p class="description">
								Един от най-големите дразнители за феновете на Реал Мадрид - Жерард Пике, пак намери начин да провокира големия съперник от “Сантиаго Бернабеу”. След втория пореден успех на отбора в Шампионската лига Кристиано Роналдо заяви, че Реал е навлязъл в нова ера на доминация. Пике обаче не е съгласен. “Твърде рано е за подобно твърдение”, убеден е защитникът на Барселона в интервю за "Minuto 0" по Movistar Plus.

								“Не мисля, че постигнатото от нас през изминалите сезони може да се сравнява с това, което в Мадрид спечелиха за последните две години, продължи испанският национал. - Заради нашите успехи в Реал отпразнуваха спечелването на Купата на Краля с обиколка из града. Когато ние направим такъв парад само заради една купа на Испания, то тогава вече ще може да се каже, че сме в период на превъзходство на Реал”. 

								Пике намеква за 2014 г., когато “лос бланкос” взеха Купата на Испания след 2:1 над каталунците и след това дефилириха с рейс из Мадрид. Бранителят е допълнително засегнат от големия враг, защото докато празнуваха титлата си от този сезон, играчите на Зинедин Зидан си позволиха да скандират "Пике, копеле".

								От 2006 г. насам Барселона завоюва около 30 трофея, в това число 7 титли на Примера, 6 Суперкупи на Испания, 4 крайни успеха в ШЛ, 3 Суперкупи на Европа, 5 Купи на Испания и 3 титли от Световното клубно първенство. 

								За същия период “кралете” записаха на своята сметка 3 Шампионски лиги, 4 титли в Ла Лига, 2 Купи на Испания, 2 Суперкупи на Испания, 2 Суперкупи на Европа и 2 Световни клубни първенства.
							</p>
							<hr>
							<button type="button" class="close" data-dismiss="modal">Затвори</button>
						</div>
					</div>
				</div>
			</div>
			<div class="modal fade" id="myModal2" role="dialog">
				<div class="modal-dialog modal-content">
					<!-- Modal content-->
					<div class="panel-default modal-body panel-heading">
						<!-- <strong>Sign in to continue</strong> -->
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<div class="panel-body">
							<div class="row">
								<div class="img-figure">
									<div class="cat-modal">футбол</div>
									<img class="img-responsive" src="./img/news/pep.jpg">
								</div>	
							</div>
							<div class="title text-center">
								<h4><strong>Пеп предупреди "белите": Барса винаги се завръща</strong></h4>
							</div>
							<hr>
							<p class="description">
								Бившият наставник на Барселона Джосеп Гуардиола честити на Реал Мадрид за триумфа в Кардиф, но е оптимист, че каталунците ще отговорят на предизвикателството. 

								“Поздравявам Реал - това е заслуженият първенец в Шампионската лига. Искам обаче да обърна внимание на Зинедин Зидан, че Барса винаги се завръща”, заяви Пеп по време на голф турнир, организиран от фондацията на Йохан Кройф.

								“Със Зизу си приличаме по това, че имаме еднакви прически, продължи Гуардиола. Като футболист той беше на много по-високо ниво от мен. Радвам се за него, защото сега той върши отлична работа”. 

								Испанецът беше запитан какво трябва да направят в Барселона, за да триумфират с ШЛ отново. “Няма какво толкова много да се стори, след като така или иначе си спечелил Купата на Испания и до последно си се борил за титлата в първенството, отговори Гуардиола. - Барса е най-силният отбор за последните 15 години. А това означава да печелиш всяка седмица. Никой друг в Примера дивисион не успя да постигне това, което тимът стори за въпросния период. В Европа обаче можеш да отпаднеш и само след един слаб двубой. Никой обаче не се съревновава като каталунците. Шампионската лига е по-къса надпревара, в която можеш да направиш осем силни срещи. В Ла Лига обаче говорим за всеки един кръг. Ето защо няма по-силен отбор от Барселона и той ще се завърне на върха.”

								Мениджърът на Манчестър Сити коментира и новия наставник на тима от “Камп Ноу” - Ернесто Валверде: “Той е много добър специалист и ми е добър приятел. Това беше отличен избор.”
							</p>
							<hr>
							<button type="button" class="close" data-dismiss="modal">Затвори</button>
						</div>
					</div>
				</div>
			</div>
			<div class="modal fade" id="myModal3" role="dialog">
				<div class="modal-dialog modal-content">
					<!-- Modal content-->
					<div class="panel-default modal-body panel-heading">
						<!-- <strong>Sign in to continue</strong> -->
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<div class="panel-body">
							<div class="row">
								<div class="img-figure">
									<div class="cat-modal">футбол</div>
									<img class="img-responsive" src="./img/news/messi.jpg">
								</div>	
							</div>
							<div class="title text-center">
								<h4><strong>Меси: Не познавам Валверде, но целта е да спечелим всичко</strong></h4>
							</div>
							<hr>
							<p class="description">
								Големият лидер и вдъхновител на Барселона Лионел Меси е в Пекин, за да представи новата сделка между Phoenix Group и Mediapro. Журналистите използваха събитието, за да се запознаят с мнението на аржентинеца за новия треньор на каталунците Ернесто Валверде. "Не познавам новия треньор, но ще се запознаем в следващите седмици", заяви Лео. 

								"Познавам го единствено от отбори, в които е работил. Не познавам начина му на работа. Целта обаче е да спечелим всичко", довери Ла Пулга. Меси изрази надежди, че Аржентина ще се класира на Мондиала в Русия.

								Мениджърът на Манчестър Сити коментира и новия наставник на тима от “Камп Ноу” - Ернесто Валверде: “Той е много добър специалист и ми е добър приятел. Това беше отличен избор.”
							</p>
							<hr>
							<button type="button" class="close" data-dismiss="modal">Затвори</button>
						</div>
					</div>
				</div>
			</div>
			<div class="modal fade" id="myModal4" role="dialog">
				<div class="modal-dialog modal-content">
					<!-- Modal content-->
					<div class="panel-default modal-body panel-heading">
						<!-- <strong>Sign in to continue</strong> -->
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<div class="panel-body">
							<div class="row">
								<div class="img-figure">
									<div class="cat-modal">футбол</div>
									<img class="img-responsive" src="./img/news/valverde3.jpg">
								</div>	
							</div>
							<div class="title text-center">
								<h4><strong>Валверде: Идеята ми е да се обърна още повече към стила на Барса</strong></h4>
							</div>
							<hr>
							<p class="description">
								Новият старши треньор на Барселона Ернесто Валверде официално подписа договор за 2+1 години с каталунския клуб. 53-годишният специалист не скри вълнението си от новото предизвикателство. "Благодарен съм за доверието в мен. За мен е огромна привилегия. Зная, че с това идва и голяма отговорност. Тук съм заедно с работата си, с идеите си, с които започвам този нов проект", заяви наставникът след подписването на контракта. 

								"Идвам от много специален клуб (Атлетик Билбао). Тук (в Барселона) искам да пренеса всичките си идеи. Моите предшественици в Барселона свършиха много работа и спечелиха много трофеи. Нямам никакви съмнения в правото на философията на Кройф", довери той.

								<img class="img-responsive" src="./img/news/valverde3-1.jpg" alt="">

								"Зная добре, че предишните треньори са работили тук с идеята да запазят стила на Барса. Аз добре зная какво представлява в Барселона, работил съм тук. Сега трябва отново да се адаптирам. Идеята ми е да се обърна още повече към стила на Барса", сподели новият треньор.

								След първоначалното си изказване Валверде даде и първата си пресконференция като треньор на "лос кулес". "Трябва да се приспособя към играта и стила на отбора, защото с тях тимът постигна много успехи. С каква система ще играя? Мисля, че отборът се справя добре и в 4-3-3, и в  3-4-3. Всичко е динамика, важното е да контролираме играта. Луис Енрике не се отдалечи от стила, Барса беше разпознаваем отбор", призна той.

								<img class="img-responsive" src="./img/news/valverde3-2.jpg" alt="">

								"За мен ще е страхотно преживяване да ръководя Меси, той най-добрият футболист в света. Меси сякаш е стигнал върха си, но винаги може да ни изненада. Надявам се да успея да му помогна. Аз лично ще се наслаждавам на работата с него. Той може да бъде решаваща фигура без значение от позицията си на терена", каза специалистът от Екстремадура. Запитан за изтичащия договор на Лео, Ернесто заяви: "Всички са настроени положителни, че той ще остане, аз също". 

								"Иниеста е много важен за отбора и за клуба. Сержи Роберто може да играе и като бек, и в центъра на терена. Алейш Видал също е част от отбора", довери наставникът на "синьо-червените". "Трябва да анализираме добре всичко. Играта на Барса винаги е била въз основа на колектива. Важно е тимът да играе балансирано. Нужно е да намерим точната форма, за да играем комфортно. (…) Да, тимът не спечели титлата тази година, но взе Купата на краля и Суперкупата на Испания. Луис Енрике нареди куп трофеи в последните години", призна Валверде.

								<img class="img-responsive" src="./img/news/valverde3-3.jpg" alt="">

								Запитан дали трябва да се дава почивка на триото Меси, Луис Суарес и Неймар, за да бъдат свежи в края на сезона, той отговори: "Трябва да преценим нещата. Наистина е важно в края на сезона да имаме шанс за всички трофеи, но и да сме в добра форма. Най-важното е в края да се борим на всички фронтове". 

								Това лято предстоят три издания на Ел Класико - два мача за Суперкупата на Испания и една контрола с Реал Мадрид. "Важно е да започнем силно. Суперкупата ни предлага възможност да започнем сезона с трофей", каза той. Валверде обърна внимание и на детско-юношеската школа: "Бих искал да имам силна връзка с школата. Там са момчетата, които могат да се изкачат в първия тим. Ще е по-хубаво дублиращият отбор да се изкачи в Сегунда. За мен е важно да знам за момчетата, които се развиват добре".
							</p>
							<hr>
							<button type="button" class="close" data-dismiss="modal">Затвори</button>
						</div>
					</div>
				</div>
			</div>
			<div class="modal fade" id="myModal5" role="dialog">
				<div class="modal-dialog modal-content">
					<!-- Modal content-->
					<div class="panel-default modal-body panel-heading">
						<!-- <strong>Sign in to continue</strong> -->
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<div class="panel-body">
							<div class="row">
								<div class="img-figure">
									<div class="cat-modal">футбол</div>
									<img class="img-responsive" src="./img/news/belerin.jpg">
								</div>	
							</div>
							<div class="title text-center">
								<h4><strong>Белерин се отдалечава от Барса, каталунците се насочват към играч на Челси</strong></h4>
							</div>
							<hr>
							<p class="description">
								Оставането на Арсен Венгер в Арсенал е лоша новина за Барселона, пишат испанските медии. Това намалява шансовете на Ектор Белерин да се присъедини към "лос блаугранас". Каталунският десен бек е много близък с френския специалист и евентуално напускане на мениджъра щеше да проправи път на бранителя към "Камп Ноу". Голямата трансферна сума също ще усложни трансфера. 

								План "Б" за ръководството на барселонци е друг испанец - Сесар Аспиликуета от Челси. 27-годишният наварски футболист наскоро подписа договор със "сините" до 2020 година. Очаква се трансферната цена за Аспи да е между 25 и 30 милиона евро.

								Шефовете на Барса задължително искат да привлекат десен защитник, за да се залага на Сержи Роберто в центъра на терена.
							</p>
							<hr>
							<button type="button" class="close" data-dismiss="modal">Затвори</button>
						</div>
					</div>
				</div>
			</div>
			<div class="modal fade" id="myModal6" role="dialog">
				<div class="modal-dialog modal-content">
					<!-- Modal content-->
					<div class="panel-default modal-body panel-heading">
						<!-- <strong>Sign in to continue</strong> -->
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<div class="panel-body">
							<div class="row">
								<div class="img-figure">
									<div class="cat-modal">футбол</div>
									<img class="img-responsive" src="./img/news/iniesta.jpg">
								</div>	
							</div>
							<div class="title text-center">
								<h4><strong>Иниеста: Валверде има качества да води Барса</strong></h4>
							</div>
							<hr>
							<p class="description">
								Капитанът на Барселона Андрес Иниеста коментира назначението на Ернесто Валверде за старши треньор на каталунския тим. "Валверде има качества да води Барса. Ако нямаше, нямаше да бъде избран", довери 33-годишният халф по време на събитие Save the Children. "През новия сезон ще се завърнем с нови сили и надежди. Убеден съм, че той ще бъде успешен за нас, ако правим нещата по правилния начин. Тук трябва да играеш добре и да печелиш трофеи", сподели номер 8 на "лос кулес". 

								"Чувствам се силен, позитивен и мотивиран, за да продължа да играя на високо ниво в следващите няколко години. Желанието ми е да остана в Барса. Винаги съм искал това, още от момента, в който пристигнах тук на 12-годишна възраст", каза още Иниеста.
							</p>
							<hr>
							<button type="button" class="close" data-dismiss="modal">Затвори</button>
						</div>
					</div>
				</div>
			</div>
			<div class="modal fade" id="myModal7" role="dialog">
				<div class="modal-dialog modal-content">
					<!-- Modal content-->
					<div class="panel-default modal-body panel-heading">
						<!-- <strong>Sign in to continue</strong> -->
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<div class="panel-body">
							<div class="row">
								<div class="img-figure">
									<div class="cat-modal">футбол</div>
									<img class="img-responsive" src="./img/news/valverde2.jpg">
								</div>	
							</div>
							<div class="title text-center">
								<h4><strong>Новият треньор: Искам да направя Барселона още по-велик</strong></h4>
							</div>
							<hr>
							<p class="description">
								Назначеният на мястото на Луис Енрике начело на Барселона Ернесто Валверде даде първото си интервю като наставник на клуба. По-рано днес 53-годишният специалист пристигна на “Камп Ноу” и говори пред клубния ТВ канал на каталунците, а официалното му представяне ще се състои утре (четвъртък). 

								“За мен е привилегия и шанс, че точно в този момент Барселона се сети за мен, предлагайки ми този пост. Посрещам този нов етап от кариерата си с голям ентусиазъм, но и като огромно предизвикателство. Ще се опитам да направя отбора още по-силен”, коментира Валверде. 

								“Иска ми се всичко да е наред и феновете да се наслаждават на играта ни, продължи наставникът. - Бих искал да виждам отбор, който се раздава на терена. Досега през годините запалянковците на Барселона се наслаждаваха на редица класни футболисти и треньори. Идеята ми е да продължа тази линия и, ако е възможно, отборът да стане още по-добър. Футболът е за това: да постигаш победи и да радваш хората, които се идентифицират с клуба и които се гордеят с него. Това искаме и дано да успеем да го постигнем.”

								Валверде ще подпише за 2+1 години.
								<iframe width="558" height="416" src="https://www.youtube.com/embed/-FStsoCljI4" frameborder="0" allowfullscreen></iframe>
							</p>
							<hr>
							<button type="button" class="close" data-dismiss="modal">Затвори</button>
						</div>

					</div>
				</div>
			</div>
			<div class="modal fade" id="myModal8" role="dialog">
				<div class="modal-dialog modal-content">
					<!-- Modal content-->
					<div class="panel-default modal-body panel-heading">
						<!-- <strong>Sign in to continue</strong> -->
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<div class="panel-body">
							<div class="row">
								<div class="img-figure">
									<div class="cat-modal">футбол</div>
									<img class="img-responsive" src="./img/news/valverde1.jpg">
								</div>	
							</div>
							<div class="title text-center">
								<h4><strong>Официално: Барселона има нов старши треньор</strong></h4>
							</div>
							<hr>
							<p class="description">
								Ръководството на Барселона взе решение кой да наследи Луис Енрике на треньорския пост на "Камп Ноу". Само часове след като отпадна възможността досегашният помощник на Лучо Хуан Карлос Унсуе да поеме кормилото на каталунците и той отпътува в посока Селта, шефовете на "лос кулес" окончателно се спряха на Ернесто Валверде, чийто договор ще бъде за срок от 2+1 години. Бившият наставник на Атлетик Билбао ще вземе в щаба си и двамата си най-доверени хора, с които работи и при баските – Йоан Аспиасу, който ще му бъде първи асистент, както и Хосе Антонио Посанко, чиято отговорност ще бъде физическата подготовка.

								<img class="img-responsive" src="./img/news/valverde1-1.jpg">

								Триото работи неизменно заедно от сезон 2008/2009 насам, когато изведе Олимпиакос до титлата в Гърция. 53-годишният Валверде бе основен фаворит за следващ треньор на Барселона, макар през сезона да бяха спрягани и имената на Еусебио Сакристан и Роналд Куман. Той има два сезона в Барса от годините си на професионален футболист и между 1988 и 1990 година печели Купата на краля и КНК. Като треньор пък е водил градския съперник Еспаньол, както и Виляреал, Валенсия, Олимпиакос, Атлетик Билбао и Билбао Атлетик – втория тим на "лъвовете" от Биская. Официалното представяне на Ернесто Валверде ще се състои в четвъртък.
							</p>
							<hr>
							<button type="button" class="close" data-dismiss="modal">Затвори</button>
						</div>

					</div>
				</div>
			</div>
			<div class="modal fade" id="myModal19" role="dialog">
				<div class="modal-dialog modal-content">
					<!-- Modal content-->
					<div class="panel-default modal-body panel-heading">
						<!-- <strong>Sign in to continue</strong> -->
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<div class="panel-body">
							<div class="row">
								<div class="img-figure">
									<div class="cat-modal">футбол</div>
									<img class="img-responsive" src="./img/news/enrique-cirk.jpg">
								</div>	
							</div>
							<div class="title text-center">
								<h4><strong>Луис Енрике: Това е цирк, но няма да кажа кой е клоунът</strong></h4>
							</div>
							<hr>
							<p class="description">
								Старши треньорът на Барселона Луис Енрике даде последната си пресконференция преди мач на каталунците. Утре вечер Лучо ще има шанса да спечели Купата на краля за трети пореден сезон. "Алавес е отбор във форма, който направи забележителен сезон. Възползват се много добре от вертикалната игра с Дейверсон и добрите действия по фланговете. На Алавес доста трудно се вкарват попадения", заяви специалистът. 

								"Много пъти съм бъркал. В един случай съм бил точен, в друг - не. Без значение какво правиш винаги има някой, който те критикува. В спомените ми ще остане ежедневната работа. Не искам да пазя негативни моменти", довери той. 

								Луис Енрике си тръгва след края на сезона, но си оставя вратичка за някогашно завръщане на "Камп Ноу". "Ако се появя тук на 10 юли, ще ви изненадам. Може да докарам и някой друг инфаркт. Никога не казвай никога. Аз съм млад, симпатичен, благ човек… Защо да не се върна?", попита риторично Лучо. 

								Запитан за отношенията си с журналистите, Луис Енрике беше доста описателен: "Това е цирк, но няма да кажа кой е клоунът. Залата за пресконференции не е най-приятното ми място. Това е моят стил и няма да се променям на 47 години. Опитвам се да бъда себе си без да обиждам никого".
								<img class="img-responsive" src="./img/news/enrique-cirk1.jpg" alt="">
								Битката за трофея на "Висенте Калдерон" е утре от 22,30 часа.
							</p>
							<hr>
							<button type="button" class="close" data-dismiss="modal">Затвори</button>
						</div>

					</div>
				</div>
			</div>
			<div class="modal fade" id="myModal20" role="dialog">
				<div class="modal-dialog modal-content">
					<!-- Modal content-->
					<div class="panel-default modal-body panel-heading">
						<!-- <strong>Sign in to continue</strong> -->
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<div class="panel-body">
							<div class="row">
								<div class="img-figure">
									<div class="cat-modal">футбол</div>
									<img class="img-responsive" src="./img/news/messi-boateng.jpg">
								</div>	
							</div>
							<div class="title text-center">
								<h4><strong>Боатенг: Срещу Кристиано ми е по-лесно, отколкото срещу Меси</strong></h4>
							</div>
							<hr>
							<p class="description">
								Световният шампион Жером Боатенг коментира какво за него е да се изправи срещу считаните за двама от най-силните футболисти Кристиано Роналдо и Лионел Меси. “Срещу тях ми е най-сложно, започна защитникът на Байерн (Мюнхен) пред Bild. - Бих включил в списъка още Карим Бензема, Еден Азар и Неймар. На Меси е направо невъзможно да се противопоставиш. Срещу Роналдо ми е по-лесно, защото той разчита и на физическата си мощ. В последно време Кристиано залага по-малко на дрибъла, а гледа да се съсредоточи към завършването на атаките. Португалецът има невероятната способност да се оказва на нужното място в нужното време”.

								Германският национал увери, че не планира да напусна Байерн, каквито информации се появиха преди седмици.
								<iframe width="558" height="416" src="https://www.youtube.com/embed/7DFbKrqemls" frameborder="0" allowfullscreen></iframe>
							</p>
							<hr>
							<button type="button" class="close" data-dismiss="modal">Затвори</button>
						</div>

					</div>
				</div>
			</div>
			<div class="modal fade" id="myModal21" role="dialog">
				<div class="modal-dialog modal-content">
					<!-- Modal content-->
					<div class="panel-default modal-body panel-heading">
						<!-- <strong>Sign in to continue</strong> -->
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<div class="panel-body">
							<div class="row">
								<div class="img-figure">
									<div class="cat-modal">футбол</div>
									<img class="img-responsive" src="./img/news/herrera.jpg">
								</div>	
							</div>
							<div class="title text-center">
								<h4><strong>Валверде иска най-добрия играч на Манчестър Юнайтед в Барселона</strong></h4>
							</div>
							<hr>
							<p class="description">
								Бъдещият наставник на Барселона Ернесто Валведре иска първото му попълнение на "Камп Ноу" да бъде халфът на Манчестър Юнайтед Андер Ерера, който наскоро бе избран от феновете за най-добър играч на "червените дяволи" през изминалия сезон. Според каталунския ежедневник Sport 53-годишният специалист вече е обсъдил трансферните си планове с ръководството на Барса и го е уведомил, че иска Ерера в отбора си. Двамата работиха заедно един сезон в Атлетик Билбао, преди играчът да премине в Манчестър Юнайтед. 
								<img src="./img/news/herrera1.jpg" alt="" class="img-responsive">
								Настоящият договор на 27-годишния Ерера изтича след година, но се очаква още през това лято от клуба да му предложат ново споразумение. Каталунците ще се опитат да действат бързо и да изпреварят този ход на Юнайтед.
								<iframe width="558" height="416" src="https://www.youtube.com/embed/cl_XRSEPyg8" frameborder="0" allowfullscreen></iframe>
							</p>
							<hr>
							<button type="button" class="close" data-dismiss="modal">Затвори</button>
						</div>

					</div>
				</div>
			</div>
			<div class="modal fade" id="myModal22" role="dialog">
				<div class="modal-dialog modal-content">
					<!-- Modal content-->
					<div class="panel-default modal-body panel-heading">
						<!-- <strong>Sign in to continue</strong> -->
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<div class="panel-body">
							<div class="row">
								<div class="img-figure">
									<div class="cat-modal">футбол</div>
									<img class="img-responsive" src="./img/news/enrique-champ.jpg">
								</div>	
							</div>
							<div class="title text-center">
								<h4><strong>Луис Енрике: Борихме се докрай, но сега трябва да поздравим шампиона</strong></h4>
							</div>
							<hr>
							<p class="description">
								Треньорът на Барселона Луис Енрике похвали своите играчи след трудната победа с 4:2 над Ейбар. Каталунците получиха два гола и трябваше да правят пълен обрат, за да стигнат до успеха. Той обаче не се оказа достатъчен, за да донесе титлата на тима, който остава втори за сметка на вечния враг Реал Мадрид.

								“Мачът започна лошо и не успяхме да се съвземем бързо, след което стана доста трудно. Не бяхме достатъчно постоянни през сезона, особено в домакинските си мачове, и това ни изигра лоша шега. Отборът направи и много хубави неща през кампанията, но понякога границата между победа и загуба е доста малка. Искаше ми се да продължим да печелим титли, но е видно, че и други отбори искат същото и понякога е трудно да ги преборим. Днес знаехме, че не всичко зависи от нас. Въпреки това се борихме докрай, но сега остава единствено да поздравим новия шампион”, заяви Енрике.
								
								“Тръгвам си с много топли чувства към всеки от играчите, към клуба и към феновете. Преди слушах много пъти как Пеп хвали футболистите и сега разбирам защо. Няма как да постигнем всички тези успехи без тяхната помощ. Нещата можеха да се развият доста по-зле. Няма за какво да съжалявам. Постигнахме много хубави неща тук. Барселона е голям клуб и е нормално да е трудно. Късметлия съм, че бях тук като играч и като треньор. Не беше лесно и няма да бъде лесно и занапред за моя наследник”, допълни специалистът.
							</p>
							<hr>
							<button type="button" class="close" data-dismiss="modal">Затвори</button>
						</div>

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
				<img src="./img/youtube/yt4.png" width="40" height="40">
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

	<!-- Countdown JS -->
	<?php echo '<script'; ?>
>
		// Set the date we're counting down to
		var countDownDate = new Date("May 19, 2017 21:45:00").getTime();

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
		    document.getElementById("demo").innerHTML = days + "d " + hours + "h "
		    + minutes + "m " + seconds + "s ";
		    
		    // If the count down is over, write some text 
		    if (distance < 0) {
		        clearInterval(countdownfunction);
		        document.getElementById("demo").innerHTML = "EXPIRED";
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

	<!-- first Carousel -->
	<!-- <?php echo '<script'; ?>
>
		$(document).ready(function(){
	    
			var clickEvent = false;
			$('#myCarousel').carousel({
				interval:   4000	
			}).on('click', '.list-group li', function() {
					clickEvent = true;
					$('.list-group li').removeClass('active');
					$(this).addClass('active');		
			}).on('slid.bs.carousel', function(e) {
				if(!clickEvent) {
					var count = $('.list-group').children().length -1;
					var current = $('.list-group li.active');
					current.removeClass('active').next().addClass('active');
					var id = parseInt(current.data('slide-to'));
					if(count == id) {
						$('.list-group li').first().addClass('active');	
					}
				}
				clickEvent = false;
			});
		})
	
		$(window).load(function() {
		    var boxheight = $('#myCarousel .carousel-inner').innerHeight();
		    var itemlength = $('#myCarousel .item').length;
		    var triggerheight = Math.round(boxheight/itemlength+1);
			$('#myCarousel .list-group-item').outerHeight(triggerheight);
		});
	<?php echo '</script'; ?>
> -->

	<!-- second carousel -->
	<?php echo '<script'; ?>
>
		$(document).ready( function() {
		    $('#myCarousel').carousel({
		        interval:   4000
			});
			
			var clickEvent = false;
			$('#myCarousel').on('click', '.nav a', function() {
					clickEvent = true;
					$('.nav li').removeClass('active');
					$(this).parent().addClass('active');		
			}).on('slid.bs.carousel', function(e) {
				if(!clickEvent) {
					var count = $('.nav').children().length -1;
					var current = $('.nav li.active');
					current.removeClass('active').next().addClass('active');
					var id = parseInt(current.data('slide-to'));
					if(count == id) {
						$('.nav li').first().addClass('active');	
					}
				}
				clickEvent = false;
			});
		});
	<?php echo '</script'; ?>
>
</body>
</html><?php }
}
