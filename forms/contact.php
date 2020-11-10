<?php 

if(isset($_POST['email']) && isset($_POST['name']) && isset($_POST['group']) && isset($_POST['phone']) ){

    $to = "hello@mrtlaw.co.za"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $name = $_POST['name'];
    $group = $_POST['group'];
    $phone = $_POST['phone'];
    $_POST = array();

    $subject = "Website enquiry from " . $name;
    $message = $name . " Has submitted their information on the website and have indicated they are a/an " . $group . " Please contact them on - " . $phone . " or via email - " . $from;

    $headers = "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html\r\n";
    $headers .= 'From: ' . $from . "\r\n" .
    'Reply-To: hello@mrtlaw.co.za' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();


    if (mail($to, $subject, $message, $headers)) {

      echo "<script>alert('message successfully sent'); history.go(-1);</script>";
    } else {
      echo "<script>alert('Please fill in all the fields with relevant information'); history.go(-1);</script>";
    }
  }
?>