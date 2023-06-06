<?php

class Personne {

    private string $name;
    private string $surname;
    private DateTime $birthday;

    function __construct(string $name, string $surname, string $birthday){
        $this->name = $name;
        $this->surname = $surname;
        $this->birthday = new DateTime($birthday);
    }

    public function getName(){
        return $this->name;
    }
    public function setName(string $name){
        $this->name = $name;
    }
    public function getSurname(){
        return $this->surname;
    }
    public function setSurname(string $surname){
        $this->surname = $surname;
    }

    public function getAge(){
        $now = new DateTime('now');
        $ecard = $now->diff($this->birthday);
        return $ecard;
    }

    public function setBirthday(string $birthday){
        $this->birthday = new DateTime($birthday);
    }


    public function __toString()
    {
        return $this->name." ".$this->surname." a ".$this->getAge()->format("%y ans %m mois %d jours");
    }
}

?>