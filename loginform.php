<?php
$conn=mysql_connect("localhost","root","");
$db=mysql_select_db("startup",$conn);
session_start();

?>
<?php


if(isset($_POST['submit'])){
$id=$_POST["email"];
$pass=sha1($_POST["password"]);


$sql=
"SELECT *FROM register WHERE(UserMail='".$id."'and UserPassword='".$pass."')";
$qury=mysql_query($sql);
$result=mysql_fetch_array($qury);
if($result[0]>0)
{

  $_SESSION['UserId']=$result['UserId'];
$_SESSION['UserMail']=$result['UserMail'];
 header("location:home.php");

}
else
{
header("location:loginform.php?bb");
}

}
 ?><!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<html lang="en" class="no-js">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Boxify: Free HTML5/CSS3 Template by Peter Finlan</title>
		<meta name="description" content="A free HTML5/CSS3 template made exclusively for Codrops by Peter Finlan" />
		<meta name="keywords" content="html5 template, css3, one page, animations, agency, portfolio, web design" />
		<meta name="author" content="Peter Finlan" />
		<!-- Bootstrap -->
		<script src="fjs/modernizr.custom.js"></script>
		<link href="fcss/bootstrap.min.css" rel="stylesheet">
		<link href="fcss/jquery.fancybox.css" rel="stylesheet">
		<link href="fcss/flickity.css" rel="stylesheet" >
		<link href="fcss/animate.css" rel="stylesheet">
		<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
		<link href='http://fonts.googleapis.com/css?family=Nunito:400,300,700' rel='stylesheet' type='text/css'>
		<link href="fcss/styles.css" rel="stylesheet">
		<link href="fcss/queries.css" rel="stylesheet">
		<!-- Facebook and Twitter integration -->
		<meta property="og:title" content=""/>
		<meta property="og:image" content=""/>
		<meta property="og:url" content=""/>
		<meta property="og:site_name" content=""/>
		<meta property="og:description" content=""/>
		<meta name="twitter:title" content="" />
		<meta name="twitter:image" content="" />
		<meta name="twitter:url" content="" />
		<meta name="twitter:card" content="" />
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->

<title>Calm breeze login screen</title>
        <link rel="stylesheet" href="css4/style.css">
   
</head>
	<body>
		<!--[if lt IE 7]>
		<p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
		<![endif]-->
		<!-- open/close -->
		<header>
			<section class="hero">
				<div class="texture-overlay"></div>
				<div class="container">
					<div class="row nav-wrapper">
						<div class="col-md-6 col-sm-6 col-xs-6 text-left">
							<a href="#"><img src="img/logo-white.png" alt="Boxify Logo"></a>
						</div>
						<div class="col-md-6 col-sm-6 col-xs-6 text-right navicon">							<p>MENU</p><a id="trigger-overlay" class="nav_slide_button nav-toggle" href="#"><span></span></a>

						</div>
</div>
<br>
<br>
<div class="row hero-content">
						<div class="col-md-12">
									             
<form class="form" method="post" action="">
			<input type="text" placeholder="Email" name="email">
			<input type="password" placeholder="Password" name="password">
			<input type="submit" name="submit">
<br>
		<a href="#">Forgot Password?</a>
</form>
<?php	
$msg="";
$msg=$_GET['msg'];
if($msg!='')
echo '<p>'.$msg.'</p>';
?>

	<ul class="bg-bubbles">		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
	</ul>

    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

        <script src="js4/index.js"></script>



</div>
				</div>
				</div>
				</section>
		</header>
<footer>
			<div class="container">
				<div class="row">
					<div class="col-md-5">
						<h1 class="footer-logo">
						<img src="img/logo-blue.png" alt="Footer Logo Blue">
						</h1>
						<p>� Boxify 2015 - <a href="#">Licence</a> - Designed &amp; Developed by <a href="http://www.facebook.com/login/manugupta/">Manu Gupta</a></p>
					</div>
					<div class="col-md-7">
						<ul class="footer-nav">
							<li><a href=""MAILTO:mg7581nitrr@outlook.com
subject="hello%20gain">">Feedback</a></li>
							<li><a href="#">Aboutus</a></li>
								</ul>
					</div>
				</div>
			</div>
		</footer>
	
		<div class="overlay overlay-boxify">
			<nav>
				<ul>
					<li><a href="index.html?id=nnjnjfrdfrnfrj"><i class="fa fa-heart"></i>HOME</a></li>
					<li><a href="register.php"><i class="fa fa-flash"></i>Create an account</a></li>
				</ul>
					</nav>
		</div>
		
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="fjs/min/toucheffects-min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="fjs/flickity.pkgd.min.js"></script>
		<script src="fjs/jquery.fancybox.pack.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="fjs/retina.js"></script>
		<script src="fjs/waypoints.min.js"></script>
		<script src="fjs/bootstrap.min.js"></script>
		<script src="fjs/min/scripts-min.js"></script>
		<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
		<script>
		(function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
		function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
		e=o.createElement(i);r=o.getElementsByTagName(i)[0];
		e.src='//www.google-analytics.com/analytics.js';
		r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
		ga('create','UA-XXXXX-X');ga('send','pageview');
		</script>
	


 

  </body>
</html>
