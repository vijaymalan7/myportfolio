<?php
$name= $_POST['name'];
$email= $_POST['email'];
$subject= $_POST['subject'];
$message= $_POST['message'];
$to= "vijaymalan12@gmail.com" ;
$subject ="mail from myportfolio";
$txt ="name= ". $name . "\r\n Email =" . $email . "\r\n Subject=" .$subject.  "\r\n Message = " .$messge;
$headers ="From: vijaymalan7.github.io/myportfolio/";
if($email !=NULL){
    mail($to,$subject,$txt,$headers);
}
header("Location: thankyou.html");
?>
