<?php
/**
 * Created by PhpStorm.
 * User: cbitoi
 * Date: 24/06/15
 * Time: 21:36
 */

require_once __DIR__ . '/vendor/autoload.php';

use PhpAmqpLib\Connection\AMQPConnection;
use PhpAmqpLib\Message\AMQPMessage;

$connection = new AMQPConnection('localhost', 5672, 'guest', 'guest');
$channel = $connection->channel();

$channel->queue_declare('queue2', false, false, false, false);

$msg = new AMQPMessage($data,
    array('delivery_mode' => 2) # make message persistent
);

$channel->basic_publish($msg, '', 'queue2');