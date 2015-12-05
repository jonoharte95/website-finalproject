<?php
$from = "Jonathan.Harte@student.ncirl.ie";
$to = "Jonathan.Harte@student.ncirl.ie";

$name = Trim(stripsslashes($_POST['name']));
$name = Trim(stripsslashes($_POST['email']));
$name = Trim(stripsslashes($_POST['message']));

$body ="";
$body .="Name: ";
$body .=$name;
$body .="\n";
$body .="Email: ";
$body .=$email;
$body .="\n";
$body .="Message: ";
$body .=$message;
$body .="\n";



$go = mail($to, $subject, $body, "From:<$from>");

if($go) {
	print("Mail sent!")
}
else{
	print("Did not send!")
}



?>