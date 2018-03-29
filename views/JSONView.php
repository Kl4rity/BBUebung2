<?php

class JSONView {
    
    public function __construct(){
        header('Content-Type: application/json');
    }
    
    public function streamOutput($data){
        // Accepts a dictionary
        $jsonOutput = json_encode($data);
        echo $jsonOutput;
    }
    
    public function buildResponse($simulation, $responseData){
        $response = array(
            'simulation' => $simulation
            , 'result' => $responseData
        );
        
        return $response;
    }
}

