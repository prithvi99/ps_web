<?php

  $name = $_POST['name'];
  $visitor_email = $_POST['email'];
  $message = $_POST['message'];

  $email_form = 'prithvi009.9@gmail.com';

  $email_subject = "New Form Submission";

  $email_body = "User Name: $name.\n".
                  "User Email: $visitor_email.\n".
                  "User Message: $message.\n";

  $to = "prithvi2mars@gmail.com";

  $headers = "Form: $email_form \r\n";

  $headers = "Reply-To: $visitor_email \r\n";

  mail($to, $email_subject, $email_body, $headers);

  header("Location: index.html");


 ?>
