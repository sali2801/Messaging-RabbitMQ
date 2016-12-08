<?php
/*
* This EmailService file represent a consumer that receives messages.	
*/
	
require('vendor/autoload.php');
define('AMQP_DEBUG', true);
use PhpAmqpLib\Connection\AMQPConnection;
use PhpAmqpLib\Message\AMQPMessage;

//New connection to the RabbitMQ server + declare queue
$url = parse_url(getenv('CLOUDAMQP_URL'));
$conn = new AMQPConnection($url['host'], 5672, $url['user'], $url['pass'], substr($url['path'], 1));
$ch = $conn->channel();
$queue = 'basic_get_queue';
$ch->queue_declare($queue, false, true, false, false);

/*
* This function processes the message passed by the sender. 
*/
$callback = function($msg) {
  
  //Output that the message was received
  echo " * Message received...", "\n";
  
  //Convert the JSON string back to an array.
  $retrived_msg = json_decode($msg->body, true);

  // Extract the data and assign them to each of their own variables:
  $field_first_name=$retrived_msg['field_first_name'];
  $field_birthdate=$retrived_msg['field_birthdate'];
  $mail=$retrived_msg['mail'];
  $field_mobile=$retrived_msg['field_mobile'];
  $pass=$retrived_msg['pass']; 

//Heroku doesn't allow send e-mails using PHP. Hence, SendGrid service is used(which is an add-on Heroku for providing scalable email delivery)
//First, set the subject, from field, to field, and body of the message.
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

//API Key is used by the application to authenticate access to SendGrid services. 
$apiKey = getenv('SENDGRID_API_KEY');
$sg = new \SendGrid($apiKey);

//Send the message
 $response = $sg->client->mail()->send()->post($mail);

};
//QOS prefetch_count=1 : don't dispatch a new message to a worker until it has processed and acknowledged the previous one.
$ch->basic_qos(null, 1, null);
//Start a queue consumer.
$ch->basic_consume($queue, '', false, true, false, false, $callback);

// Loop as long as the channel has callbacks registered
while(count($ch->callbacks)) {
    $ch->wait();
}

//close connection
$ch->close();
$conn->close();


 ?>