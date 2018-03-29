<?php

class FlipController{
    
    public function __construct(){

    }
    
    public function handle($_data, $JSONView){
        $responseData = array();
        
        foreach($_data as $entry){
            array_unshift($responseData, $entry);
        }
        
        $response = $JSONView->buildResponse('flip', $responseData);
        
        $JSONView->streamOutput($response);
    }
}

