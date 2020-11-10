<?php 

  if(isset($_POST['news_email'])) {

    $to = "hello@mrtlaw.co.za"; // this is your Email address
    $from = $_POST['news_email']; // this is the sender's Email address
    $_POST = array();

    $subject = "Newsletter application from " . $from;
    $message = $from . " Has indicated that they would like their email added to the newsletter via website";

    $headers = "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html\r\n";
    $headers .= 'From: hello@mrtlaw.co.za' . "\r\n" .
    'Reply-To: hello@mrtlaw.co.za' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();


    if (mail($to, $subject, $message, $headers)) {

      echo "<script>alert('message successfully sent'); history.go(-1);</script>";
    } else {
      echo "<script>alert('Please fill in all the fields with relevant information'); history.go(-1);</script>";
    }
  }
?>