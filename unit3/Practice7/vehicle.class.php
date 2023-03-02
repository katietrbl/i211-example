<?php
/**
 *Author: Katie Stinson
 *Date: 3/2/23
 *File: vehicle.class.php
 *Description: vehicle class
 */

abstract class Vehicle{
    private $make;

    //constructor
    public function __construct($make){
        $this->make = $make;
    }

    //getters
    public function getMake(){
        return $this->make;
    }

    //abstract method
    abstract public function horn();
}