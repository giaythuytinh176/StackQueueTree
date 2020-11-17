<?php

include_once "Stack.php";

$stack = new Stack();

$stack->push(111);
$stack->push(222);
$stack->push(333);
$stack->push(444);
$stack->push(555);

$stack->pop();
$stack->pop();

$stack->push(666);
$stack->push(777);

$stack->pop();
$stack->pop();
$stack->pop();
$stack->pop();
$stack->pop();

var_dump($stack->isEmpty());




print("<pre>" . print_r($stack, true) . "</pre>");
