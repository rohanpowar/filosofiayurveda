<?php

/*if (isset($_POST['email']))
//if "email" is filled out, send email
  {*/
	$to = 'info@filosofiayurveda.org';
	$subject = "Contact information from filosofiayurveda.org";
	$name_field = $_POST['name'];
	$email_field = $_POST['email'];
	$phone_field = $_POST['phone'];
	$option_field = $_POST['option'];
	$message = $_POST['comments'] ;
	 
	 if($name_field=="" || $email_field=="" || $message=="")
	{
	$message = rawurlencode("Por favor, rellene todos los campos");
	header("Location:contact.php?message=$message");
	exit;
	}  
	else
	{
	$body = "From: $name_field\n E-Mail: $email_field\n  Message:\n $message";
	//$body = "From: $name_field\n E-Mail: $email_field\n Feedback on: $option_field \n Message:\n $message";
	mail($to, $subject, $body);
	//echo "Data has been submitted to $to!";
	$message = rawurlencode("Los datos se han enviado correctamente");
	header("Location:contact.php?message=$message");
	exit;
    }
?>