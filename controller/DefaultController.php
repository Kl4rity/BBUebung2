<?php

class DefaultController{
    
    private $responseData;
    
    public function construct_(){
        createDefaultResponse();
    }
    
    public function handle($JSONView){
        $JSONView.streamOutput($this->responseData);
    }
    
    private function createDefaultResponse(){
        $this->responseData = array(
            'response' => 'No request provided.'
        );
    }
}

