 <?php
include_once ("Queue.php");
include_once ("Stack.php");

$stack = new  Stack(100);
$queue = new  Queue();

$str = "you is I sos I si uoy";
$arr = [];
for ($i = 0; $i < strlen($str); $i++){
    $arr[] = $str[$i];
}

foreach ($arr as $value){
    $stack->push($value);
    $queue->enqueue($value);
}

$c1 = $stack->getStack();

$c2 = [];
while (!$queue->isEmpty())
{
    $c2[] = $queue->dequeue();
}

if ($c1 == $c2){
    echo "chuoi doi xung";
}else {
    echo "chuoi khong dou xung";
}

print "<pre>" . print_r($c1,true). "</pre><br/>";
print "<pre>" . print_r($c2,true). "</pre>";
die();
