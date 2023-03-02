<?php
/**
 *Author: Katie Stinson
 *Date: 2/28/23
 *File: sphere.class.php
 *Description:
 */

class Sphere extends ThreeDimensionalShape{

    //declare private attribute
    private $radius;
    //constructor
    public function __construct($r) {
        $this->radius = $r;
    }

    //method to return the name
    public function getName() {
        return "Sphere";
    }
    //method to return the area
    public function getArea() {
        return 4 * pow($this->radius, 2) * M_PI;
    }

    //method to return the volume
    public function getVolume() {
        return 4/3 * pow($this->radius, 3) * M_PI;
    }
}