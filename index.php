<?php

 class ReadingList
 {
     protected $stack;
     protected $limit;


     public function __construct($limit = 10)
     {
         $this->stack = array();

         $this->limit = $limit;
     }

     public function push($item)
     {
         if (count($this->stack) < $this->limit){
             array_unshift($this->stack, $item);
         }else {
             throw new RuntimeException('stack is full');
         }
     }

     public function pop()
     {
         if ($this->isEmpty()){
             throw new RuntimeException('Stack is empty');
         } else {
             return array_shift($this->stack);
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


 $myBook = new ReadingList();

 $myBook->push('A Dream of Spring');
 $myBook->push('The Winds of Winter');
 $myBook->push('A Dance with Dragons');
 $myBook->push('A Feast for Crows');
 $myBook->push('A Storm of Swords');
 $myBook->push('A Class of Kings');
 $myBook->push('A Game of Thrones');



 echo $myBook->top().'<br>';

 $myBook->pop();

 $myBook->push('The Armageddon Rag');
 echo $myBook->pop();