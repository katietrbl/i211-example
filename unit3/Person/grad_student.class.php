<?php
/**
 *Author: Katie Stinson
 *Date: 2/14/23
 *File: grad_student.class.php
 *Description:
 */

class GradStudent extends Student
{
    //student program
    private $program;
    //static data member to count num of students
    private static $student_count = 0;

    //construct
    public function __construct($name, $gender, $major, $gpa, $program)
    {
        parent::__construct($name, $gender, $major, $gpa);
        $this->program = $program;
        //static
        self::$student_count++;
    }

//get
    public function getProgram()
    {
        return $this->program;
    }

    //static get method
    public static function getStudentCount(){
        return self::$student_count;
    }

//set
    public function setProgram($program)
    {
        $this->program = $program;
    }


 //display string representation of object
    public function toString()
    {
        parent::toString(); // TODO: Change the autogenerated stub
        echo "Status: ", $this->getProgram();
    }
}