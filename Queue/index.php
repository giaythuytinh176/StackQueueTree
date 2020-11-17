<?php

include_once "Queue.php";

$queue = new Queue();
$queue->enqueue("start");
$queue->enqueue(1);
$queue->enqueue(2);
$queue->enqueue(3);
$queue->enqueue(4);
$queue->enqueue("End");

print("<pre>" . print_r($queue, true) . "</pre>");

while (!$queue->isEmpty()) {
    echo $queue->dequeue() . "\n";
}

//print("<pre>" . print_r($queue, true) . "</pre>");