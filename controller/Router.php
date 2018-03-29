<?php

class Router{
    private $data;
    private $JSONView;
    private $flipController;
    private $oddController;
    private $untilController;
    private $defaultController;
    private $dataHandler;
    
    public function __construct(){
        // Initialize Controllers
        $this->initializeControllers();
        // Initialize ArbitraryArray;
        $this->getData();
    }
    
    private function getData(){
        $this->data = $this->dataHandler->getArbitraryArray();
    }
    
    private function initializeControllers(){
        $this->JSONView = new JSONView();
        $this->flipController = new FlipController();
        $this->oddController = new OddController();
        $this->untilController = new UntilController();
        $this->dataHandler = new ArbitraryArray();
        $this->defaultController = new DefaultController();
    }
    
    public function route(){        
        $until_parameter;
        $simulation_paramter;
        
        if(isset($_GET['until'])){
            $until_parameter = $_GET['until'];
        }
        if(isset($_GET['simulation'])){
            $simulation_parameter = $_GET['simulation'];
        }
        
        if($simulation_parameter == 'flip'){
            $this->flipController->handle($this->data, $this->JSONView);
        } elseif ($simulation_parameter == 'odd') {
            $this->oddController->handle($this->data, $this->JSONView);
        } elseif ($simulation_parameter == 'until') {
            $this->untilController->handle($this->data, $until_parameter, $this->JSONView);
        } else {
            $this->defaultController->handle($this->JSONView);

        }
        
        /*
        switch($simulation_parameter){
            case 'flip':
                $this->flipController->handle($this->data, $this->JSONView);
                break;
            case 'odd':
                $this->oddController->handle($this->data, $this->JSONView);
                break;
            case 'until':
                $this->untilController->handle($this->data, $until_parameter, $this->JSONView);
                break;
            default:
                $this->defaultController->handle($this->JSONView);
        }
        
         * 
         */ 
    }
}

