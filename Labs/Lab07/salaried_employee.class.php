<?php
/**
 *Author: Katie Stinson Zach Thompson
 *Date: 3/2/23
 *File: salaried_employee.class.php
 *Description: inherit from employee class
 */
require_once ('employee.class.php');
require_once ('person.class.php');

//inherit emp, create salaried emp class

class SalariedEmployee extends Employee {
    private float $weekly_salary;

    //construct
    public function __construct($person, $ssn, $weekly_salary){
        parent::__construct($person, $ssn);
        $this->weekly_salary = $weekly_salary;
    }

    //get salary
    public function getWeeklySalary(): float{
        return $this->weekly_salary;
    }

    //get payment amount
    public function getPaymentAmount(): float{
        return $this->weekly_salary;
    }


    //toString, display employee info
    public function toString(): void{
        parent::toString();
        echo "<br> <b>Weekly Salary</b>: $", $this->getWeeklySalary();
        echo "<br> <b>Earnings</b>: $", $this->getPaymentAmount();
    }
}