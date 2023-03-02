<?php
/**
 *Author: Katie Stinson
 *Date: 2/14/23
 *File: undergrad_student.class.php
 *Description:
 */
//this refers to instance
//self refers to current class
class UndergradStudent extends Student{
    //year in school
    private $status;
    //static data member
    private static  $student_count = 0;

    public function __construct($name, $gender, $major, $gpa, $program)
    {
        parent::__construct($name, $gender, $major, $gpa, $program);
        self::$student_count++;
    }

    //get
    public function getStatus(){
        return $this->status;
    }

    //static get method
    public static function getStudentCount(){
        return self::$student_count;
    }
    //set
    public function setStatus($status){
        $this->status = $status;
    }
}