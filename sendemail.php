<?php
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $message = $_POST['message'];
  $subject = 'Inquiry from Paper Deluxe website!';
  $to = 'hello@paperdeluxe.net';  // Change this to your email address
  $from = "$name <$email>";
  $headers  = "MIME-Version: 1.0\r\n";
  $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
  $headers .= "From: $from\r\n";
  $body = '
  <html>
    <head>
       <title>'.$subject.'</title>
    </head>
    <body>
      <p>Name: '.$name.'</p>
      <p>Phone: '.$phone.'</p>
      <p>Email: '.$email.'</p>
      <p>Message: '.$message.'</p>
    </body>
  </html>
';
  mail($to, $subject, $body, $headers);
  header("Location: " . $_SERVER['HTTP_REFERER'] . "?response=success");
  exit;
?>
