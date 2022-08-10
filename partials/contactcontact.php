<?php

$name = $_POST['name'];
$email= $_POST['email'];
$message= $_POST['message'];

$to = "tomekchmiel2001@gmail.com";
$subject = "This is the subject line";

$txt ="Name = ". $name . "\r\n Email = "
	. $email . "\r\n Message =" . $message;

$headers = "From: 123elko@gmail.com" . "\r\n" .
			"CC: ktokolwiekinny@gmail.com";
if($email != NULL) {
	mail($to, $subject, $txt, $headers);
}

header("Location:contact.php");
?>
