<?php

require_once "LinkedList.php";

class LQueue{
    private $queue;
    private $size = 0;

    public function __construct(){
        $this->queue = new LinkedList();
    }

    public function enqueue($data){

            $this->queue->insert($data);
            $this->size++;

    }

    public function dequeue(){
        if($this->size == 0){
            throw new UnderflowException("Queue is empty");
        }else{
            $this->queue->deleteFirst();
            $this->size--;
        }
    }

    public function peek(){
        if($this->size == 0){
            throw new UnderflowException("Queue is empty");
        }else{
           return $this->queue->headNode->data;
        }
    }


}

$lqueue = new LQueue(10);


    $lqueue->enqueue(1);
    $lqueue->enqueue(2);
    $lqueue->enqueue(3);
    $lqueue->enqueue(4);
    $lqueue->enqueue(5);
    $lqueue->enqueue(6);
    $lqueue->enqueue(7);
    $lqueue->enqueue(8);
    $lqueue->enqueue(9);
    $lqueue->enqueue(10);
    $lqueue->enqueue(11);
    $lqueue->enqueue(12);


echo $lqueue->peek();

try{
    $lqueue->dequeue();
    $lqueue->dequeue();
    $lqueue->dequeue();
    $lqueue->dequeue();
    $lqueue->dequeue();
    $lqueue->dequeue();
    $lqueue->dequeue();
    $lqueue->dequeue();
    $lqueue->dequeue();
    $lqueue->dequeue();
    $lqueue->dequeue();
    $lqueue->dequeue();
    $lqueue->dequeue();
    $lqueue->dequeue();
}catch (Exception $e){
    echo $e->getMessage();
}