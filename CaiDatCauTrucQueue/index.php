<?php

include_once "Queue.php";

$queue = new Queue();
$queue->enqueue("ABCD");
$queue->enqueue("EFGH");
$queue->enqueue("IJKL");

print("<pre>" . print_r($queue, true) . "</pre>");

echo $queue->dequeue() . "<br>";
echo $queue->dequeue() . "<br>";

var_dump($queue->isEmpty());

$queue->enqueue("123");
$queue->enqueue("456");

echo $queue->dequeue() . "<br>";
echo $queue->dequeue() . "<br>";
echo $queue->dequeue() . "<br>";

var_dump($queue->isEmpty());
