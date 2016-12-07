
<?php
	
require('vendor/autoload.php');
define('AMQP_DEBUG', true);
use PhpAmqpLib\Connection\AMQPConnection;
use PhpAmqpLib\Message\AMQPMessage;

if(isset($_POST))
{
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


//$data = json_encode($_POST);

$msg = new AMQPMessage($mail, "text/plain", array('delivery_mode' => 2));
$channel->basic_publish($msg, '', $queue);

$ch->close();
$conn->close();
header('Location: thankYou.php');

/* $ch->exchange_declare($exchange, 'direct', true, true, false);
$ch->queue_bind($queue, $exchange);
$msg_body = json_encode($_POST);

//$msg_body = "hello Mr. ".$mail.$field_first_name.$field_birthdate.$field_mobile.$pass;
$msg = new AMQPMessage($msg_body,'delivery_mode' => 2));
$ch->basic_publish($msg, $exchange); */

//$retrived_msg = $ch->basic_get($queue);
//$mymsg=$retrived_msg->body;
//echo "<p bgcolor=\"red\"> Thank you ;)". $mymsg ."</p>";


	
	
//$ch->basic_ack($retrived_msg->delivery_info['delivery_tag']);





//header('Location: thankYou.php');

}



 
 