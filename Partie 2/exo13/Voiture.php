<?php

class Voiture {

    private string $brand;
    private string $model;
    private int $door_nb;
    private int $actual_speed;
    private bool $isMotorOn;

    function __construct(string $brand, string $model, string $door_nb){
        $this->brand = $brand;
        $this->model = $model;
        $this->door_nb = $door_nb;
        $this->actual_speed = 0;
        $this->isMotorOn = false;
    }


    public function demarrer(){
        if($this->isMotorOn){
            return "
            Le vehicule $this->brand $this->model est déjà démarré
            <br />";
        } else {
            $this->isMotorOn = true;
            return " Le vehicule $this->brand $this->model démarre <br />";
        }
    }

    public function accelerer($speed){
        if(!$this->isMotorOn){
            return "
            Le vehicule $this->brand $this->model veut accélérer de $speed km/h <br />
            Pour accélérer, il faut démarrer le véhicule $this->brand $this->model !
            <br />";
        } else {
            $this->actual_speed += $speed;
            return "Le vehicule $this->brand $this->model accélère de $speed km/h <br />";
        }
    }

    public function ralentir($speed){
        if(!$this->isMotorOn){
            return "
            Le vehicule $this->brand $this->model veut ralentir de $speed km/h <br />
            Pour ralentir, il faut démarrer le véhicule $this->brand $this->model !
            <br />";
        } else if($this->actual_speed - $speed < 0) {
            return "
            Le vehicule $this->brand $this->model veut ralentir de $speed km/h mais sa vitesse ($this->actual_speed km/h) ne permet pas de décélérer de $speed km/h <br />
            <br />";
        } else {
            $this->actual_speed -= $speed;
            return "Le vehicule $this->brand $this->model ralenti de $speed km/h <br />";
        }
    }

    public function stopper(){
        if($this->actual_speed > 0){
            return "Pour être stoppé, le vehicule $this->brand $this->model a besoin de 
            décélérer de $this->actual_speed km/h <br />";
        } else {
            $this->isMotorOn = false;
            return "Le vehicule $this->brand $this->model est stoppé <br />";
        }
    }

    //Getter
    public function getSpeed(){
        return $this->actual_speed;
    }

    public function getCarName(){
        return "$this->brand $this->model";
    }

    public function getDoorNumber(){
        return $this->door_nb;
    }

    public function getMotorStatus(){
        return $this->isMotorOn;
    }

    //Setter
    public function setSpeed($speed){
        $this->actual_speed = $speed;
        return $this->actual_speed;
    }

    public function setCarName(){
        return "$this->brand $this->model";
    }

    public function setDoorNumber(){
        return $this->door_nb;
    }

    public function setMotorStatus(){
        return $this->isMotorOn;
    }

    function __toString(){
        return "
            Nom et modèle du véhicule: $this->brand $this->model <br />
            Nombre de portes: $this->door_nb <br />
            Le vehicle $this->brand $this->model est ". ($this->isMotorOn ? "démarré" : "arrêté")." <br />
            Sa vitesse actuelle est de : $this->actual_speed km/h <br />
        ";
    }

}

?>