<?php

    $to      = 'dscodetest@mailinator.com'; 
$subject = 'the subject'; 
$message = 'hello'; 
$headers = 'From: test@mailinator.com' . "\r\n" . 
           'Reply-To: test@mailinator.com' . "\r\n" . 
           'X-Mailer: PHP/' . phpversion(); 

if(mail($to, $subject, $message, $headers)){ 
    echo "Mail Sent"; 
}else{ 
    echo "***ERROR***"; 
} 
 
  
 ?>