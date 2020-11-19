<?php

include_once ("stack.php");

$stack = new Stack();

$number = 43;

while (($result = $number /2) && $result >1){
    $rema = $number % 2;
    $number = $result;
    $stack->push($rema);
    if ($result > 0 && $result <2){
        $stack->push(1);
        break;
    }
}

echo implode("," , $stack->getStack());