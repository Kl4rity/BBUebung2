<?php

class DefaultController{
    
    private $response;
    
    public function construct_(){
        createDefaultResponse();
    }
    
    public function handle($JSONView){
        $JSONView.streamOutput($this->response);
    }
    
    private function createDefaultResponse(){
        $this->response = array(
            'response' => 'No request provided.'
        );
    }
}

