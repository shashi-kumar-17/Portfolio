<?php
//get data from form  
$name = $_POST['name'];
$email = $_POST['email'];
$subject1 = $_POST['subject1'];
$message= $_POST['message'];
$to = "shashi17kumar06@gmail.com";
$subject = "Mail From Portfolio";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Subject =" . $subject1 . "\r\n Message =" . $message;
$headers = "From: noreply@shashi1706.vercel.app" . "\r\n" .
"CC: loremvampire17@gmail.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
echo "Thank you for contacting me.";
?>
