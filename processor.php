<?php
$name=$_POST['name'];
$sender=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];

$email=$name . "\n" . $sender . "\n" . $message;
mail("cjones@sycamoreleaf.com", $subject, $email);
?>