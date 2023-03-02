<?php
/*
 * Author: your name
 * Date: today's date
 * Name: person.class.php
 * Description: This class models a person. This is the parent class.
 */

class Person {
	//private data members for a person's name and gender
    private $name, $gender;

    //the constructor
    public function __construct($name, $gender) {
        $this->name = $name;
        $this->gender = $gender;
    }

    //public get methods
    public function getName() {
        return $this->name;
    }

    public function getGender() {
        return $this->gender;
    }

    //public set methods
    public function setName($name) {
        $this->name = $name;
    }

    public function setGender($gender) {
        $this->gender = $gender;
    }


// ---- practice 2 ---- //

//display string representation of the object
    public function toString(){
        echo "Name: ", $this ->getName(), "<br>";
        echo "Gender: ", $this ->getGender(), "<br>";
}
//end of class



}
?>
