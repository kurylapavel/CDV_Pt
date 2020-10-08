<?php

    class User{
        public $name;
        public $surname;
        public $color;
        
        public function SetName($value){
            $this->name = $value;
        }

        public function GetName(){
            echo<<<TEXT
            <hr>My name is $this->name<hr>
TEXT;
        }

        public function SetColorAndSurname($color,$surname){
            $this->surname = $surname;
            $this->color = $color;
        }

        public function GetColorAndSurname(){
            echo<<<TEXT
            <hr>My surname is $this->name <br>
            My color is $this->color<hr>
TEXT;
        }

    }

    $user1 = new User();
    
    $user1->SetName("Pavel");

    echo $user1->name;

    $user1->GetName();

    $user1->SetColorAndSurname("Kuryla","Green");

    $user1->GetColorAndSurname();
?>