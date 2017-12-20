
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="RU" class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Closest &mdash; 100% Free Fully Responsive HTML5 Template by FREEHTML5.co</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="FREEHTML5.CO" />

  <!--
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE
	DESIGNED & DEVELOPED by FREEHTML5.CO

	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->

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

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,300,700|Roboto:300,400' rel='stylesheet' type='text/css'>

	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<link rel="stylesheet" href="css/style.css">


	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
	<div class="box-wrap">
		<header role="banner" id="fh5co-header">
			<div class="container">
				<nav class="navbar navbar-default">
					<div class="row">
						<div class="col-md-3">
							<div class="fh5co-navbar-brand">
								<a class="fh5co-logo" href="index.html"><img src="images/brand-nav.png" alt="Closest Logo"></a>
							</div>
						</div>
						<div class="col-md-6">
							<ul class="nav text-center">
								<li><a href="index.html"><span>О нас</span></a></li>
								<li><a href="insider.html">Блог</a></li>

								<li class="active"><a href="contact.html">Контакты</a></li>
							</ul>
						</div>
						<div class="col-md-3">
							<ul class="social">
								<li><a href="https://www.facebook.com/elizabeth.ovchinnikova.338" target="_blank"><i class="icon-facebook"></i></a></li>
								<li><a href="https://vk.com/ostalgorova" target="_blank"><i class="icon-vk"></i></a></li>
								<li><a href="https://www.instagram.com/dariafan/" target="_blank"><i class="icon-instagram"></i></a></li>
							</ul>
						</div>
					</div>
				</nav>
		  </div>
		</header>
		<!-- END: header -->
		<section id="intro">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2 text-center">
						<div class="intro animate-box">
							<h1>Связаться с нами</h1>
							<h2>Мы будем рады получить фидбэк! <br> Если тебе есть, что сказать - заполни эту форму</h2>
						</div>
					</div>
				</div>
			<div>
		</section>

    <?php
    // Check variables


    $firstname=$_POST['firstfiname'];
    $lastname=$_POST['lastname'];

    $email=$_POST['email'];
    $phone=$_POST['phone'];

    $message=$_POST['message'];

    //include the date the form was submitted
    $date = gmdate("M d Y");

    //Thank the user for submitting the form
    print "<h2>Спасибо, $firstname, мы свяжемся с Вами в скором времени</h2>";
    print "$date";
    echo "<h2>Спасибо, $firstname, мы свяжемся с Вами в скором времени</h2>";
    echo "$date";
    // send the form data to an  email adress
    $to = "ostalgorova@gmail.com";
    $subject = "Travelblog";
    $body = "Data: $date \n

        Name: $firstname $lastname\n

        E-mail: $email \n
        Phone: $phone \n

        Message: $message \n";


    mail ($to, $subject, $body);
    ?>




		<footer id="footer" role="contentinfo">
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center">
						<div class="footer-widget border">
							<p class="pull-left"><small>&copy; Closest Free HTML5. All Rights Reserved.</small></p>
							<p class="pull-right"><small> Designed by  <a href="http://freehtml5.co/" ta>freehtml5.co</a>  Images: <a href="https://unsplash.com/">Unsplash</a></small></p>

						</div>
					</div>
				</div>
			</div>
		</footer>
	</div>

<!--	var $form = $('form#feedback'),
	    url = 'https://script.google.com/macros/s/abcdefghijklmnopqrstuvwxyz1234567890/exec'

	$('#submit').on('click', function(e) {
	  e.preventDefault();
	  var jqxhr = $.ajax({
	    url: url,
	    method: "GET",
	    dataType: "json",
	    data: $form.serializeObject()
	  }).success(
	    // do something
	  );
	})
</script> -->
	<!-- END: box-wrap -->

	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!--дополнение после подключения гугл-форм ниде-->
	<script src="js/jquery.serialize-object.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>

	<!-- Main JS (Do not remove) -->
	<script src="js/main.js"></script>

	</body>
</html>
