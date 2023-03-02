<?php
/**
 * Author: Katie Stinson
 * Date: 2/22/23
 * File: pyramid.class.php
 * Description: create pyramid class
 */

require_once 'rectangle.class.php';

class Pyramid extends Rectangle {
    protected $height;

//creates constructor that overrides the parent contructor to add the height variable
    public function __construct($height, $width, $length) {
        //receives the parent constructor
        parent::__construct($width, $length);
        //add height to the parent constructor
        $this->height = $height;

    }
    //---getters + setters---//
//get the rectangle height
    public function getHeight():float
    {
        return $this->height;
    }
//sets the rectangle height
    public function setHeight($height)
    {
        $this->height = $height;
        return $this;
    }

    //gets the BaseArea
    public function getBaseArea():float {
        return $this->getArea() ;
    }

    //gets the volume
    public function getVolume():float {
        return (parent::getArea() * $this->height / 3);
    }

    //get lateral surface area
    public function getLateralSurface():float {
        $length = parent::getLength();
        $width = parent::getWidth();
        $height = $this->height;
        return $length*(sqrt(pow($width/2, 2) + pow($height, 2)))+ $width*(sqrt(pow($length/2, 2)+ pow($height, 2)));
    }

//gets the surface area
    public function getSurfaceArea():float {
        return $this->getBaseArea() + $this->getLateralSurface();
    }
//creates the toString function
    public function toString() {
        //creates a json array to store the data
        $JSON_ARRAY = array(
            "Width"=> number_format(self::getWidth(), 2),
            "Length"=> number_format(self::getLength(), 2),
            "Height"=> number_format(self::getHeight(), 2),
            "Base"=> number_format(self::getBaseArea(), 2),
            "Volume"=> number_format(self::getVolume(), 2),
            "Lateral"=> number_format(self::getLateralSurface(), 2),
            "Surface"=> number_format(self::getSurfaceArea(), 2)
        );
        //displays the json array
        return json_encode($JSON_ARRAY);
    }
}
