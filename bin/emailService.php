
<?php
	
require('vendor/autoload.php');
define('AMQP_DEBUG', true);
use PhpAmqpLib\Connection\AMQPConnection;
use PhpAmqpLib\Message\AMQPMessage;


$url = parse_url(getenv('CLOUDAMQP_URL'));
$conn = new AMQPConnection($url['host'], 5672, $url['user'], $url['pass'], substr($url['path'], 1));
$ch = $conn->channel();
$queue = 'basic_get_queue';
$ch->queue_declare($queue, false, true, false, false);
echo ' [*] Waiting for messages. To exit press CTRL+C', "\n";

$callback = function($msg) {
  echo " * Message received...", "\n";
  $retrived_msg = json_decode($msg->body, true);

  $field_first_name=$retrived_msg['field_first_name'];
  $field_birthdate=$retrived_msg['field_birthdate'];
  $mail=$retrived_msg['mail'];
  $field_mobile=$retrived_msg['field_mobile'];
  $pass=$retrived_msg['pass']; 


$from = new SendGrid\Email(null, "noreply@dosomething.org");
$subject = "Nice! You’re officially a DoSomething.org member!";
$to = new SendGrid\Email(null, "dscodetest@mailinator.com");

$body = $mail.$field_first_name.$field_birthdate.$field_mobile.$pass;
$body = "Firstname: ".$field_first_name."<br>"; 
$body .= "Date of birth: ".$field_birthdate."<br>"; 
$body .= "Email: ".$mail."<br>"; 
$body .= "Mobile: ".$field_mobile."<br>"; 
$body .= "Password: ".$pass."<br>"; 

$content = new SendGrid\Content("text/html", $body);
$mail = new SendGrid\Mail($from, $subject, $to, $content);

$apiKey = getenv('SENDGRID_API_KEY');
$sg = new \SendGrid($apiKey);

$response = $sg->client->mail()->send()->post($mail);

};
$ch->basic_qos(null, 1, null);

$ch->basic_consume($queue, '', false, true, false, false, $callback);

while(count($ch->callbacks)) {
    $ch->wait();
}



$ch->close();
$conn->close();






 
 ?>