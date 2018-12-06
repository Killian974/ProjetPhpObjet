<?php

interface IAction {
    public function seMarier();
}



class person implements IAction {
    public function seMarier(); 

    private $partner ;
    private $firstname ;
    private $lastname ;

    }

class dog implements IAction {
    public function seMarier();
    private $partner ;
    private $name ;
}
    //