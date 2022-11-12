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
    public $currentNode = null;
    public $counter = 0;

    /**
     * Insert new node at the end of the linkedlist
     */
    public function insertNodeAtEnd($data){
        $newNode = new Node($data);

        if($this->headNode == NULL){
            $this->headNode = $newNode;
        }else{
            $currentNode = $this->headNode;

            while($currentNode->next !== NULL){
                $currentNode = $currentNode->next;
            }
            
            $currentNode->next = $newNode;   
        }

        $this->counter++;
        return true;
    }

    /**
     * Insert new node at the begining of the linkedlist
     */
    public function insertNodeAtStart($data){
        $newNode = new Node($data);

        if($this->headNode == NULL){
            $this->headNode = &$newNode;
        }else{
            $currentNode = $this->headNode;
            $this->headNode = &$newNode;
            $this->headNode->next = $currentNode;
            $this->counter++;  
        }
         
        return true;
    }

    /**
     * Insert new node before current node in the linkedlist
     */
    public function insertNodeBefore($data, $pointer){
        $newNode = new Node($data);

        if($this->headNode !== NULL){
            $currentNode = $this->headNode;
            $prevNode = NULL;

            while($currentNode->next !== NULL){
                
                if($currentNode->data === $pointer){
                    $newNode->next = $currentNode;
                    $prevNode->next = $newNode;
                    $this->counter++;
                    break;
                }

                $prevNode = $currentNode;
                $currentNode = $currentNode->next;
            }
            
             
        }
    }

    /**
     * Insert new node after current node in the linkedlist
     */
    public function insertNodeAfter($data, $pointer){
        $newNode = new Node($data);

        if($this->headNode !== NULL){
            $currentNode = $this->headNode;
           
            while($currentNode->next !== NULL){
                
                if($currentNode->data === $pointer){
                    $nextNode = $currentNode->next;
                    $currentNode->next = $newNode;
                    $newNode->next = $nextNode;
                    $this->counter++;
                    break;
                }

                $currentNode = $currentNode->next;
            }
            
             
        }
    }

    /**
     * Search for a node by index in the linkedlist
     */
    public function searchNode($index){
        
        if($this->headNode !== NULL){
            $currentNode = $this->headNode;
            $count = 0;
           
            while($currentNode->next !== NULL){
                
                if($count === $index){
                    return $currentNode->data;  
                }

                $currentNode = $currentNode->next;
                $count++;
            }

            return "NOT FOUND!";
        }else{
            return "EMPTY LIST!";
        }
    }

    /**
     * Delete the last node in the linkedlist
     */
    public function deleteLastNode(){
        
        if($this->headNode !== NULL){
            $currentNode = $this->headNode;
            
            if($currentNode->next === NULL){
                $this->headNode = NULL;
            }else{
                $prevNode = NULL;

                while($currentNode->next !== NULL){
                    $prevNode = $currentNode;
                    $currentNode = $currentNode->next;
                }
                
                $prevNode->next = NULL;
                $this->counter--;
                return TRUE;
            }  
        }

        return FALSE;
    }

    /**
     * Delete the first node in the linkedlist
     */
    public function deleteFirstNode(){
        
        if($this->headNode !== NULL){

            $currentNode = $this->headNode;
            
            if($currentNode->next !== NULL){
                $currentNode = $currentNode->next;
                $this->headNode = $currentNode;
            }else{
                $this->headNode = NULL;
            } 

            $this->counter--;
            return TRUE;
        }

        return FALSE;
    }

    /**
     * Delete the first node in the linkedlist
     */
    public function deleteNode($delNode){
        
        if($this->headNode !== NULL){

            $currentNode = $this->headNode;
            $prevNode = NULL;

            while ($currentNode->next !== NULL) {
                if($currentNode->data === $delNode){
                    
                    if($currentNode->next === NULL){
                        $prevNode->next = NULL;
                    }else{
                        $prevNode->next = $currentNode->next;
                    }
                    
                    $this->counter--;
                    break;
                }
            
                $prevNode = $currentNode;
                $currentNode = $currentNode->next;
            }
        }

        return FALSE;
    }

    /**
     * Reverse the nodes of the linkedlist
     */
    public function reverseNode(){
        
        if($this->headNode !== NULL){
            if($this->headNode->next !== NULL){

                $currentNode = $this->headNode;
                $reverseNode = NULL;
                $tempNode = NULL;
            
                while($currentNode !== NULL){
                    $tempNode = $currentNode->next;
                    $currentNode->next = $reverseNode; //Flips the node
                    $reverseNode = $currentNode;
                    $currentNode = $tempNode;
                }

                $this->headNode = $reverseNode;
            }
        }
    }

    /**
     * Display LinkedList nodes
     */
    public function display(){
        $currentNode = $this->headNode;
        $count = 1;
        while($currentNode !== NULL){
            echo "Node {$count} => {$currentNode->data} <br />";
            $currentNode = $currentNode->next;
            $count++;
        }
    }
}

$myList = new LinkedList();
$myList->insertNodeAtEnd(9);
$myList->insertNodeAtEnd(43);
$myList->insertNodeAtEnd(12);

$myList->insertNodeAtStart(5);
$myList->insertNodeBefore(34, 43);
$myList->insertNodeAfter(90, 43);

// $myList->deleteLastNode();
// $myList->deleteFirstNode();
// $myList->deleteNode(34);

$myList->reverseNode();

var_dump($myList);

$myList->display();

echo "<br>".$myList->searchNode(4);

// foreach ($myList as $list) {
//      echo $list->data;
// }