<!DOCTYPE html>
<html lang="en">
<html lang="ru">
<head>
<meta charset="utf-8">
<title>SU-site</title>
<meta name="viewport" content="width=device-width, initial-scale = 1.0">
<meta name=description" content="Scripture Union in Moscow">
<link rel="stylesheet" type="text/css" href="css/template.css"> 
<link rel="stylesheet" type="text/css" href="css/menu.css"> 

<!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<style>
 
 #content {margin-top: -25px}
    
@media screen and (max-width: 1000px)
{
    #content {margin-top:-80px;}
}

</style>
</head>


<body>
<div id="wrapper">
<img id="banner" src="images/bannerru.jpg" alt="Scripture Union in Moscow" title="Scripture Union in Moscow" weight="100%" height="auto" align="center" >
</header>
<nav>
<label for="show-menu" class="show-menu"><img src="images/hamburger.png"></label>
<input type="checkbox" id="show-menu" role="button">

<ul id="menu">
 <li><a href="index.html">О нас</a></li>
<li><a href="events.html">Наша жизнь &#8659;  </a>
      <ul class="hidden">
      <li><a href="camp.html">Детский лагер</a></li>
      <li><a href="teencamp.html">Подростковый лагер</a></li>
      <li><a href="club.html">Детский клуб</a></li>
      <li><a href="cinema.html">Киноклуб</a></li>
      </ul></li>
      
<li><a href="#">Галерея &#8659;</a>
      <ul class="hidden">
    <li><a href="albumru.html">Фото</a></li>
      <li><a href="videoru.html">Видео</a></li>
      </ul></li>      
<li><a href="formru.html">Записаться</a></li>
<li><a href="contactru.html">Контакты</a></li>
<li><a href="form.html" ><img src="images/en.jpg"> </a></li>
</ul>

</nav>   
<br class="clearfix">
<div id="content">
 
 <?php
// Check variables

$hidden=$_POST['hidden'];
$name=$_POST['name'];
$pname=$_POST['pname'];
$secondname=$_POST['secondname'];
$age=$_POST['age'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$contact=$_POST['contact'];
$extra=$_POST['extra'];
$news=$_POST['news'];

//include the date the form was submitted
$date = gmdate("M d Y");

//Thank the user for submitting the form
print "<h2>Спасибо, $pname and $name, мы свяжемся с Вами в скором времени</h2>";
print "$date";

// send the form data to an  email adress
$to = "ostalgorova@gmail.com";
$subject = "SU-Camp";
$body = "Data: $date \n 
         Form request: $hidden \n
		 Child's Name: $name \n
		 Parent's Name: $pname \n
		 Date of birth: $age \n
		 E-mail: $email \n 
		 Phone: $phone \n		 
		 Contact by: $contact \n
		 Extra: $extra \n
		 Newsletters: $news \n";
		
		 
mail ($to, $subject, $body);
?>  

</div>

<footer>
<p> Разработано О. Стальгоровой <br>
Последнее обновление 26 августа 2015 года </p
</footer>




</div>
</body>
</html>


















