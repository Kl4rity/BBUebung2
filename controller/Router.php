<?php

class Router{
    private $data;
    private $JSONView;
    private $flipController;
    private $oddController;
    private $untilController;
    private $defaultController;
    private $dataHandler;
    
    public function construct_(){
        // Initialize Controllers
        initializeControllers();
        // Initialize ArbitraryArray;
        getData();
        // Ready to rock -> Route.
        route();
    }
    
    private function getData(){
        $this->data = $this->dataHandler.getArbitraryArray();
    }
    
    public function route(){
        // get Parameters
        
        //TODO: Figure out how to get the URI and separate the params from it
        $requestedURI = $_SERVER[REQUEST_URI];
        
        switch($requestedURI){
            case '/flip':
                $this->flipController.handle();
            case '/odd':
                $this->oddController.handle();
            case 'until':
                $this->untilController.handle();
            default:
                $this->defaultController.handle($this->JSONView);
        }
    }
    
    private function initializeControllers(){
        $this->flipController = new FlipController;
        $this->oddController = new OddController;
        $this->untilController = new UntilController;
        $this->dataHandler = new ArbitraryArray();
        $this->defaultController = new DefaultController();
    }
}

