<?php

include_once "Stack.php";

$stack = new ReadingList();

$stack->push(10);
$stack->push(111);
$stack->push(2222);

print("<pre>" . print_r($stack, true) . "</pre>");
echo $stack->pop() . "<br>";
echo $stack->pop() . "<br>";
echo $stack->pop();


print("<pre>" . print_r($stack, true) . "</pre>");