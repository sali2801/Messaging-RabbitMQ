

 <?php
         // using SendGrid's PHP Library
// https://github.com/sendgrid/sendgrid-php
require 'vendor/autoload.php';
$sendgrid = new SendGrid("SENDGRID_APIKEY");
$email    = new SendGrid\Email();

$email->addTo("dscodetest@mailinator.com  ")
      ->setFrom("as_mallem@esi.dz")
      ->setSubject("Sending with SendGrid is Fun")
      ->setHtml("and easy to do anywhere, even with PHP");

$sendgrid->send($email);

    echo $email;	


      ?>
 
  
