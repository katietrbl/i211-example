<?php
/**
 * Author: Katie Stinson
 * Date: 2/22/23
 * File: rectangle.class.php
 * Description:create rectangle class
 */

//creates a new rectangle class
class Rectangle {
    //creates the attributes
    protected $width;
    protected $length;

    //constructor function
    public function __construct($width, $length) {
        $this->width = $width;
        $this->length = $length;
    }
//gets the width value
    public function getWidth():float {
        return $this->width;
    }
//get length
    public function getLength():float {
        return $this->length;
    }

    //calculate the area of a rectangle
    public function getArea():float {
        return $this->width * $this->length;

    }
    //calculate the perimeter of a rectangle
    public function getPerimeter():float {
        return 2 * ($this->width + $this->length);
    }
}
