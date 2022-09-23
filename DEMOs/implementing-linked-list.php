
<?php

 //this is the node object...consider the example of boxes. This is the box you want to collect.
   class Node{
        public $data;
        public $next;
        public $visited;
        
        public function __construct($data){
            $this->data = $data;
            $this->next = null;
            $this->visited = false;
        }
}

//this is the linked list class....This is you who process or holds the box.
class LinkedList
{
    public $headNode = null;
    public $count = 0;
}