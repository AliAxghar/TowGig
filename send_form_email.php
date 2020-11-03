<?php

if(isset($_POST['submit'])) {
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "help@towgig.com";
    $email_subject = "TowGig Contact Mail";
 
    function died($error) {
        // your error code can go here
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
        echo "These errors appear below.<br /><br />";
        echo $error."<br /><br />";
        echo "Please go back and fix these errors.<br /><br />";
        die();
    }
 
 
    // // validation expected data exists
    // if(!isset($_POST['name']) ||
    //     !isset($_POST['email']) ||
    //     !isset($_POST['phone']) ||
    //     !isset($_POST['message'])) {
    //     died('We are sorry, but there appears to be a problem with the form you submitted.');       
    // }
 
     
 
    $name = $_POST['name']; // required
    $email_from = $_POST['email']; // required
    $phone = $_POST['phone']; // not required
    $message = $_POST['message']; // required

 
 
     
 
// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
if (mail($email_to, $email_subject, $email_message, $headers));{
  
  header('Location: thanku.html');
}  
?>
 
<!-- include your own success html here -->
 

 
<?php
 
}
?>