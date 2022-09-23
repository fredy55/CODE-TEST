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

    //inserting at front
    public function insertAtFront($data){
        $newNode = new Node($data);

        if($this->headNode === null){
            $this->headNode = $newNode;
            $this->tailNode = $newNode;
        }else{
            $temp = $this->headNode;
            $this->headNode = $newNode;
            $newNode->next = $temp;
            $temp->prev = $newNode;

        }
        $this->count++;
        $this->display();

    }

    public function insertAtPos($data,$pos){
        if($this->headNode != null){
            $current = $this->headNode;

            for($i = 0;$i < $pos;$i++){
                $current = $current->next;
            }

            $newNode = new Node($data);

            $previousNode = $current->prev;
            $newNode->next = $current;
            $current->prev = $newNode;
            $previousNode->next = $newNode;
            $newNode->prev = $previousNode;
            $this->count++;
            $this->display();

        }
    }

    public function insertAtLast($data){
        $newNode = new Node($data);
        if($this->headNode === null){
            $this->headNode = $newNode;
            $this->tailNode = $newNode;
        }else{
            $temp = $this->tailNode;
            $this->tailNode = $newNode;
            $temp->next = $newNode;
            $newNode->prev = $temp;
        }
        $this->count++;
        $this->display();
    }

    public function deleteHead(){
        if($this->headNode != null){
            $this->headNode = $this->headNode->next;
            $this->headNode->prev= null;
        }
        $this->count--;
        $this->display();

    }

    public function deleteTail(){
        if($this->tailNode != null){
            $current = $this->tailNode;
            if($current->prev == null){
                $this->headNode = null;
                $this->tailNode = null;
            }else{
                $this->tailNode = $this->tailNode->prev;
                $this->tailNode->next = null;
            }

            $this->count--;
            $this->display();
        }
    }

    public function delete($data){

        if($this->headNode->data == $data){
            $this->deleteHead();
        }

        else if ($this->headNode != null){
            $current = $this->headNode;

            $n = $this->count;
            for($i = 0;$i < $n; $i++){
                if($current->data == $data){

                    $previousNode = $current->prev;
                    $nextNode = $current->next;
                    $previousNode->next = $nextNode;
                    $nextNode->prev = $previousNode;
                }
                $current = $current->next;
            }
        }
        $this->count--;
        $this->display();
    }



    //display
    public function display(){
        $current = $this->headNode;
        while($current !== null){
            echo $current->data,"->";
            $current = $current->next;
        }
        echo "null\n";
    }

}


$dl = new DoublyLinkedList();


$dl->insertAtFront(1);
$dl->insertAtFront(2);
$dl->insertAtFront(3);
$dl->insertAtLast(10);
$dl->insertAtLast(11);


$dl->insertAtPos(4,2);
$dl->insertAtPos(5,1);
$dl->deleteTail();
$dl->deleteTail();
$dl->delete(5);
$dl->delete(3);




