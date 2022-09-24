<?php 

//Binary Trees

class Node{
    public $data = NULL;
    public $left = NULL;
    public $right = NULL;
    
    public function __construct($data){
        $this->data = $data;
    }

}

/**
 * Note the the Binary Search Tree (BST) always have bigger values
 * to the right and smaller values to the left.
 * 
 * The new node must not be equal to any node in the tree.
 * 
 * The last nodes in a tree must point to null
 */
class BinarySearchTree{
    public $root;

    public function __construct(){
        $this->root = NULL;
    }

    /**
     * Insert a new node into the tree
     */
    public function insertNode($data){
        //Create a new node
        $newNode = new Node($data);

        //Is root node null?
        if($this->root === NULL){
            $this->root = $newNode;
            return TRUE;
        }

        $currentNode = $this->root;

        while(TRUE){
            //Does new node exist
            if($currentNode->data === $newNode->data) return "Invalid New Node!";
            
            //Is new node to the left or to the right
            if($newNode->data < $currentNode->data){
                
                if($currentNode->left === NULL ){
                    $currentNode->left = $newNode;
                    return TRUE;
                }

                $currentNode = $currentNode->left;

            }else if($newNode->data > $currentNode->data){
                if($currentNode->right === NULL ){
                    $currentNode->right = $newNode;
                    return TRUE;
                }

                $currentNode = $currentNode->right;
            }
        }

        return FALSE;
        
    }

    /**
     * Find a node in the tree
     */
    public function findNode($data){
        //Is root node null?
        if($this->root === NULL) return FALSE;

        $currentNode = $this->root;

        while($currentNode !== NULL){
           
            //Is new node to the left or to the right
            if($data < $currentNode->data){
                $currentNode = $currentNode->left;
            }else if($data > $currentNode->data){
                $currentNode = $currentNode->right;
            }else if($data === $currentNode->data){
                return $currentNode->data;
            }
        }
        
    }

    /**
     * Find the minimum node in the tree
     */
    public function findMinNode($currentNode){
        //Is root node null?
        if($currentNode === NULL) return FALSE;

        while($currentNode->left !== NULL){
            $currentNode = $currentNode->left;
        }

        return $currentNode->data;
        
    }

    /**
     * Find the maximum node in the tree
     */
    public function findMaxNode($currentNode){
        //Is root node null?
        if($currentNode === NULL) return FALSE;

        while($currentNode->right !== NULL){
            $currentNode = $currentNode->right;
        }

        return $currentNode->data;
        
    }

    /**
     * Delete a node from the tree
     */
    public function deleteNode($currentNode){

    }

    /**
     * Find the height of the tree
     */
    public function treeHeight(){

    }


}

//Create the Tree Object
$myTree = new BinarySearchTree();

//Insert Node
$myTree->insertNode(45);
$myTree->insertNode(23);
$myTree->insertNode(20);
$myTree->insertNode(67);
$myTree->insertNode(50);
$myTree->insertNode(70);

var_dump($myTree);

echo '<br />'.$myTree->findNode(23);
echo '<br />'.$myTree->findMinNode($myTree->root);
echo '<br />'.$myTree->findMaxNode($myTree->root);

echo "<hr>";

echo "<pre>";
print_r($myTree);
echo "</pre>";
