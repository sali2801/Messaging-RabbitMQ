<?php
/*
* This FormHandler file represent the producer that sends messages.	
*/
require('vendor/autoload.php'); //Dependencies will be automatically loaded by PHP.
define('AMQP_DEBUG', false);
use PhpAmqpLib\Connection\AMQPConnection;
use PhpAmqpLib\Message\AMQPMessage;

if(isset($_POST))
{
//Convert the POST data that we received from the form to a JSON string. 
//We can only pass strings as a message so we'll have to convert this later on into an array on the receiver's end
$data = json_encode($_POST);

$url = parse_url(getenv('CLOUDAMQP_URL'));
//Create a new connection to the RabbitMQ server
$conn = new AMQPConnection($url['host'], 5672, $url['user'], $url['pass'], substr($url['path'], 1));
//Create a channel
$ch = $conn->channel();

//The producer can only send messages to an exchange (never sends any messages directly to a queue.)
$exchange = 'amq.direct';
//Declare the queue 
$queue = 'basic_get_queue';
$ch->queue_declare($queue, false, true, false, false);
$ch->exchange_declare($exchange, 'direct', true, true, false);
$ch->queue_bind($queue, $exchange);

//Create the messages that we'll push to the queue. 
//Delivery_mode=> 2 means the message is persistent (not lost when the server crashes or an error occurs.)
$msg = new AMQPMessage($data, "text/plain", array('delivery_mode' => 2));
$ch->basic_publish($msg, $exchange); 

//close connection
$ch->close();
$conn->close();

//Redirect the user to the thank-you page.
header('Location: thankYou.html');
}
?>