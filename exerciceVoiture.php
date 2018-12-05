<?php

    class vehicule {
        private $typeMoteur ;
        private $typeCarburant ;
        private $nbPassagers;
        private $nbVitesse ;
    }

    class terrestre extends vehicule {
        private $nbRoues;
    }

    class nautique extends vehicule {}
    
    
    class voiture extends terrestre {}
    class moto extends terrestre {}
    class bateau extends nautique {}
    class jetSki extends nautique {}
        
    
     


































        public function __construct(string $pTypeMoteur) {
            $this->typeMoteur = $pTypeMoteur;
        }
        public function __construct(string $pTypeCarburant) {
            $this->typeCarburant = $pTypeCarburant;
        }
        public function __construct(string $pNbRoues) {
            $this->nbRoues = $pNbRoues;
        }
        public function __construct(string $pNbPassagers) {
            $this->nbPassagers = $pNbPassagers;
        }
        public function __construct(string $pNbVitesse) {
            $this->nbVitesse = $pNbVitesse;
        }
    

    
    public function getTypeMoteur(): int
    {
        return $this->typeMoteur;
    }
   
    public function setTypeMoteur(string $typeMoteur): string
    {
        $this->typeMoteur = $typeMoteur;
    }
    public function getTypeCarburant(): int
    {
        return $this->typeCarburant;
    }
   
    public function setTypeCarburant(string $typeCarburant): string
    {
        $this->typeCarburant = $typeCarburant;
    }
    public function getNbRoues(): int
    {
        return $this->nbRoues;
    }
   
    public function setNbRoues(string $typeMoteur): string
    {
        $this->typeMoteur = $typeMoteur;
    }
}

