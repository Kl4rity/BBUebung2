<?php

class FlipController{
    
    private $data;
    private $responseData;
    
    public function construct_(){
        $this->responseData = array();
        $this->data = array();
    }
    
    public function manipulate($_data, $JSONView){
        $this->data = $_data;
        
        foreach($this->data as $entry){
            array_unshift($this->responseData, $entry);
        }
        $JSONView.streamOutput($responseData);
    }
}

