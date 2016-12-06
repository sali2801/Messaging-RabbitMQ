<?php
// If you are using Composer
require 'vendor/autoload.php';

// If you are not using Composer (recommended)
// require("path/to/sendgrid-php/sendgrid-php.php");

$from = new SendGrid\Email(null, "dscodetest@mailinator.com");
$subject = "Hello World from the SendGrid PHP Library!";
$to = new SendGrid\Email(null, "as_mallem@esi.dz");
$content = new SendGrid\Content("text/plain", "Hello, Email!");
$mail = new SendGrid\Mail($from, $subject, $to, $content);

 $apiKey = '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';
 $sg = new \SendGrid($apiKey);

$response = $sg->client->mail()->send()->post($mail);
echo $response->statusCode();
echo $response->headers();
echo $response->body();
?>