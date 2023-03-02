<?php
/**
 *Author: Katie Stinson
 *Date: 2/28/23
 *File: cube.class.php
 *Description:
 */

class Cube extends ThreeDimensionalShape{

    // declare private attribute
    private $side;

    //constructor
    public function __construct($side) {
        $this->side = $side;
    }

    //method to return the name
    public function getName() {
        return "Cube";
    }

    //method to return the area
    public function getArea() {
        return 6 * pow($this->side, 2);
    }

    //method to return the volume
    public function getVolume() {
        return pow($this->side, 3);
    }
}