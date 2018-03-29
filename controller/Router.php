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
        $until_parameter;
        
        if(isset($_GET['until'])){
            $until_parameter = $_GET['until'];
        }
        
        switch($requestedURI){
            case '/flip':
                $this->flipController.handle($this->data, $this->JSONView);
            case '/odd':
                $this->oddController.handle($this->data, $this->JSONView);
            case 'until':
                $this->untilController.handle($this->data, $until_parameter, $this->JSONView);
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

