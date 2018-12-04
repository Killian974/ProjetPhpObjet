<?php
var_dump("coucou");

class Person {

    private $firstname;
    private $lastname;

    public function setFirstname($pFirstname){
        $this->firstname = $pFirstname;
    }
    public function setLastname($pLastname){
        $this ->lastname = $pLastname;
    }

    public function getFirstname() {
        return $this->firstname;
    }
    public function getLastname() {
        return $this->lastname;
    }
    public function speak() {
        return "Salut mon nom est " . $this->firstname . " " . $this->lastname;
    }

 }


$person1 = new Person();
$person1->setFirstname("Jean");
$person1->setLastname("Martin");

// $person2 = new Person();
 // $person1 ->setFirsname("Jeanne");
 // $person1 ->setLastname("Martin");

 var_dump($person1->getFirstname());
 var_dump($person1->getLastname());
 var_dump($person1->speak());

// var_dump($person2);

