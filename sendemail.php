<?php

    $to = "salihamallem92@gmail.com";
    $subject = "PHP Mail Test script";
	$message = "This is a test to check the PHP Mail functionality";
    $headers = "From:";
    mail($to,$subject,$message, $headers);
    echo "Test email sent";	

 
  
 ?>