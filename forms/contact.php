<?php
//get data from form  
$name = $_POST['name'];
$email= $_POST['email'];
$subject=$_POST['subject']
$message= $_POST['message'];
$to = "betterbooksaa@gmail.com";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message;
$headers = "From: aishfrost006@gmail.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thank.html");
?>
