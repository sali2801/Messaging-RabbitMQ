
<?php
require('vendor/autoload.php');
define('AMQP_DEBUG', true);
use PhpAmqpLib\Connection\AMQPConnection;
use PhpAmqpLib\Message\AMQPMessage;
$url = parse_url(getenv('CLOUDAMQP_URL'));
$conn = new AMQPConnection($url['host'], 5672, $url['user'], $url['pass'], substr($url['path'], 1));
$ch = $conn->channel();

$exchange = 'amq.direct';
$queue = 'basic_get_queue';
$ch->queue_declare($queue, false, true, false, false);
$ch->exchange_declare($exchange, 'direct', true, true, false);
$ch->queue_bind($queue, $exchange);

$msg_body = 'the hellllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllo';
$msg = new AMQPMessage($msg_body, array('content_type' => 'text/plain', 'delivery_mode' => 2));
$ch->basic_publish($msg, $exchange);

$retrived_msg = $ch->basic_get($queue);
$mymsg=$retrived_msg->body;
//var_dump($retrived_msg->body);
	echo "<p bgcolor=\"red\"> Thank you ;)". $mymsg ."</p>";

$to      = 'as_mallem@esi.dz';
$subject = 'the subject';
$message = $mymsg ;
$headers = 'From: salihamallem92@gmail.com' . "\r\n" .
    'Reply-To: salihamallem92@gmail.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);	
	
	
$ch->basic_ack($retrived_msg->delivery_info['delivery_tag']);




$ch->close();
$conn->close();
 
  
 ?>