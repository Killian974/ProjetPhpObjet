<?php

class Dog {

    private $dog1;
    

    public function setNameDog($pNameDog){
        $this->NameDog = $pNameDog;
    }
    
    public function getNameDog() {
        return $this->NameDog;
    }
 }


$dog1 = new Dog();
$dog1->setNameDog("Rex");


// $person2 = new Person();
 // $person1 ->setFirsname("Jeanne");
 // $person1 ->setLastname("Martin");

 var_dump($dog1->getNameDog());

 //var_dump($person1->speak());

// var_dump($person2);