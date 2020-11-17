<?php

include_once "BinaryTree.php";

$binarytree = new BinaryTree();

$binarytree->insert(1);
$binarytree->insert(7);
$binarytree->insert(6);
$binarytree->insert(5);
$binarytree->insert(100);
$binarytree->insert(44);
$binarytree->insert(220);
$binarytree->insert(-10);
$binarytree->insert(2);
$binarytree->insert(2);
$binarytree->insert(1);

print("<pre>" . print_r($binarytree, true) . "</pre>");