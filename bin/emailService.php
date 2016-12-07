
<?php
	
require('vendor/autoload.php');
define('AMQP_DEBUG', true);
use PhpAmqpLib\Connection\AMQPConnection;
use PhpAmqpLib\Message\AMQPMessage;


$url = parse_url(getenv('CLOUDAMQP_URL'));
$conn = new AMQPConnection($url['host'], 5672, $url['user'], $url['pass'], substr($url['path'], 1));
$ch = $conn->channel();
$queue = 'basic_get_queue';
$ch->queue_declare($queue, false, false, false, false);
echo ' [*] Waiting for messages. To exit press CTRL+C', "\n";

$callback = function($msg) {
  //echo " [x] Received ", $msg->body, "\n";
  echo " * Message received..................................................................................", "\n";
  $retrived_msg = json_decode($msg->body, true);

    $field_first_name=$retrived_msg['field_first_name'];
	$field_birthdate=$retrived_msg['field_birthdate'];
	$mail=$retrived_msg['mail'];
	$field_mobile=$retrived_msg['field_mobile'];
	$pass=$retrived_msg['pass']; 
      //echo $field_first_name. " jjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjj\n";

// If you are not using Composer (recommended)
// require("path/to/sendgrid-php/sendgrid-php.php");

$from = new SendGrid\Email(null, "saliha@dosomething.com");
$subject = "Hello World from beautiful world DOsomething!";
$to = new SendGrid\Email(null, "dscodetest@mailinator.com");
//$mailBody = $mail.$field_first_name.$field_birthdate.$field_mobile.$pass;

$content = new SendGrid\Content("text/plain", "hhhhhhhhhhhhhh");
$mail = new SendGrid\Mail($from, $subject, $to, $content);

$apiKey = getenv('SENDGRID_API_KEY');
$sg = new \SendGrid($apiKey);

$response = $sg->client->mail()->send()->post($mail);
echo $response->statusCode();
echo $response->headers();
echo $response->body();
};
$ch->basic_qos(null, 1, null);

//$ch->basic_consume($queue, '', false, true, false, false, $callback);
$ch->basic_consume($queue, '', false, false, false, false, $callback);

while(count($ch->callbacks)) {
    $ch->wait();
}

/* 

$callback = function($msg) {
    $retrived_msg = $ch->basic_get($queue);
    $mymsg=$retrived_msg->body;
    echo "<p bgcolor=\"red\"> Thank you ;)". $mymsg ."</p>";
    $ch->basic_ack($retrived_msg->delivery_info['delivery_tag']);
};



// loop over incoming messages
while(count($ch->callbacks)) {
    $cha->wait();
}
 */

$ch->close();
$conn->close();






 
 ?>