<?php
include_once ("Node.php");
class Queue
{
    private $font = null;
    private $back = null;

    public function isEmpty()
    {
        return $this->font == null;
    }

    public function enqueue($value)
    {
        $oldBack = $this->back;
        $this->back = new Node();
        $this->back->value = $value;
        if ($this->isEmpty()){
            $this->font = $this->back;
        } else {
            $oldBack->next = $this->back;
        }
    }
    public function dequeue()
    {
        if ($this->isEmpty()){
            return null;
        }
        $removeValue = $this->font->value;
        $this->font = $this->font->next;
        return $removeValue;
    }
}


$queue = new Queue();
$queue->enqueue("start");
$queue->enqueue(1);
$queue->enqueue("End");

$queue->dequeue();
$queue->dequeue();


print "<pre>" . print_r($queue, true). "</pre>";
var_dump($queue->isEmpty());

