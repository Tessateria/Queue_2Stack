<?php

require_once ('Queue.php');

$queue = new Queue();

$queue->in('1');
$queue->in('2');
$queue->in('3');
$queue->in('4');

echo $queue->out() . PHP_EOL;
echo $queue->out() . PHP_EOL;
echo $queue->out() . PHP_EOL;
echo $queue->out() . PHP_EOL;