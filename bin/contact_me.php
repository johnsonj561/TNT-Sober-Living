<?php
// Check for empty fields
if(empty($_POST['name'])      ||
   empty($_POST['email'])     ||
   empty($_POST['phone'])     ||
   empty($_POST['message'])   ||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
   echo "No arguments Provided!";
   return false;
   }
   
$name = strip_tags(htmlspecialchars($_POST['name']));
$email_address = strip_tags(htmlspecialchars($_POST['email']));
$phone = strip_tags(htmlspecialchars($_POST['phone']));
$message = strip_tags(htmlspecialchars($_POST['message']));
$prefersEmail = strip_tags(htmlspecialchars($_POST['prefersEmail']));
$prefersPhone = strip_tags(htmlspecialchars($_POST['prefersPhone']));
        
                                                   
   
// Create the email and send the message
$to = 'info@tntsoberliving.com';
$email_subject = "TNT Website Contact";
$email_body = "You have received a new message from your website contact form.\n\n";
$email_body .= "Here are the details:\n\nName: $name\n\nEmail: $email_address\n\nPrefers Email: $prefersEmail\n\n";
$email_body .= "Phone: $phone\n\nPrefers Phone: $prefersPhone\n\nMessage:\n$message";
$headers = "From: noreply@tntsoberliving.com\n";
$headers .= "Reply-To: $email_address";   
mail($to,$email_subject,$email_body,$headers);
return true;         
?>
