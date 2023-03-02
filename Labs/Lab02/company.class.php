<?php
/**
 *Author: Katie Stinson
 *Date: 1/26/23
 *File: company.class.php
 *Description: models a company
 */

class Company{
    private $name, $established_date, $url;
    private array $employees = array();
    private int $total_salary;

//constructor
    public function __construct($name, $established_date, $url, $employees, $total_salary)
    {
        $this->name = $name; //str
        $this->established_date = $established_date; //str
        $this->url = $url; //str
        $this->employees = $employees; //array of Employee objects
        $this->total_salary = $total_salary;
    }
        //getters

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
        public function getEstablishedDate()
        {
            return $this->established_date;
        }

        /**
         * @return mixed
         */
        public function getUrl()
        {
            return $this->url;
        }

        /**
         * @return mixed
         */
        //needs to return an array of Employee objects
        public function getEmployees()
        {
            return $this->employees;
    }



        public function getTotalSalary(): int
        {
            $total_salary = 0 ;
            foreach($this-> employees as $emps){
                //pull salary from employees and add up to return total salary
                $total_salary += $emps->getSalary();
            }
            return $total_salary;
        }
}


