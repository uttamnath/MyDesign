<?php 
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$subject=$_POST['subject'];
$message=$_POST['message'];
$to="info@rnslogistics.net";
$message="Name: $name\n\n\ E-mail: $email\n\n\ Phone: $phone\n\n\ Subject: $subject\n\n\ Message: $message";

if(mail($to,"Contact Form my RNS Logistics Limited", $message, "FROM: $email")){
	echo "Thank You $name your Message has been send";
}
else{
	echo "Sorry your message not send";
}

?>