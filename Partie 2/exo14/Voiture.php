<?php

class Voiture{

    protected string $brand;
    protected string $model;

    public function __construct($brand, $model){
        $this->brand = $brand;
        $this->model = $model;
    }

    public function getInfos(){
        return "$this->brand $this->model";
    }
}

class VoitureElec extends Voiture{

    private int $_autonomy;

    public function __construct($brand, $model, $autonomy){
        parent::__construct($brand, $model);
        $this->_autonomy = $autonomy;
    }

    public function getInfos(){
        return "$this->brand $this->model - $this->_autonomy";
    }

}


?>