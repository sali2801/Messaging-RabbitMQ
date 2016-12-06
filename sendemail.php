<?php

    $to = "salihaleadersoft@hotmail.com";
    $subject = "PHP Mail Test script";
	$message = "This is a test to check the PHP Mail functionality";
    $headers = "From:";
    if (mail($to,$subject,$message, $headers);)
	{
		    echo "Test email sent";	

	}
	else
	{
		    echo "ERROR";	

	}

 
  
 ?>