<?php $firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$number = $_POST['number'];
$meet = $_POST['meet'];
$gpa = $_POST['gpa'];
$formcontent="From: $firstname \n $lastname \n Cell Phone Number: $number \n Day Good: $meet \n GPA: $gpa \n Message: $message";
$recipient = "tgoodell@disroot.org";
$subject = "Contact Form";
$mailheader ="From: $email \r\n";
mail($recipient, $subject, $$formcontent, $mailheader) or die("Error!");
echo "Thank you!";
?>
