<?php

class ArbitraryArray{
    private $arbitraryArray;
    
    public function __construct(){
        //Initialize Array
        $this->arbitraryArray = array();
        //loads data into Array.
        $this->loadDataFromJson();
    }
    
    private function loadDataFromJson(){
        $arbitraryArrayLocation = DATAPATH . "data.json";
        $arbitraryArrayRawData = file_get_contents($arbitraryArrayLocation);
        $this->arbitraryArray = json_decode($arbitraryArrayRawData);
    }
    
    public function getArbitraryArray(){
        return $this->arbitraryArray->data;
    }
}

