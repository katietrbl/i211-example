<?php
/**
 *Author: Katie Stinson
 *Date: 2/7/23
 *File: guess.php
 *Description:
 */


//create cookie for random number if it doesnt exist. if it already exists, just retrieve it

if (isset($_COOKIE['random']))
    $random = $_COOKIE['random'];
else {
    $random = rand(1, 100);
    setcookie("random", $random);
}

//retrieve players guess

$guess = (int)($_GET['guess']);

//evaluate guess then output a json obj containing values 1, 0, or -1.

if ($guess > $random){
    echo json_encode(array("result" => 1));
} else if ($guess < $random){
    echo json_encode(array("result" => -1));
} else{
    echo json_encode(array("result" => 0));
}

?>