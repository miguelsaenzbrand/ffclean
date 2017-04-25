<?php
// Check for empty fields
if(empty($_POST['name'])  		||
   empty($_POST['email']) 		||
   empty($_POST['message'])	||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "No arguments Provided!";
	return false;
   }

$name = $_POST['name'];
$email_address = $_POST['email'];
$message = $_POST['message'];

// Create the email and send the message
$to = 'info@ffclean.co'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "Contacto web:  $name";
$email_body = "Recibió un nuevo mensaje de su formulario desde el sitio web.\n\n"."Detalles del contacto:\n\nNombre: $name\n\nEmail: $email_address\n\nMensaje:\n$message";
$headers = "From: noreply@ffclean.co\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Responder a: $email_address";
mail($to,$email_subject,$email_body,$headers);
return true;
?>
