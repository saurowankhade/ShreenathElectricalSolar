<?php
$name = $_post['name'];
$visitor_email = $_post['email'];
$message = $_post['message'];



$email_from = 'abc@gmail.com';

$email_subject = "New Form Submission";


$email_body ="User name: $name.\n".
              "user Email:$visitor_email.\n".
                  "user message:$message.\n";


$to = "From: $email_from \r\n";
$hearder = "Form: $email_from \r\n";
$hearder = "Reply-To:$visitor_email \r\n";

mail($to,$email_subject$email_body,$hearder);
hearder("Loction: C:\Users\Hp\Desktop\html\index.html")
 






?>