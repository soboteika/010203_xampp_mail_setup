<?php 
/*
 * Script PHP ini adalah pendukung materi belajar di Channel Youtube Soboteika yaitu seting, 
 * konfigurasi dan uji coba server Mercury Mail di XAMPP.
 * 
 * Video bisa dilihat di: 
 * https://youtu.be/-XuMDK9tI2w
 * 
*/

function sendmail($to,$to_name,$subject,$body,$from,$from_name) {
  include ("class.phpmailer.php");
  $mail = new phpmailer();
  $mail->From = $from;
  $mail->FromName = $from_name;
  $mail->Host = "localhost";
  $mail->Mailer = "smtp";
  $mail->Subject = $subject;
  $mail->Body    = $body;
  $body = strip_tags(preg_replace("<br>", "\n", $body));
  $mail->AltBody = $body;
  $mail->AddAddress("$to", "$to_name");
  if(!$mail->Send()) echo "Mail errorr ...";
  $mail->ClearAddresses();
  $mail->ClearAttachments();
}
?>