<?php
/**
 *Author: Katie Stinson
 *Date: 2/28/23
 *File: three_dimensional_shape.class.php
 *Description:
 */

abstract class ThreeDimensionalShape extends Shape{

    //Abstract method to return the area
    abstract protected function getArea();
//Abstract method to return the volume
    abstract protected function getVolume();

    //method to print information
    public function toString() {
        echo "<h2>" . $this->getName() . "</h2>";
        printf("Area: %0.2f", $this->getArea());
        printf("<br />Volume: %.2f", $this->getVolume());
    }
}