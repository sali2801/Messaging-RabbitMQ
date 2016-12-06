
<?php
	
require('vendor/autoload.php');
define('AMQP_DEBUG', true);
use PhpAmqpLib\Connection\AMQPConnection;
use PhpAmqpLib\Message\AMQPMessage;


$url = parse_url(getenv('CLOUDAMQP_URL'));
$conn = new AMQPConnection($url['host'], 5672, $url['user'], $url['pass'], substr($url['path'], 1));
$ch = $conn->channel();
$queue = 'basic_get_queue';

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


$ch->close();
$conn->close();






 
 ?>