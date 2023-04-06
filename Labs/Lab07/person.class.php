<?php
/**
 *Author: Katie Stinson Zach Thompson
 *Date: 3/2/23
 *File: person.class.php
 *Description: create person class
 */

class Person {

    //define person attributes
    private $first_name, $last_name;

    //define person construct
    public function __construct($first_name, $last_name) {
        $this->first_name = $first_name;
        $this->last_name = $last_name;

    }

    //get first name
    public function getFirstName(): string
    {
        return $this->first_name;
    }

    //get last name
    public function getLastName(): string
    {
        return $this->last_name;
    }

    //print person details on page
    public function toString(): void {
        echo "<br><b>Name: </b></b> ", $this->getFirstName() ." " . $this->getLastName();

    }


}