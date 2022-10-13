<?php
$a=$_POST["email"];

require 'PHPMailer-master/PHPMailerAutoload.php';

$mail = new PHPMailer();
   $mail ->IsSmtp();
   $mail ->SMTPDebug = 0;
   $mail ->SMTPAuth = true;
   $mail ->SMTPSecure = 'ssl';
   $mail ->Host = "smtp.gmail.com";
   $mail ->Port = 465; // or 587
   $mail ->IsHTML(true);
   $mail ->Username = "decentomais90@gmail.com";
   $mail ->Password = "03152230228";
   $mail ->SetFrom("decentomais90@gmail.com");
   $mail ->Subject = "From Customer";
   $mail ->Body = "<b>"."Thanks For Signing Up!"."</b>";
   $mail ->AddAddress($a);

   if(!$mail->Send())
   {
       echo "<script>alert('Mail Not Sent!')</script>";
   }
   else
   {
       echo "<script>alert('Mail Sent!')</script>";
       echo "<script>window.history.back();</script>";
   }





?>