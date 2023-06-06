<?php

class Personne {

    private string $name;
    private string $surname;
    private $birthday;


    function __construct(string $name, string $surname, string $birthday){
        $this->name = $name;
        $this->surname = $surname;
        $this->birthday = new DateTime($birthday);
    }

    public function getPersonInfo(){
        return [
            "name" => $this->name,
            "surname" => $this->surname,
            "age" => $this->getAge()
        ];
    }

    private function getAge(){
        $now = new DateTime('now');
        $ecard = $now->diff($this->birthday);
        return [
            $ecard->y,
            $ecard->m,
            $ecard->d
        ];
    }
}

?>