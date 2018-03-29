<?php

class JsonView {
    
    public function __construct(){
        header('Content-Type: application/json');
    }
    
    public function streamOutput($data){
        // Accepts a dictionary
        $jsonOutput = json_encode($data);
        echo $jsonOutput;
    }
}

