<?php
/*
 * Script PHP ini adalah pendukung materi belajar di Channel Youtube Soboteika yaitu seting, 
 * konfigurasi dan uji coba server Mercury Mail di XAMPP.
 * 
 * Video bisa dilihat di: 
 * https://youtu.be/-XuMDK9tI2w
 * 
*/

	include 'function.php';
	$to="ari@soboteika.xyz";
	if (filter_var($to, FILTER_VALIDATE_EMAIL)) {
		$to_name="Ari";
		$subject="Tes Email dari Mercury Surat Lokal XYZ";
		$body="<font face=Arial size=2>Hai sobat Teika ...<br><br>";
		$body.="Selamat, Anda telah mendapatkan konformasi dari Channel Youtube Soboteika yang bisa diakses di<br>"; 
		$body.="<a href=http://bit.ly/soboteika>bit.ly/soboteika</a><br>";
		$body.="------------------------------------------------------------------------------<br>";
		$body.="<b>Soboteika </b>[ bit.ly/soboteika ]<br>";
		$body.="Edukasi terapan teknologi informasi & komunikasi<br>";
		$from="php@nobody.com";
		$from_name="Nobody";
		sendmail($to,$to_name,$subject,$body,$from,$from_name);
	} else echo "format email salah ...";
?>

