<?php
	
require('vendor/autoload.php');
define('AMQP_DEBUG', false);
use PhpAmqpLib\Connection\AMQPConnection;
use PhpAmqpLib\Message\AMQPMessage;

if(isset($_POST))
{
	$data = json_encode($_POST);

	$field_first_name=$_POST['field_first_name'];
	$field_birthdate=$_POST['field_birthdate'];
	$mail=$_POST['mail'];
	$field_mobile=$_POST['field_mobile'];
	$pass=$_POST['pass']; 

$url = parse_url(getenv('CLOUDAMQP_URL'));
$conn = new AMQPConnection($url['host'], 5672, $url['user'], $url['pass'], substr($url['path'], 1));
$ch = $conn->channel();

$exchange = 'amq.direct';
$queue = 'basic_get_queue';
$ch->queue_declare($queue, false, true, false, false);
$ch->exchange_declare($exchange, 'direct', true, true, false);
$ch->queue_bind($queue, $exchange);
$msg = new AMQPMessage($data, "text/plain", array('delivery_mode' => 2));
$ch->basic_publish($msg, $exchange); 
$ch->close();
$conn->close();
header('Location: thankYou.html');
}
?>