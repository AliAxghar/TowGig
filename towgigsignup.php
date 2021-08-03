<?php 
  require __DIR__ . '/vendor/autoload.php';
  // $sid    = "AC9c2fca1c215413758a5787389be32736";
  // $token  = "94506dba399d76132a5c8a3acbe8eb05";
  // use Twilio\Rest\Client;
  // $client = new Twilio\Rest\Client($sid, $token);
  if(isset($_POST['submit'])){
    $to = "help@towgig.com"; // this is your Email address
    $from = $_POST['email'];
    $phone = $_POST['phone_number']['full'];
    $subject = "TowGig Signup Request";
    $subject2 = "TowGig Services";
    $message2 = "Thanks for choosing TowGig, Click the link to download the app \n Playstore = https://play.google.com/store/apps/details?id=com.crymzee.tow_gig \n Appstore = https://apps.apple.com/pk/app/towgig/id1507223706";

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    if(isset($from)) {
      mail($from,$subject2,$message2,$headers2);
      header('Location: thanku.html');
    }
    else{
      header('Location: thanku.html');
    }
    // if(isset($phone)) {
    //   $message = $client->messages->create($phone, // to
    //                         [
    //                             "body" => "Thanks for choosing TowGig, Click the link to download the app \n Playstore = https://play.google.com/store/apps/details?id=com.crymzee.tow_gig \n Appstore = https://apps.apple.com/pk/app/towgig/id1507223706",
    //                             "from" => "+12058283417"
    //                         ]
    //               );
    //   header('Location: thanku.html');
    // }
    // else{
    //   header('Location: thanku.html');
    // }

  }
?>