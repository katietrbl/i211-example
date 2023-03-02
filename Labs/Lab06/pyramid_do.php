<?php
/**
 * Author: Katie Stinson
 * Date: 2/22/23
 * File: pyramid_do.php
 * Description: set up php get method
 */

require_once 'pyramid.class.php';
require_once 'rectangle.class.php';

//accessing the values from the query string
$width = $_GET['width'];
$length = $_GET['length'];
$height = $_GET['height'];

//create the pyramid object
$p = new Pyramid($height, $width, $length);
echo $p->toString();
