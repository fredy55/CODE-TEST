<?php 

//Graphs

class Graphs{
    
    public $adjList;

    public function __construct(){
        $this->adjList = [];
    }

    /**
     * Add a new vertex to tree
     */
    public function addVertex($vertex){
       if(!$this->vertexExist($vertex)){
         $this->adjList[$vertex] = [];
         return TRUE;
       }
       return FALSE;
    }

    /**
     * Add a new vertex to tree
     */
    public function addEdge($vertex1, $vertex2){
        if($this->vertexExist($vertex1) && $this->vertexExist($vertex2)){
          array_push($this->adjList[$vertex2], $vertex1);
          array_push($this->adjList[$vertex1], $vertex2);
          return TRUE;
        }
        return FALSE;
    } 
    
    /**
     * Remove an edge from tree
     */
    public function removeEdge($vertex1, $vertex2){

        if($this->vertexExist($vertex1) && $this->vertexExist($vertex2)){
          //find the vertex indexes
          $vertexIndex1 = array_search($vertex1, $this->adjList[$vertex1]);
          $vertexIndex2 = array_search($vertex2,$this->adjList[$vertex2]);
          
          //Remove edges
          unset($this->adjList[$vertex1][$vertexIndex1]);
          unset($this->adjList[$vertex2][$vertexIndex2]);

          return TRUE;
        }

        return FALSE;
    }

    /**
     * Remove a vertex from tree
     */
    public function removeVertex($vertex){
        //If vertex is not in graph
        if(!$this->vertexExist($vertex)) return "Invalid Vertex";

        //Remove vertex edges
        foreach ($this->adjList[$vertex] as $vertex1) {
            $vertIndex = array_search($vertex, $this->adjList[$vertex1]);
            unset($this->adjList[$vertex1][$vertIndex]);
        }

        unset($this->adjList[$vertex]);//Deleete vertex
        return TRUE;
    }


    private function vertexExist($key){
        return array_key_exists($key, $this->adjList);
    }
}

//Create a map object
$myGraph = new Graphs();

$myGraph->addVertex("A");
$myGraph->addVertex("B");
$myGraph->addVertex("C");
$myGraph->addVertex("D");
$myGraph->addEdge("A", "B");
$myGraph->addEdge("A", "C");
$myGraph->addEdge("B", "D");
$myGraph->removeEdge("A", "B");
$myGraph->removeVertex("C");


var_dump($myGraph);

// $array = [];
// $array['A'] = []

echo "<hr>";

echo "<pre>";
print_r($myGraph);
echo "</pre>";