<?php 

/**
 * Linked List nodes and classes
 */

class Node{
    public $data;
    public $next;

    public function __construct($data){
        $this->data = $data;
        $this->next = null;
    }
 }

 class LinkedList{
    public $headNode = null;
    public $counter = 0;

    public function insertNode($data){
        $newNode = new Node($data);

        
    }
 }