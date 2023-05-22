<?php

class Queue{

    private $queue;
    private $limit;

    public function __construct($limit){
        $this->limit = $limit;
        $this->queue = [];
    }

    public function enqueue($data){
        if(count($this->queue) >= $this->limit){
            throw new OverflowException("Queue is full");
        }else{
            array_push($this->queue,$data);
        }
    }

    public function dequeue(){
        if($this->isEmpty()){
            throw new UnderflowException("Queue is empty");
        }else{
            return array_shift($this->queue);
        }
    }

    public function peek(){
        return current($this->queue);
    }

    public function isEmpty(){
        return empty($this->queue);
    }

    public function getQueue(){
        return $this->queue;
    }

}


$queue = new Queue(5);

try{
    $queue->enqueue(1);
    $queue->enqueue(2);
    $queue->enqueue(3);
    $queue->enqueue(4);
    $queue->enqueue(5);
}catch (Exception $e){
    echo $e->getMessage();
}


try{
    $queue->dequeue();
    $queue->dequeue();
    $queue->dequeue();
    $queue->dequeue();
    $queue->dequeue();
    $queue->dequeue();
}catch (Exception $e){
    echo $e->getMessage();
}