<?php
/**
 *Author: Katie Stinson
 *Date: 1/12/23
 *File: rectangle.php
 *Description: create client program of the rectangle class
 */

require_once 'rectangle.class.php';

//create two rectangle objects

$c1 = new Rectangle(20, 30);
$c2 = new Rectangle(10, 5);
//set width and height
/*
$c1->setWidth(20);
$c1->setHeight(30);

$c2->setWidth(10);
$c2->setHeight(10);
*/
//determine the area and perimeter of c1
$area = $c1->calculateArea();
$perimeter = $c1->calculatePerimeter();

echo "rectangle 1's area = $area, perimeter = $perimeter. ";

//determine the area and perimeter of c2
$area = $c2->calculateArea();
$perimeter = $c2->calculatePerimeter();

echo "<br>rectangle 2's area = $area, perimeter = $perimeter.";
