<?php


class stack
{
    protected $stack;
    protected $limit;

    public function __construct($limit = 20)
    {
        $this->stack = array();
        $this->limit = $limit;
    }

    public function push($item)
    {
        if (count($this->stack) < $this->limit){
            array_unshift($this->stack, $item);
        } else {
            throw new RuntimeException('ban da sai');
        }
    }

    public function pop()
    {
        if ($this->isEmpty()){
            throw new RuntimeException("Stack");
        } else {
            array_shift($this->stack);
        }
    }

    public function top()
    {
        return current($this->stack);
    }

    public function isEmpty()
    {
        return empty($this->stack);
    }

}


$stack = new Stack();
$stack->push("dung");
$stack->push("tong");
$stack->push(32);
$stack->push("thanh");
$stack->push("hoa");
print ("<pre>" . print_r($stack, true)."</pre>");


$stack->pop();
$stack->pop();
$stack->pop();
$stack->pop();
$stack->pop();
print ("<pre>" . print_r($stack, true)."</pre>");

var_dump($stack->isEmpty());


