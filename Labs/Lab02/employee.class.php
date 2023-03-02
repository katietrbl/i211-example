<?php
/**
 *Author: Katie Stinson
 *Date: 1/26/23
 *File: employee.class.php
 *Description: models an employee
 */

class Employee{
    private $name,
    $title,
    $years,
    $salary;

//constructor
    public function __construct($name, $title, $years, $salary){
        $this->name = $name; //str
        $this->title = $title; //str
        $this->years = $years; //int
        $this->salary = $salary; //float
    }



    //getters ; four attributes
    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @return mixed
     */
    public function getYears()
    {
        return $this->years;
    }

    /**
     * @return mixed
     */
    //referenced in company class
    public function getSalary()
    {
        return $this->salary;
    }


}