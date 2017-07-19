<?php

	$to = 'care@redcliffehygiene.com';  //Recipient's E-mail

	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= "From: " . $_POST['name'] . "\r\n"; // Sender's E-mail
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	$email = $_POST["email"];
	$name = $_POST['name'];
	
	$query = $_POST['message'];
	$message .= 'Name: ' . $name . "<br>";
	$message .= 'Contact No: ' . $phone . "<br>";
	$message .= 'Message:'.$query;
	$subject = 'My Safety Comics';

	$emailval = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$/'; 
	$mob="/^[1-9][0-9]*$/";  

	if ($name == '' || $email == '' || $phone == '' || $query == '') {
		echo "Kindly enter all the details";
	}

	else if((!preg_match("/^[a-zA-Z ]*$/",$name))){
		echo "Kindly enter the your correct name";

	}
	

	else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
		echo "Kindly enter the your correct email";

	}

	
	else if((!preg_match($mob,$phone))){

		echo "Kindly enter the your correct phone no";
	}


	else if(mail($to, $subject, $message, $headers)){
		echo "Thank You for contacting us.";
	}
	else{
		echo "Please try again";
	}

?>
