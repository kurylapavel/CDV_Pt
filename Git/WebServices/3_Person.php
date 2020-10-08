<?php
require_once './class/Person.php'; 

$person = new Person();

$person->SetName("Pavel");
$person->Setsurname("Kuryla");
$person->SetAge(20);
$person->SetHeight(194.2);
$person->GetData();
?>