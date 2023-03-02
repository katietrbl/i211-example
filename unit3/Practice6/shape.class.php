<?php

/*
 * Author: your name
 * Date: today's date
 * Name: shape.class.php
 * Description: this class models a geometric shape. This is an abstract, superclass.
 */

abstract class Shape {
    //private attribute
    private $name;
    
    //No constructor or destructor to define
    
    //abstract method to return the name
    abstract protected function getName();
    
} //end of Shape class
?>