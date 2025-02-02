<?php
/* Smarty version 3.1.29, created on 2017-06-17 11:03:08
  from "C:\xampp\htdocs\BarcaTrain\standings.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5944f04c9ed118_74621976',
  'file_dependency' => 
  array (
    '80f41e9c6789f891592034880446bc127836b479' => 
    array (
      0 => 'C:\\xampp\\htdocs\\BarcaTrain\\standings.html',
      1 => 1497660631,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5944f04c9ed118_74621976 ($_smarty_tpl) {
?>
<!DOCTYPE html>

<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Responsive Bootstrap Site</title>
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

		.table{
		  box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23);
		  transition: all 0.2s ease-in-out;
		  margin-top: 10px;
		  margin-left: -15px;
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
		#leag-europe-qualific {
			background-color: rgb(195, 217, 178);
		}
		#champ-leag-qualific {
			background-color: rgb(202, 231, 202);
		}
		#tabl-head {
			background-color: darkgrey;
		}

		.legend {
			margin-left: -15px;
		}

		h4 {
			margin-left: -15px;
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
			<h3>Примера Дивисион - Класиране</h3>
			<hr>
			<div class="col-sm-8 col-sm-offset-2">
				<table class="table table-responsive table-bordered table-hover table-condensed">
					<thead>
					  <tr>
					    <th id="tabl-head">№</th>
					    <th id="tabl-head">Отбор</th>
					    <th id="tabl-head">Мачове</th>
					    <th id="tabl-head">Победи</th>
					    <th id="tabl-head">Равенства</th>
					    <th id="tabl-head">Загуби</th>
					    <th id="tabl-head">Голова разлика</th>
					    <th id="tabl-head">Точки</th>
					  </tr>
					</thead>
					<tbody>
					  <tr class="success">
					  	<td id="champ-leag">1</td>
					    <td>Реал Мадрид</td>
					    <td>38</td>
					    <td>29</td>
					    <td>6</td>
					    <td>3</td>
					    <td>106/41 (+65)</td>
					    <td>93</td>
					  </tr>
					  <tr class="success">
					  	<td id="champ-leag">2</td>
					    <td>Барселона</td>
					    <td>38</td>
					    <td>28</td>
					    <td>6</td>
					    <td>4</td>
					    <td>116/37 (+79)</td>
					    <td>90</td>
					  </tr>
					  <tr class="success">
					    <td id="champ-leag">3</td>
					    <td>Атлетико Мадрид</td>
					    <td>38</td>
					    <td>23</td>
					    <td>9</td>
					    <td>6</td>
					    <td>70/27 (+43)</td>
					    <td>78</td>
					  </tr>
					  <tr>
					    <td id="champ-leag-qualific">4</td>
					    <td>Севиля</td>
					    <td>38</td>
					    <td>21</td>
					    <td>8</td>
					    <td>6</td>
					    <td>69/49 (+20)</td>
					    <td>72</td>
					  </tr>
					  <tr>
					    <td id="leag-europe">5</td>
					    <td>Виляреал</td>
					    <td>38</td>
					    <td>19</td>
					    <td>10</td>
					    <td>9</td>
					    <td>56/33 (+23)</td>
					    <td>67</td>
					  </tr>
					  <tr>
					    <td id="leag-europe-qualific">6</td>
					    <td>Реал Сосиедад</td>
					    <td>38</td>
					    <td>19</td>
					    <td>7</td>
					    <td>12</td>
					    <td>59/53 (+6)</td>
					    <td>64</td>
					  </tr>
					  <tr>
					    <td>7</td>
					    <td>Атлетик Билбао</td>
					    <td>38</td>
					    <td>19</td>
					    <td>6</td>
					    <td>13</td>
					    <td>53/43 (+10)</td>
					    <td>63</td>
					  </tr>
					  <tr>
					    <td>8</td>
					    <td>Еспаньол</td>
					    <td>38</td>
					    <td>15</td>
					    <td>11</td>
					    <td>12</td>
					    <td>49/50 (-1)</td>
					    <td>56</td>
					  </tr>
					  <tr>
					    <td>9</td>
					    <td>Алавес</td>
					    <td>38</td>
					    <td>14</td>
					    <td>13</td>
					    <td>11</td>
					    <td>41/43 (-2)</td>
					    <td>55</td>
					  </tr>
					  <tr>
					    <td>10</td>
					    <td>Ейбар</td>
					    <td>38</td>
					    <td>15</td>
					    <td>9</td>
					    <td>14</td>
					    <td>56/51 (+5)</td>
					    <td>54</td>
					  </tr>
					  <tr>
					    <td>11</td>
					    <td>Малага</td>
					    <td>38</td>
					    <td>12</td>
					    <td>10</td>
					    <td>16</td>
					    <td>49/55 (-6)</td>
					    <td>46</td>
					  </tr>
					  <tr>
					    <td>12</td>
					    <td>Валенсия</td>
					    <td>38</td>
					    <td>13</td>
					    <td>7</td>
					    <td>18</td>
					    <td>56/65 (-9)</td>
					    <td>46</td>
					  </tr>
					  <tr>
					    <td>13</td>
					    <td>Селта Виго</td>
					    <td>38</td>
					    <td>13</td>
					    <td>6</td>
					    <td>19</td>
					    <td>53/69 (-16)</td>
					    <td>45</td>
					  </tr>
					  <tr>
					    <td>14</td>
					    <td>Лас Палмас</td>
					    <td>38</td>
					    <td>10</td>
					    <td>9</td>
					    <td>19</td>
					    <td>53/74 (-21)</td>
					    <td>39</td>
					  </tr>
					  <tr>
					    <td>15</td>
					    <td>Реал Бетис</td>
					    <td>38</td>
					    <td>10</td>
					    <td>9</td>
					    <td>19</td>
					    <td>41/64 (-23)</td>
					    <td>39</td>
					  </tr>
					  <tr>
					    <td>16</td>
					    <td>Депортиво Ла Коруня</td>
					    <td>38</td>
					    <td>8</td>
					    <td>12</td>
					    <td>18</td>
					    <td>43/61 (-18)</td>
					    <td>36</td>
					  </tr>
					  <tr>
					    <td>17</td>
					    <td>Леганес</td>
					    <td>38</td>
					    <td>8</td>
					    <td>11</td>
					    <td>19</td>
					    <td>36/55 (-19)</td>
					    <td>35</td>
					  </tr>
					  <tr class="danger">
					    <td id="danger-zone">18</td>
					    <td>Спортинг Хихон</td>
					    <td>38</td>
					    <td>7</td>
					    <td>10</td>
					    <td>21</td>
					    <td>42/72 (-30)</td>
					    <td>31</td>
					  </tr>
					  <tr class="danger">
					    <td id="danger-zone">19</td>
					    <td>Осасуна</td>
					    <td>38</td>
					    <td>4</td>
					    <td>10</td>
					    <td>24</td>
					    <td>40/94 (-54)</td>
					    <td>22</td>
					  </tr>
					  <tr class="danger">
					    <td id="danger-zone">20</td>
					    <td>Гранада</td>
					    <td>38</td>
					    <td>4</td>
					    <td>8</td>
					    <td>26</td>
					    <td>30/82 (-52)</td>
					    <td>20</td>
					  </tr>
					</tbody>
				</table>
				<h4>Легенда</h4>
				<table class="table-responsive table-bordered table-hover table-condensed legend">
					<tbody>
						<tr>
							<td id="champ-leag">1-3</td>
							<td>Участие в Шампионска Лига</td>
						</tr>
						<tr>
							<td id="champ-leag-qualific">4</td>
							<td>Шампионска Лига - Квалификации</td>
						</tr>
						<tr>
							<td id="leag-europe">5</td>
							<td>Участие в Лига Европа</td>
						</tr>
						<tr>
							<td id="leag-europe-qualific">6</td>
							<td>Лига Европа - Квалификации</td>
						</tr>
						<tr>
							<td id="danger-zone">18-20</td>
							<td>Изпадане</td>
						</tr>
					</tbody>
				</table>
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
