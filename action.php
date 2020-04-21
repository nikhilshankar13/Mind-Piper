<?php $name = $_POST['name'];
$email = $_POST['email'];
$number = $_POST['number'];
$session = $_POST['session'];
$counsellor = $_POST['counsellor'];
$birthdaytime = $_POST['birthdaytime'];
$formcontent="From: $name \n Number: $number \n Session: $session \n counsellor: $counsellor";
$recipient = "shankarnikhil01@gmail.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!";
?>