<?php

class UntilController{
    
    public function __construct(){
        
    }
    
    public function handle($_data, $_until, $JSONView){
        $responseData = array();
        $until = strtoupper($_until);
        
        $i = 0;
        
        if(in_array($until, $_data, true)){
            while($_data[$i] != $until){
                array_push($responseData, $_data[$i]);
                $i++;
            }
        } else {
            $responseData = $_data; 
        }
        $response = $JSONView->buildResponse('until', $responseData);
        $JSONView->streamOutput($response);
    }
    
}

