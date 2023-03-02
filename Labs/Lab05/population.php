<?php
/**
 *Author: Katie Stinson
 *Date: 2/16/23
 *File: population.php
 *Description: json encode fct
 */

require_once ('population.class.php');

//create obj from class

$name = filter_input(INPUT_GET,  'name', FILTER_SANITIZE_STRING);
//create new obj to pass through lookup fct
$popObj = new Population();

//$population = json_encode($popObj->lookup($name));

//encode to json string
//echo $population;

echo json_encode($popObj->lookup($name));


