

 <?php
// If you are using Composer
require 'vendor/autoload.php';
Dotenv::load(__DIR__);
// If you are not using Composer (recommended)
// require("path/to/sendgrid-php/sendgrid-php.php");
$sendgrid_apikey = getenv('dosomethingtest');

$from = new SendGrid\Email(null, "as_mallem@esi.dz");
$subject = "Hello World from the SendGrid PHP Library!";
$to = new SendGrid\Email(null, "salihamallem92@gmail.com");
$content = new SendGrid\Content("text/plain", "Hello, Email!");
$mail = new SendGrid\Mail($from, $subject, $to, $content);

$apiKey = getenv('SENDGRID_API_KEY');
$sg = new \SendGrid($apiKey);

$response = $sg->client->mail()->send()->post($mail);
echo $response->statusCode();
echo $response->headers();
echo $response->body();	


      ?>
 
  
