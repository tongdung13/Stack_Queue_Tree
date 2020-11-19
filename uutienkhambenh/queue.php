<?php


class Elememt
{
    public $value;
    public $next;

}

class Queue
{
    private $font = null;
    private $back = null;


public function isEmpty()
{
    return $this->font == null;
}
  
public function sortByorder($one, $bon){
    return $one[1] - $bon[1];
}

public function enqueue($name, $cofe){
    $oldback = $this->back;
    $this->back = new Elememt();
    $this->back->value = [$name, $cofe];
    if ($this->isEmpty()) {
        $this->font = $this->back;        
    } else {
        $oldback->next = $this->back;
    }
}


public function dequeue(){
    if($this->isEmpty()){
        return null;
    }
    $removeValue = $this->font->value;
    $this->font = $this->font->next;
    return $removeValue;
}

}
