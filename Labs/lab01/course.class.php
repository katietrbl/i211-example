<?php
/**
 *Author: Katie Stinson
 *Date: 1/19/23
 *File: course.class.php
 *Description:
 */

class Course{

    private $title, $number, $credits, $desc, $prereq;


//constructor
    public function __construct($title, $number, $credits, $desc, $prereq){
        $this->title = $title;
        $this->number = $number;
        $this->credits = $credits;
        $this->desc = $desc;
        $this->prereq = $prereq;
}

//getters

    public function getTitle(): string {
        return $this-> $title;
}
    public function getNumber(): string{
        return $this-> $number;
}
    public function getCredits(): int{
        return $this-> $credits;
}
    public function getDesc(): string{
        return $this-> $desc;
}
    public function getPrereq(): string{
        return $this-> $prereq;
}

//setters

    public function setTitle($title): object{
        $this->title = $title;
        return $this;
}
public function setNumber($number): object{
    $this->number = $number;
        return $this;
}
public function setCredits($credits): object{
    $this->credits = $credits;
        return $this;
}
public function setDesc($desc): object{
    $this->desc = $desc;
        return $this;
}
public function setPrereq($prereq): object{
    $this->prereq = $prereq;
        return $this;
}

}