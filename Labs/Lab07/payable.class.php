<?php
/**
 *Author: Katie Stinson Zach Thompson
 *Date: 3/2/23
 *File: payable.class.php
 *Description: contains interface, implemented by employee and invoice class
 */

//define payable class
interface Payable
{
    //get payment amount function
    public function getPaymentAmount():float;
    //interfaceable tostring class
    public function toString():void;
}