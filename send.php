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

$exchange = 'amq.direct';
$queue = 'basic_get_queue';
$ch->queue_declare(
          $queue, //queue name
          false,  //passive -  check whether an exchange exists without modifying server state
          true,   //durable - RabbitMQ will never lose the queue if a crash occurs
          false,  //exclusive - if queue only will be used by one connection
          false   //autodelete - queue is deleted when last consumer unsubscribes
);

$ch->exchange_declare($exchange, 'direct', true, true, false);
$ch->queue_bind($queue, $exchange);

$msg_body = 'the body';
$msg = new AMQPMessage($msg_body, array('content_type' => 'text/plain', 'delivery_mode' => 2));
$ch->basic_publish($msg, $exchange);
/**
* Close a connection to RabbitMQ
*/
$ch->close();
$conn->close()
?>