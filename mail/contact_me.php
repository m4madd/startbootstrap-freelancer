<?php
if(empty($_POST['name'])  		||
   empty($_POST['email']) 		||
   empty($_POST['phone']) 		||
   empty($_POST['message'])	||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "هیچ فیلدی پر نشده است";
	return false;
   }
$name = $_POST['name'];
$email_address = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];
$to = 'yourmail@mail.ir';
$email_subject = "ارسال شده از سایت شخصی توسط:  $name";
$email_body = "پیام جدید از سایت شخصی تان دارید.\n\n"."جزئیات ایمیل:\n\nName: $name\n\nEmail: $email_address\n\nPhone: $phone\n\nMessage:\n$message";
$headers = "From: noreply@yourdomain.com\n";
$headers .= "Reply-To: $email_address";	
mail($to,$email_subject,$email_body,$headers);
return true;			
?>