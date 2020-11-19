<?php

include_once ("Stack.php");

$arr = [1,4,4,5,20,58,8,9];

echo   "  mang ban dau <br>";
print "<pre>" . print_r($arr , true) . "</pre>";

$stack = new Stack();
foreach ($arr as $value){
    $stack->push($value);
}

echo " : mang sau khi dao nguoc";
print "<pre>". print_r($stack, true). "</pre>";

