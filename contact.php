<?php $firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['message'];
$formcontent="From: $firstname \n $lastname \n Message: $message";
$recipient = "tgoodell@disroot.org";
$subject = "Contact Form";
$mailheader ="From: $email \r\n";
mail($recipient, $subject, $$formcontent, $mailheader) or die("Error!");
echo "Thank you!";
?>
