<?php

include_once "queue.php";


$queue = new Queue();
$queue->enqueue("smith",5);
$queue->enqueue("jane",4);
$queue->enqueue("foback",1);
$queue->enqueue("jack",1);

$arr = [];
while (!$queue->isEmpty()){
    $arr[] = $queue->dequeue();
}

foreach($arr as $asv){
    echo $asv[0] . "," . $asv[1]. "<br/>";
}

echo "<br/>";
echo "<br/>";
echo "<br/>";

usort($arr, function($b, $a){
    return $a[1] <=> $b[1];
});


foreach ($arr as $value) {
    echo $value[0] .",". $value[1] ."<br/>";


}


print "<pre>" . print_r($queue, true). "</pre>";

die();