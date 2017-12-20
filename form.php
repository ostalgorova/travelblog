<html>
<body>

Welcome <?php echo $_POST["name"]; ?><br>
Your email address is: <?php echo $_POST["email"]; ?>

</body>
</html>
 <?php
// Check variables


$firstname=$_POST['firstname'];
$lastname=$_POST['lastpname'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$message=$_POST['message'];


//include the date the form was submitted
$date = gmdate("M d Y");

//Thank the user for submitting the form
print "<h2> $firstname, спасибо, что оставили отзыв на нашем сайте! Мы свяжемся с вами как-только-так-сразу! </h2>";
print "$date";

// send the form data to an  email adress
$to = "ostalgorova@gmail.com";
$subject = "Travelblog";
$body = "Data: $date \n

		 Feedback from: $firstname $lastname \n
		 E-mail: $email \n
		 Phone: $phone \n
		Message: $message \n



mail ($to, $subject, $body);
?>
