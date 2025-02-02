<?php
/* Smarty version 3.1.29, created on 2019-04-19 21:23:17
  from "C:\xampp\htdocs\BarcaTrain\history.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5cba20250aed43_97467700',
  'file_dependency' => 
  array (
    'f3d8c38ad2bb970f18244967b20d190ed400c306' => 
    array (
      0 => 'C:\\xampp\\htdocs\\BarcaTrain\\history.html',
      1 => 1555264349,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cba20250aed43_97467700 ($_smarty_tpl) {
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
				<a href="#" id="headerLogonew" class="headerLogonew">
					<img src="./img/mesqueunclub.png">
				</a>
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
								<img src="C:/xampp/htdocs/BarcaTrain/img/barcelona.png" width="50" height="50">
							</a>
						</div>
						<div class="collapse navbar-collapse" id="myNavbar">
							<ul class="nav navbar-nav">
								<li><a href="#">Новини</a></li>
								<li><a href="#">Програма</a></li>
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
										<a href="#">Състав</a>
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
									<a href="signup.html"><span class="glyphicon glyphicon-user"></span> Sign Up</a>
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
			<div class="container-fluid">
				<div class="row">
					<div id="title">
						<h3>История на ФК Барселона</h3>
					</div>
					<hr>
					<div id="content" class="col-sm-12">
						<p>
							<img src="./img/barca_old_logo.png" alt="Barca old logo" class="img-responsive" width="300" height="300">
							Футболен клуб Барселона води началото си от датата 22 октомври 1899 г., когато Жоан Гампер – един от футболистите-пионери в континентална Европа – публикува обява за организиране на футболни мачове в списанието “Лос Депортес”. На 29 ноември същата година клубът е официално създаден от Гампер и още 11 отзовали се на обявата съоснователи. За първи президент на клуба е избран англичанинът Гуалтери Уайлд и още в първия си мач новосфмормираният клуб облича любимия синьо-червен екип, запазил се до ден днешен.  През 1902 г. отборът печели първия от мнoгoбройните си трофеи – Копа Макая (футболното първенство на Каталуня), както и достига финал при първото си участие в турнира за Купата на Краля. През същата година Барселона побеждава с 3-1 Реал Мадрид в първото официално Ел Класико. Между 1908 и 1925 г. начело на клуба е основателят му Жоан Гампер, като под неговото ръководство отборът изживява златна ера (11 шампионатни титли на Каталуня, шест Купи на Краля и четири Купи на Пиринеите). Клубът вече надвишава 20 000 члена и се стаблизира финансово – дотолкова, че да финансира сам нов стадион “Лес Кортс”, на който се премества през 1922 г. Първият шампионат на Испания е завоюван в сезон 1928-1929 г. – само 2 години след като клубът става официално професионален. По същото време клубът се утвърждава като обединителен символ на Каталуня и каталунците в борбата им с диктатурата на генерал Примо де Ривера (а по-късно и с тази на Франко).
						</p>
						<p>
							Четиридесетте години на 20 век са драматични за клуба. През 1943 г. Барселона губи от Реал Мадрид в полуфинал за Купата на Генералисимус Франко след намесата на директора на сигурността на Франко, който напомня на играчите на Барса, че имат възможността да играят единствено и само заради “щедростта на режима”. Въпреки тежката политическа ситуация, в която е поставен, клубът печели няколко важни трофея в края на периода, включително Копа Латина – трофея предшественик на Купата на европейските шампиони – през 1949 г. след победа срещу Спортин Лисабон с 2-1. Веднъж вече обединил каталунците в борбата им с диктатурата на Примо де Ривера, през четиридесетте години клубът отново играе водеща роля в съпротивата срещу режима на Франко.  Стадионът на Барса “Лес Кортс” е едно от малкото места в Испания, където има свобода на словото, включително на използването на каталунски език, а самият клуб се превръща в най-ефективния посланник на Каталуня пред света. Съвсем логично, години след това тази роля на клуба е синтезирана от тогавашния президент на Барса Нарсис де Карера в думите “повече от клуб” (на каталунски: més que un club).
						</p>
						<p>
							<img src="./img/barca_old_team.jpg" alt="Barca old team" class="img-responsive" width="500" height="300">
							През юни 1950 г. клубът успява да привлече Ласло Кубала – нападател от словашко-унгарски произход, който се превръща в голямата звезда на отбора. В първия си официален сезон с клуба (1951-52) Кубала вкарва цели 26 гола в 19 мача. В един от тези мачове Кубала поставя немислим рекорд, който никoй не е успял да задмине – нападателят вкарва 7 гола при победата с 9-0 срещу Спортинг Хихон. Между 1951 и 1953 г. Барса печели практически всички възможни трофеи. Завинаги в историята на отбора остава сезон 1951-52 г. или така наречения “Сезон на петте купи”, в който Барса отнася вкъщи Ла Лига, Купата на Краля, Копа Латина, както и купите Ева Дуарте и Мартини Роси. Клубът става известен със своето магическо нападение в състав Басора, Сесар, Вила, Кубала и Манчо. Членската маса на Барса достига 38 000 души, като през 1953 г. са проведени първите избори за президент на клуба от членовете му (socios) – една удивително демократична процедура за времето си. Стремителното израстване на клуба налага проектиране и на нов по-голям стадион.  Така през септември 1957 г. e официално открит домът на Барса Камп Ноу – най-големият стадион в Европа със своя актуален капацитет от 99,354 места.
						</p>
						<p>
							На новия си стадион отборът печели две последователни титли на Испания през 1959 и 1960 година, както и става двукратен носител на предшественика на Купата на УЕФА и Лига Европа – Купата на панаирните градове (през 1958 и 1960 г.) През тези успешни години начело на отбора е геният Еленио Ерера, а в клуба играят редица легенди на световния футбол. Сред тях са двама от поколението на вълшебните маджари – Шандор Кочиш и Золтан Цибор, рекордьорът по голове в един мач за бразилския национален отбор  Еваристо, както и най-добрият футболист на Европа за 1960 г. Луис Суарес. През 1966 г. е завоювана още една Купа на панаирните градове и така Барса се превръща в клуба с най-много трофеи в съществуването на този турнир.
						</p>
						<p>
							За Барса седемдесетте години се помнят с две големи събития. Първото е пристигането на Йохан Кройф в отбора през 1973 г. Холандският нападател става бързо идол на феновете на Барса и символ на тоталния футбол. С екипа на клуба Кройф печели Златната топка през 1974 г., а също така вкарва своя най-известен гол, който испанските медии наричат “невъзможен”, а авторът му “магьосник” и “летящият холандец” (видео: <a href="http://www.youtube.com/watch?v=5IVYTytz1r8">http://www.youtube.com/watch?v=5IVYTytz1r8</a>). С брилянтния Кройф в нападение отборът постига една от най-паметните победи над Реал Мадрид на собствения му стадион (5-0), като това второ велико събитие за клуба е изработено на датата 17 февруари 1974 г.
						</p>
						<p>
							С края на диктатурата на Франко отборът и целият спортен живот на Иберийския полуостров изживяват ренесанс. През 1978 г. е избран нов президент на Барса – Хосеп Луис Нуньес, който се превръща и в най-дълго служилия ръководител на клуба (до 2000 г.). През 1979 г. отборът печели първата си Купа на носителите на национални купи в Бaзел, като събитието е запомнено с изключителната подкрепа от страна на феновете на отбора. Цели 30 000 пропътуват разстоянието до Швейцaрия за да видят европейския триумф на отбора. Оргомната маса от привърженици на отбора се потвърждава и от броя членове на клуба (socios), който минава котата 100 000 през осемдесетте години. През същото десетилетие в клуба играят мнозина  от звездите на световния футбол като Бернд Шустер, Гари Линекер и великата “десетка” Диего Марадона. Особено емоционален е шампионатът на Испания спечелен през 1985 г., когато един от най-добрите вратари в историята на отбора Франсиско Урути спасява решаваща дузпа в последните минути на мача с Валядолид. Радостта от титлата през 1985 г. е голяма, но след нея клубът преживява трудни моменти до края на десетилетието.
						</p>
						<p>
							<img src="./img/barca_old_team1.jpg" alt="Barca old team 1" class="img-responsive" width="500" height="300">
							Една от най-важните години за клуба е 1988 – годината, когато президентът Нуньес решава да се довери на каталунеца по дух и легенда на Барса Йохан Кройф, който поема треньорския пост на отбора. От тази година започва ерата известна като Dream Team – период, в който отборът доминира тотално в Испания и изумява Европа с уникалния си стил на игра. Клубът печели рекорден брой титли на Испания поред – цели четири между 1991 и 1994 г. Периодът е особено специален за българите, тъй като незаменима част от звездната Бaрса е Христо Стоичков, който се превръща в любимец на феновете и донася още една Златна топка за футболист на клуба (1994 г.). В отбора играе съзвездие от най-добрите испански и световни футбоилсити за времето си като Хосеп Гуардиола, Хосе Мари Бакеро, Чики Бегиристайн, Михаел Лаудруп, Роналд Куман, както и разбира се неповторимият Ромарио. Гениалният бразилски нападател поставя рекорд за най-много хеттрика в един сезон (5), един от които при фамозното 5-0 срещу Реал Мадрид през сезон 1993/1994 г. (видео: <a href="http://www.youtube.com/watch?v=WhsB8qgp1tI&feature=related">http://www.youtube.com/watch?v=WhsB8qgp1tI&feature=related</a> ). Над всичко в тази славна за отбора епоха стои нощта на 20 май 1992 г. На тази дата в един от храмовете на световния футбол – Уембли – Барселона побеждава Сампдоря с 1-0 и печели първата Купа на европейските шампиони в историята си. Голът на радостта е дело на Роналд Куман, който изпълнява своя марков пряк свободен удар и донася най-сетне така заслужената купа в Каталуня. (видео: <a href="http://www.youtube.com/watch?v=7YaqOibFjog">http://www.youtube.com/watch?v=7YaqOibFjog</a>).
						</p>
					</div>
				</div>
			</div>
			<!-- Modal for Login -->
			<div class="modal fade" id="myModal" role="dialog">
				<div class="modal-dialog modal-content">
					<!-- Modal content-->
					<div id="signin" class="panel panel-default modal-body panel-heading">
						<strong>Sign in to continue</strong>
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<div class="panel-body">
							<form role="form" action="#" method="POST">
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
												<input type="submit" class="btn btn-lg btn-primary btn-block" value="Sign in">
											</div>
										</div>
									</div>
								</fieldset>
							</form>
						</div>
						<div class="panel-footer">
							Don't have an account! <a href="signup.html" onClick=""> Sign Up Here </a>
							<!-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->
						</div>
					</div>
				</div>
			</div>
			<!-- Modal for Registration -->
			<div class="modal fade" id="myModalReg" role="dialog">
				<div class="modal-dialog modal-content">
					<!-- Modal content-->
					<div id="signin" class="panel panel-default modal-body panel-heading">
						<strong>Registration Form</strong>
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<div class="panel-body">
							<form role="form" action="register.php" method="POST">
								<fieldset>
									<div class="row">
										<!-- <div class="validateForm col-sm-12 col-md-10 col-md-offset-1">
											<div class="form-group">
												<label class="control-label">First Name</label>
												<input type="text" class="form-control firstName" id="firstName" autofocus/>
											</div>
											<div class="form-group">
												<label class="control-label">Last Name</label>
												<input type="text" class="form-control lastName" id="lastName" />
											</div>
											<div class="form-group">
												<label class="control-label">Username</label>
												<input type="text" class="form-control username" id="username" />
											</div>
											<div class="form-group">
												<label class="control-label">Password</label>
												<input type="password" class="form-control password" id="password" />
											</div>
											<div class="form-group">
												<label class="control-label">Confirm Password</label>
												<input type="password" class="form-control cpassword" id="cpassword" />
											</div>
											<div class="form-group">
												<input type="submit" class="btn btn-lg btn-primary btn-block col-sm-6" value="Register">
												<input type="reset" class="btn btn-lg btn-primary btn-block col-sm-6" value="Clear form">
											</div>
										</div> -->
										<div class="validateForm col-sm-12 col-md-10 col-md-offset-1">
											<!-- <div class="form-group">
												<label class="control-label">Your Name</label>
												<input type="text" class="form-control name" id="name" autofocus/>
											</div>
											<div class="form-group">
												<label class="control-label">Your Email</label>
												<input type="text" class="form-control email" id="email" />
											</div>
											<div class="form-group">
												<label class="control-label">Username</label>
												<input type="text" class="form-control username" id="username" />
											</div>
											<div class="form-group">
												<label class="control-label">Password</label>
												<input type="password" class="form-control password" id="password" />
											</div>
											<div class="form-group">
												<label class="control-label">Confirm Password</label>
												<input type="password" class="form-control cpassword" id="cpassword" />
											</div> 
											<div class="form-group">
												<label for="name" class="control-label">Your Name</label>
												<div class="cols-sm-10">
													<div class="input-group">
														<span class="input-group-addon"><i class="glyphicon glyphicon-user" aria-hidden="true"></i></span>
														<input type="text" class="form-control" name="name" id="name"  placeholder="Enter your Name"/>
													</div>
												</div>
											</div>-->
											<div class="form-group">
												<label for="name" class="control-label">Username</label>
												<div class="cols-sm-10">
													<div class="input-group">
														<span class="input-group-addon"><i class="glyphicon glyphicon-user" aria-hidden="true"></i></span>
														<input type="text" class="form-control" name="username" id="username"  placeholder="Enter your Username"/>
													</div>
												</div>
											</div>
											<div class="form-group">
												<label for="name" class="control-label">Your Email</label>
												<div class="cols-sm-10">
													<div class="input-group">
														<span class="input-group-addon"><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i></span>
														<input type="text" class="form-control" name="email" id="email"  placeholder="Enter your Email"/>
													</div>
												</div>
											</div>
											<div class="form-group">
												<label for="name" class="control-label">Password</label>
												<div class="cols-sm-10">
													<div class="input-group">
														<span class="input-group-addon"><i class="glyphicon glyphicon-lock" aria-hidden="true"></i></span>
														<input type="password" class="form-control" name="password" id="password"  placeholder="Enter your Password"/>
													</div>
												</div>
											</div>
											<div class="form-group">
												<label for="name" class="control-label">Confirm Password</label>
												<div class="cols-sm-10">
													<div class="input-group">
														<span class="input-group-addon"><i class="glyphicon glyphicon-lock" aria-hidden="true"></i></span>
														<input type="password" class="form-control" name="cpassword" id="cpassword"  placeholder="Confirm your Password"/>
													</div>
												</div>
											</div>
											<div class="form-group col-sm-12">
												<input type="submit" id="buttonreg" name="buttonregg" class="btn btn-lg btn-primary col-sm-5 col-sm-offset-1" value="Register">
												<input type="reset" class="btn btn-lg btn-primary col-sm-5" value="Clear form">
											</div>
										</div>
									</div>
								</fieldset>
							</form>
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
	<?php echo '<script'; ?>
 src='https://www.google.com/recaptcha/api.js'><?php echo '</script'; ?>
>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<?php echo '<script'; ?>
 src="js/bootstrap.min.js"><?php echo '</script'; ?>
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
</body>
</html><?php }
}
