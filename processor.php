<?php
$name=$_POST['name'];
$sender=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];

$email="Name: " . $name . "\n" . "Email: " . $sender . "\n" . "Subject: " . $subject . "\n" . "Message: " . $message;
mail("cjones@sycamoreleaf.com", $subject, $email);
?>