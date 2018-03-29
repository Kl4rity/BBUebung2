<?php

class UntilController{
    
    private $data;
    private $responseData;
    
    public function construct_(){
        $this->responseData = array();
        $this->data = array();
    }
    
    public function handle($_data, $_target, $JSONView){
        $this->data = $_data;
        
        $i = 0;
        
        while($this->data[$i] != $target){
            array_append($this->responseData, $this->data[$i]);
        }
        
        $JSONView.streamOutput($responseData);
    }
    
}

