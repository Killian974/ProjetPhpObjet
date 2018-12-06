<?php

interface IAction {
    public function avancer();
}

class Car extends Vehicule implements IAction {
    
    public function avancer() {
        var_dump("Je suis un Car et j'avance");
    }
}
class Bike extends Vehicule implements IAction{

    public function avancer() {
        var_dump("Je suis un Bike et j'avance");
    }
}

class User implements IAction {

    private $vehicule;

    public function setVehicule(IAction $pVehicule) {
        $this->vehicule = $pVehicule;
    }
    //

