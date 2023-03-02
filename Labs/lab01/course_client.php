<?php
/**
 *Author: Katie Stinson
 *Date: 1/19/23
 *File: course_client.php
 *Description:
 */

require_once('course.class.php');

$course1 = new Course("i211","12345","3","Database and PHP","i210");

$course1->setTitle("i211")->setNumber("12345")->setCredits("3")->setDesc("Database and PHP management.")->setPrereq("i210");

$course2 = new Course("i210","123456","3","Database and PHP","none");

$course2->setTitle("i210")->setNumber("123456")->setCredits("3")->setDesc("Database and PHP management.")->setPrereq("none");




$title = $course1->getTitle();
$number = $course1->getNumber();
$credits = $course1->getCredits();
$desc = $course1->getDesc();
$prereq = $course1->getPrereq();

$title = $course2->getTitle();
$number = $course2->getNumber();
$credits = $course2->getCredits();
$desc = $course2->getDesc();
$prereq = $course2->getPrereq();

?>