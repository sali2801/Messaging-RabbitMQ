<?php
require('vendor/autoload.php');
define('AMQP_DEBUG', true);
use PhpAmqpLib\Connection\AMQPConnection;
use PhpAmqpLib\Message\AMQPMessage;
/**
* Create a connection to RabbitMQ
*/

$url = parse_url(getenv('amqp://yebkhegf:LLSFqa9zk4Jo2MyTGYkxHSDbCpKAKPgy@zebra.rmq.cloudamqp.com/yebkhegf'));
$conn = new AMQPConnection(
          $url['host'], //host - CloudAMQP_URL
          5672,         //port - port number of the service, 5672 is the default
          $url['user'], //user - username to connect to server
          $url['pass'], //password - password to connecto to the server
          substr($url['path'], 1) //vhost
);
$ch = $conn->channel();
$queue = 'basic_get_queue';
$ch->queue_declare(
          $queue, //queue name
          false,  //passive -  check whether an exchange exists without modifying server state
          true,   //durable - RabbitMQ will never lose the queue if a crash occurs
          false,  //exclusive - if queue only will be used by one connection
          false   //autodelete - queue is deleted when last consumer unsubscribes
);

/* 
echo ' [*] Waiting for messages. To exit press CTRL+C', "\n";

$retrived_msg = $ch->basic_get($queue);
var_dump($retrived_msg->body);
$ch->basic_ack($retrived_msg->delivery_info['delivery_tag'])
$ch->close();
$conn->close() */
?>
