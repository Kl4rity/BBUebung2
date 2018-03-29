<?php

class DefaultController{
    
    public function __construct(){
        
    }
    
    public function handle($JSONView){
        $JSONView->streamOutput($JSONView->buildResponse('None', 'none'));
    }
}

