<?php
/**
 *Author: Katie Stinson
 *Date: 1/12/23
 *File: rectangle.class.php
 *Description:
 */


/**
 *Author: Katie Stinson
 *Date: 1/11/23
 *File: rectangle.class.php
 *Description:
 */
class Rectangle{
    private float $width;
    private float $height;

//constructor
public function  __construct($width, $height){
    $this->width = $width;
        $this->height = $height;
}
//get a rectangle’s width
    public
    function getWidth():float{
        return $this->width;
    }


//get a rectangle’s height
    public
    function getHeight():float{
        return $this->height;
    }

//set a rectangle’s width
    public
    function setWidth($w){
        $this->width = $w;
        return $this;
    }

//set a rectangle’s height
    public
    function setHeight($h){
        $this->height = $h;
    }

//calculate the area of a rectangle
    public
    function calculateArea(){
        $area = $this->width * $this->height;
        return $area;
    }

//calculate the perimeter of a rectangle
    public
    function calculatePerimeter(){
        $perimeter = 2 * ($this->width + $this->height);
        return $perimeter;
    }

    //already filled out everything before class without knowing about getter and setter so i dont have the fancy comments added by program.


}

