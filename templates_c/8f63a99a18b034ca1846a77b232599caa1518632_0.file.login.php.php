<?php
/* Smarty version 3.1.29, created on 2017-05-22 13:48:06
  from "C:\xampp\htdocs\BarcaTrain\login.php" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5922cff68b2675_58321084',
  'file_dependency' => 
  array (
    '8f63a99a18b034ca1846a77b232599caa1518632' => 
    array (
      0 => 'C:\\xampp\\htdocs\\BarcaTrain\\login.php',
      1 => 1495453682,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5922cff68b2675_58321084 ($_smarty_tpl) {
echo '<?php
';?>session_start();
require_once('db_connection.php');	
require_once('C:/xampp/htdocs/BarcaTrain/smarty/config.php');
$smarty = new Smarty();

if(isset($_POST['btn_login'])){

$errors = array();

if(empty($_POST['username'])) {
	$errors['username1'] = "Username field cannot be empty ";
}

if(empty($_POST['password'])) {
$errors['password1'] = "Password field cannot be empty ";
}

$username = $_POST['username'];
$password = $_POST['password'];


mysqli_query($conn,"SET NAMES 'utf8'");

if(count($errors)== 0){
	//header("Location:shop.html");
	//exit();

//$username = mysqli_real_escape_string($conn, $username);
//$password = mysqli_real_escape_string($conn, $password);
$password = md5($password);
	
	
	
$sql = "SELECT username, password FROM users WHERE username = '$username'  and password = '$password'";

$result = mysqli_query($conn, $sql);

$row = mysqli_fetch_assoc($result);
      
$count = mysqli_num_rows($result);
 
      // If result matched $egn, table row must be 1 row	

    //  if (mysqli_num_rows($result) == 1) {	
     if($count > 0 ) {	
		//echo 'you are logged in';
		 $_SESSION['username'] = $row['username'];
         $_SESSION['idhash'] = md5($_SERVER['HTTP_USER_AGENT']);
		header("Location:shop.html");
		//$smarty->display('shop.html');
    }
	
   else {
	  $errors['username2']= "Wrong username or password";
    	
    	 }

}
mysqli_close($conn);
}

<?php echo '?>';?>
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

	<!-- Website CSS style -->
	<link href="css/bootstrap.min.css" rel="stylesheet">

	<!-- Website Font style -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
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
								<a href="home.html" id="headerLogonew" class="headerLogonew">
									<img src="./img/barcelona.png" width="50" height="50">
								</a>
							</div>
						</div>

						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="[ collapse navbar-collapse ]" id="myNavbar">
							<ul class="nav navbar-nav">
								<li class="[ visible-xs ]">
									<form action="http://bootsnipp.com/search" method="GET" role="search">
										<div class="[ input-group ]">
											<input type="text" class="[ form-control ]" name="q" placeholder="Search for snippets">
											<span class="[ input-group-btn ]">
												<button class="[ btn btn-primary ]" type="submit"><span class="[ glyphicon glyphicon-search ]"></span></button>
												<button class="[ btn btn-danger ]" type="reset"><span class="[ glyphicon glyphicon-remove ]"></span></button>
											</span>
										</div>
									</form>
								</li>
								<li><a href="#">Новини</a></li>
								<li><a href="shop.html">Фен зона</a></li>
								<li class="[ w3-dropdown-hover ]">
									<a href="#" class="[ dropdown-toggle ]" data-toggle="w3-dropdown-hover">Ла Лига</a>
									<ul class="[ w3-dropdown-content w3-white w3-card-4 ]">
										<li><a href="standings.html">Класиране</a></li>
										<li><a href="results.html">Резултати</a></li>
										<li><a href="fixtures.html">Програма</a></li>
									</ul>
								</li>
								<li class="[ w3-dropdown-hover ]">
									<a href="#" class="[ dropdown-toggle ][ animate ]" data-toggle="w3-dropdown-hover">ФК Барселона</a>
									<ul class="[ w3-dropdown-content w3-white w3-card-4 ]">
										<li><a href="history.html">История</a></li>
										<li><a href="squad.html">Състав</a></li>
										<li><a href="campnou.html">Камп Ноу</a></li>
									</ul>
								</li>
							</ul>		
							<ul class="nav navbar-nav navbar-right">
								<li><a href="" class="animate" data-toggle="modal" data-target="#myModalReg"><span class="glyphicon glyphicon-user"></span> Register</a></li>
								<li><a href="" class="animate" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>

								<li class="[ hidden-xs ]"><a href="#toggle-search" class="[ animate ]"><span class="[ glyphicon glyphicon-search ]"></span></a></li>
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
				<div id="content" class="col-sm-8">
					

				<div class="main-login main-center">
				<h3>Registartion Form</h3>
				<hr>
					<form method="post" action="">

						<div class="form-group">
							<label for="username" class="cols-sm-2 control-label">Username</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="username" value="<?php echo '<?php ';?>if(isset($_POST['username'])) echo $_POST['username']; <?php echo '?>';?>" id="username"  placeholder="Enter your Username"/>
								</div>
								<p><?php echo '<?php ';?>if(isset($errors['username1'])) echo $errors['username1']; <?php echo '?>';?> </p>
								<p><?php echo '<?php ';?>if(isset($errors['username2'])) echo $errors['username2']; <?php echo '?>';?> </p>
							</div>
						</div>

						<div class="form-group">
							<label for="password" class="cols-sm-2 control-label">Password</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<input type="password" class="form-control" name="password" id="password"  placeholder="Enter your Password"/>
								</div>
								<p><?php echo '<?php ';?>if(isset($errors['password1'])) echo $errors['password1']; <?php echo '?>';?> </p>
							</div>
						</div>

						<div class="form-group ">
							<input type="submit" id="button" name="btn_login" value="Login" class="btn btn-primary btn-lg btn-block login-button" />
						</div>
						
					</form>
				</div>


				</div>
				<aside class="hidden-xs col-sm-4">
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
				</aside>
			</div>
			<!-- Modal for Login -->
			<div class="modal fade" id="myModal" role="dialog">
				<div class="modal-dialog modal-content">
					<!-- Modal content-->
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
			<a href="https://www.facebook.com/fcbarcelona/?fref=ts" id="headerLogonew" class="headerLogonew">
				<img src="./img/facebook/fb3white.png" width="40" height="40">
			</a>
			<a href="https://www.instagram.com/fcbarcelona/" id="headerLogonew" class="headerLogonew">
				<img src="./img/instagram/inst1.png" width="40" height="40">
			</a>
			<a href="https://twitter.com/fcbarcelona" id="headerLogonew" class="headerLogonew">
				<img src="./img/twitter/tw.png" width="40" height="40">
			</a>
			<a href="https://plus.google.com/116151548242653888082/posts" id="headerLogonew" class="headerLogonew">
				<img src="./img/google_plus/gp3.png" width="40" height="40">
			</a>
			<a href="https://www.youtube.com/fcbarcelona" id="headerLogonew" class="headerLogonew">
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
</body>
</html><?php }
}
