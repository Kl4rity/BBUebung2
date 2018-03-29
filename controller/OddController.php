<?php

class OddController{
    
    private $data;
    private $responseData;
    
    public function construct_(){
        $this->responseData = array();
        $this->data = array();
    }
    
    public function handle($_data, $JSONView){
        $this->data = $_data;
        
        for($i = 0; $i < count($this->data); $i++){
            
           // Append 0th element
           if($i == 0){
            array_push($this->responseData, $this->data[$i]);   
           }
           // Append every second element
            if($i%2 == 0){
                array_push($this->responseData, $this->data[$i]); 
            }
        }
        $JSONView.streamOutput($responseData);
    }
    
}

