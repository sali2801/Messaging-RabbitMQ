<?php
// If you are using Composer
require 'vendor/autoload.php';

// If you are not using Composer (recommended)
// require("path/to/sendgrid-php/sendgrid-php.php");

$from = new SendGrid\Email(null, "saliha@dosomething.com");
$subject = "Hello World from beautiful world DOsomething!";
$to = new SendGrid\Email(null, "dscodetest@mailinator.com");
$content = new SendGrid\Content("text/plain", "Youpiiiiiiiiiiiiiiiiiiii!");
$mail = new SendGrid\Mail($from, $subject, $to, $content);

$apiKey = getenv('SENDGRID_API_KEY');
echo $apiKey;
$sg = new \SendGrid($apiKey);

$response = $sg->client->mail()->send()->post($mail);
echo $response->statusCode();
echo $response->headers();
echo $response->body();
?>