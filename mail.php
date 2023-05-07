<?php
$name= $_POST['name'];
$email= $_POST['email'];
$subject= $_POST['subject'];
$message= $_POST['message'];
$to= "vijaymalan12@gmail.com" ;
$subject ="mail from myportfolio";
$txt ="name= ". $name . "\r\n Email =" . $email . "\r\n Subject=" .$subject.  "\r\n Message = " .$messge;
$headers ="From: $name < $email> ";
if($email !=NULL){
    mail($to,$subject,$txt,$headers);
    echo "<script type='text/javascript'>alert('your message sent successfully');
    window.history.log(-1);
    </script>";
}
//header("Location: thankyou.html");
?>
