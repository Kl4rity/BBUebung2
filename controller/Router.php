<?php

class Router{
    private $data;
    private $JSONView;
    private $flipController;
    private $oddController;
    private $untilController;
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
                $this->flipController.manipulate();
            case '/odd':
                $this->oddController.manipulate();
            case 'until':
                $this->untilController.manipulate();
            default:
                //Serve empty or 404 page
                //Bypassing JSONView by doing so?
        }
        
        // switch-case matching the requested page to the controller
        // remember to keep logic for routing in the controllers (not here.)
        
    }
    
    private function initializeControllers(){
        $this->flipController = new FlipController;
        $this->oddController = new OddController;
        $this->untilController = new UntilController;
        $this->dataHandler = new ArbitraryArray();
    }
}

