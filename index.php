<?php
include 'Stack.php';
$example= new Stack(10);
$example->push("kkk");
$example->push("bbb");
$example->push(4);
$example->pop();
if ($example->isEmply()) {
    echo "rong";
} else echo  "K rong";
