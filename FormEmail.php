<?php
  include 'Emailer.php';
  $contactEmail = new Email("");  //instantuate
  $contactEmail -> setRecipient("redesignedMoon@gmail.com");
  $contactEmail -> setSender("moonsurv@kmoonpage.com");
  $contactEmail -> setSubject("Hello World");
  $contactEmail -> setMessage("This is a test. I am Wrtitign multiple lines of code in oder to get this emssge to be long enough to ge over 5 chars to get that wordkwrap to kick in. YAY!!");
  $emailStatus = $contactEmail-> sendMail(); //Sends the mail
 ?>
<!DOCTYPE html>
<html>
<head>

</head>
<body>

<?php
if ($emailStatus == true) {
  print ("Your Message Has Been Sent. Thank You!
              Your message was " .  $message);
}
else{
  print ("MESSAGE NOT SENT");
}
 ?>

</body>
</html>