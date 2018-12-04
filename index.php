<?php

class Person {
    private $firstname;
    private $lastname;

    public function setFirsname($pFirstname){
        $this->firstname = $pFirstname;
    }

    public function setLastname($pLastname){
        $this ->lastname = $pLastname;
    }

 }

$person1 = new Person();
 $person1 ->setFirsname("Jean");
 $person1 ->setLastname("Martin");

$person2 = new Person();
 // $person1 ->setFirsname("Jeanne");
 // $person1 ->setLastname("Martin");

var_dump($person1);
var_dump($person2);
