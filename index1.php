<?php

    class Animal {
        private $years = 0;
        public function __construct(int $pYears) {
            $this->years = $pYears;
        }
    

    /**
     * @return int
     */
    public function getYears(): int
    {
        return $this->years;
    }
    /**
     * @param int $years
     */
    public function setYears(int $years): void
    {
        $this->years = $years;
    }
}

class Mammal extends Animal {} 

class Oviparous extends Animal {
    private $isMoult = false;
}


    final class Person extends Mammal {
        private $firstname;
        private $lastname;
         public function __construct(string $pFirstname, string $pLastname, int $pYears) {
             parent::__construct($pYears);
     
             $this->firstname = $pFirstname;
             $this->lastname = $pLastname;
        }
    }


final class Dog extends Mammal {
    private $name;
    public function __construct(string $pName, int $pYears) {
        parent::__construct($pYears);
        $this->name = $pName;
    }
}
final class Gecko extends Oviparous {
    private $name;
    public function __construct(string $pName, int $pYears) {
         parent::__construct($pYears);
 
         $this->name = $pName;
     }
 }
 
$person = new Person("John", "Doe", 1);
var_dump($person);

//$dog = new Dog("Boby", 1);
//var_dump($dog);
$gecko = new Gecko("Geek", 1);
var_dump($gecko);