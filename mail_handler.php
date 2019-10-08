<?php
  if(isset($_POST["submit"])){
    $to = "andersonswaimboyd@gmail.com";
    $from = $_POST["email"];
    $first = $_POST["firstName"];
    $last = $_POST["lastName"];
    $subject = "Your email";
    $subject2 = "Copy of your email";
    $message = $first." ".$last." wrote the following: "."\n\n".$_POST["message"];
    $message2 = "Here is a copy of your message ".$first."\n\n".$_POST["message"];

    $headers = "From: ".$from;
    $headers2 = "From: ".$to;
    mail($to, $subject, $message, $headers);
    mail($from, $subject2, $message2, $headers2);
    echo "Mail sent. Thank you for your message, ${first} ${last}. I will get back to you shortly!";
  }
?>