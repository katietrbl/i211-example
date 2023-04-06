<?php
/**
 *Author: Katie Stinson Zach Thompson
 *Date: 3/2/23
 *File: hourly_employee.class.php
 *Description: inherit from employee class
 */

require_once ('employee.class.php');
require_once ('person.class.php');

//inherit employee, create hourly employee class
class HourlyEmployee extends Employee {

    //set private data attributes
    private float $wage;
    private int $hours;

    //constructor
    public function __construct($person, $ssn, $wage, $hours) {
        parent::__construct($person, $ssn);
        $this->wage = $wage;
        $this->hours = $hours;
    }

    //get employee wage
    public function getWage():float {
        return $this->wage;
    }

    //get employee hours
    public function getHours():int {
        return $this->hours;
    }

    //get the payment amount
    public function getPaymentAmount():float {
        return $this->getWage() * $this->getHours();
    }

    //toString method, display info on employee
    public function toString():void {
        echo Employee::toString();
        echo "<br><b>Wage:</b> $" . $this->getWage();
        echo "<br><b>Hours:</b> " . $this->getHours();
        echo "<br><b>Payment Amount:</b> $" . $this->getPaymentAmount();
    }
}