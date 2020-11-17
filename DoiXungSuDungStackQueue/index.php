<?php

include_once "Queue.php";
include_once "Stack.php";

$stack = new ReadingList(100);
$queue = new Queue();


$str = "able was I 1re I saw elba";
$arr = [];
for ($i = 0; $i < strlen($str); $i++) {
    $arr[] = $str[$i];
}
$split_str = str_replace(" ", "", $arr);
//$split_str = str_split(str_replace(" ", "", $str), 1);


foreach ($split_str as $value) {
    $stack->push($value);
    $queue->enqueue($value);
}


$isDoiXung = false;
$i = 0;
while (!$queue->isEmpty()) {
    $current = $queue;
    $next = $current->getFont();
    $value = $current->getFont()->value;
    if ($value == $stack->getStack()[$i]) {
        $isDoiXung = true;
        $current = $next;
    }
    $i++;
}
print("<pre>" . print_r(var_dump($isDoiXung), true) . "</pre>");die();

