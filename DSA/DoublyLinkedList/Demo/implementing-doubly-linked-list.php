<?php

class Node{
    public $data;
    public $prev = null;
    public $next = null;

    public function __construct($data){
        $this->data = $data;
    }

}

class DoublyLinkedList{
    public $headNode = null;
    public $tailNode = null;
    public $count = 0;