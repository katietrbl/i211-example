<?php
/**
 *Author: Katie Stinson Zach Thompson
 *Date: 3/2/23
 *File: commission_employee.class.php
 *Description: inherits from employee class
 */

require_once ('employee.class.php');
require_once ('person.class.php');

//inherit employee and create commission employee
class CommissionEmployee extends Employee {
    private int $sales;
    private float $commission_rate;

    public function __construct($person, $ssn, $sales, $commission_rate){
        parent::__construct($person, $ssn);
        $this->sales = $sales;
        $this->commission_rate = $commission_rate;
    }

    //get sales
    public function getSales(): int{
        return $this->sales;
    }

    //get commission rate
    public function getCommissionRate(): float{
        return $this->commission_rate;
    }

    //get payment method
    public function getPaymentAmount(): float{
        //commission rate * get sales
        return $this->getCommissionRate() * $this->getSales();
    }

    //toString
    public function toString(): void{
    parent::toString();
        echo "<br> <b>Gross sale: </b> $", $this->getSales();
        echo "<br> <b>Commission Rate: </b>", $this->getCommissionRate();
        echo "<br> <b>Earnings: </b> $", $this->getPaymentAmount();
    }
}