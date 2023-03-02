<?php
/**
 *Author: Katie Stinson
 *Date: 3/2/23
 *File: car.class.php
 *Description: car class
 */

class Car extends Vehicle implements Nameable{
    private $name;

    //constructor
    public function __construct($name, $make){
        parent::__construct($make);
        $this->name = $name;
    }

    //getters
    public function getName(){
        return $this->name;
    }

    //setter
    public function setName($name){
        $this->name = $name;
    }

    //implement horn method
    public function horn(){
        return "Beep beep!";
    }

    //tostring method
    public function toString(){
        echo "<b>Name</b>: ", $this->getName();
        echo "<br><b>Make</b>: ", $this->getMake();
        echo "<br> <b>Horn Sound</b>: ", $this->horn();
    }
}