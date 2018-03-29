<?php

class OddController{
    
    public function __construct(){

    }
    
    public function handle($_data, $JSONView){
        $responseData = array();
        
            for($i = 0; $i < count($_data); $i++){
               // Append every second element
                if($i%2 == 0){
                    array_push($responseData, $_data[$i]); 
                }
        }
        $response = $JSONView->buildResponse('odd', $responseData);
        $JSONView->streamOutput($response);
    }
}

