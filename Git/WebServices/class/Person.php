<?php

   class Person{
    public $name;
    public $surname;
    public $age;
    public $height;



    public function SetName($value){
        $this->name = $value;
    }


    public function SetSurname($surname){
        $this->surname = $surname;
    }
    
    public function SetAge($age){
        $this->age = $age;
    }

    public function SetHeight($height){
        $this->height = $height;
    }

    public function GetData(){
        echo<<<TEXT
        <hr>Dane: </br>
        Imie: $this->name </br>
        Nazwisko: $this->surname </br>
        Wiek: $this->age lat</br>
        Wzrost: $this->height m</br>
        <hr>
TEXT;
    }
}
?>