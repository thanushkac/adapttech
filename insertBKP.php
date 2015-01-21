<?php

// Get values from form
$name=$_POST['name'];
$city=$_POST['city'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$email=$_POST['message'];
$email=$_POST['datafile'];

$to = "sales@adapttechteam.com";
$subject = "Someone contacted you on Adopt Technology Team website";
$message = " Name: " . $name . "\r\n City: " . $city . "\r\n Phone: " . $phone . "\r\n Email: " . $email;


$from = "Adapt Technology Team Website";
$headers = "From:" . $from . "\r\n";
$headers .= "Content-type: text/plain; charset=UTF-8" . "\r\n"; 

if(@mail($to,$subject,$message,$headers))
{
  print "<script>document.location.href='success.html';</script>";
  // Created by Future Tutorials
}else{
  echo "Error! Please try again.";
}



?>
