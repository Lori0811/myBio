<?php
	$to="singleandwholeoutreach@gmail.com";
	$Subject="Email from my website";
	
	
	$name=$_POST['name'];
	$email=$_POST['email'];
	$comment=$_POST['comment'];
	
	
	$headers.="Content-type: text/html;\r\n";
	$herders.="From: $email";
	
	
	mail($to,$Subject,$comment,$headers);
	
	echo "Email has been sent! Thank you $name";
?>
