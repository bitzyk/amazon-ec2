<?php
/**
 * Created by PhpStorm.
 * User: cbitoi
 * Date: 22/06/15
 * Time: 23:34
 */
phpinfo(); exit;
require_once __DIR__ . '/vendor/autoload.php';

use PhpAmqpLib\Connection\AMQPConnection;
use PhpAmqpLib\Message\AMQPMessage;

$connection = new AMQPConnection('localhost', 5672, 'guest', 'guest');
$channel = $connection->channel();

$channel->queue_declare('bitzy first queue in rabbitmq', false, false, false, false);