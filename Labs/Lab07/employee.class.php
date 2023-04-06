<?php
/**
 *Author: Katie Stinson Zach Thompson
 *Date: 3/2/23
 *File: employee.class.php
 *Description: contains abstract with base class named employee.
 * attributes of class is an obj person (composition)
 * contains static attribute and method that kep track of number of employee objs created
 */

require_once ('person.class.php');
require_once ('payable.class.php');

//define employee class
abstract class Employee implements Payable {

    //set object attributes
    public object $person;
    public string $ssn;
    public static int $employee_count = 0;

    //construct
    public function __construct($person, $ssn) {
        $this->ssn = $ssn;
        $this->person = $person;
        self::$employee_count++;
    }

    public function getPerson(): object{
        return $this->person;
    }

    //get ssn
    public function getSsn(): string{
        return $this->ssn;
    }

    //get emp count
    public static function getEmployeeCount(): int{
        return self::$employee_count;
    }

    //function tostring print data on page
    public function toString(): void{
        //print details of person class
        echo $this->person->toString();
        //print ssn
        echo "<br><b>Social Security Number: </b>" . $this->getSsn();

    }


}