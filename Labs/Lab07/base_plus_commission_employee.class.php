<?php
/**
 *Author: Katie Stinson Zach Thompson
 *Date: 3/2/23
 *File: base_plus_commission_employee.class.php
 *Description:inherits from commission employee class
 */
require_once ('employee.class.php');
require_once ('person.class.php');

//inherit employee, create base plus commission employee
class BasePlusCommissionEmployee extends CommissionEmployee {

    //private data attribute
    private float $base_salary;

    //constructor, inherit from person and commission employee
    public function __construct($person, $ssn, $sales, $commission_rate, $base_salary)
    {
        parent::__construct($person, $ssn, $sales, $commission_rate);
        $this->base_salary = $base_salary;
    }

    //get base salary
    public function getBaseSalary():float {
        return $this->base_salary;
    }

    //get payment amount,
    public function getPaymentAmount():float {
        return $this->getSales() * $this->getCommissionRate() + $this->getBaseSalary();
    }

    //toString method to display information on employee
    public function toString():void {

        echo Employee::toString();
        //commission rate = 0.4, gross sale = 5000.
        echo "<br><b>Gross sale:</b> $" . $this->getSales();
        echo "<br><b>Base Salary:</b> $" . $this->getBaseSalary();
        echo "<br><b>Commission Rate:</b> " . $this->getCommissionRate();
        echo "<br><b>Earnings:</b> $" . $this->getPaymentAmount();
    }
}