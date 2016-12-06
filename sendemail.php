<?php

    $to      = "dscodetest@mailinator.com"; 
$subject = "the subject"; 
$message = <<<EMAIL 
HELLO

 EMAIL; 
$headers = "From:test@mailinator.com";

if(mail($to, $subject, $message, $headers)){ 
    echo "Mail Sent"; 
}else{ 
    echo "***ERROR***"; 
} 
 
  
 ?>