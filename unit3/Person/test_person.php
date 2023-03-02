<?php
/*
 * Author: Katie Stinson
 * Date: 2/14/23
 * Name: test_person.phpp
 * Description: this client program tests the Person and Student classes.
 */

//convert a camel cased string to a underscored string
function camelCaseToUnderscore($str) {
    //store all characters in an array
    $characters = str_split($str);

    //covert the first character to a lowercase
    $characters[0] = strtolower($characters[0]);

    //exam all characters in the array
    //if a character is uppercase, replace it with a lowercase and prefix it with an underscore
    foreach ($characters as &$character) {
        if (ord($character) >= ord('A') && ord($character) <= ord('Z'))
            $character = '_' . strtolower($character);
    }

    //convert all elements in the array into a string and return the string
    return implode('', $characters);
}

spl_autoload_register(function($class_name){
    require_once camelCaseToUnderscore($class_name) . '.class.php';
});

?>

<!DOCTYPE html>
<html>

    <head>
        <meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
        <meta name="author" content="Admin" />

        <title>The Person class and its subclasses</title>
    </head>

    <body>

        <?php
        //create a GradStudent object and display its string representation
        $g = new GradStudent("Kevin","Male","Informatics", 3.8, "Master");

        //new grad students
        $g1 = new GradStudent("Bryan Young", "Male", "Informatics", 3.7, "Master");
        $g2 = new GradStudent("Melissa Rogers", "Female", "Engineering", 3.2, "Ph.D");

        //echo "<h3>Graduate Student</h3>";
        //$g->toString();
        //echo "<br /> There are " . GradStudent::getStudentCount() . " grad students now.";

        //create an UndergradStudent object and display its string representation
        $u = new UndergradStudent("Judy","Female","Informatics",3.8, "Junior");

        //new undergrad students
        $u1 = new UndergradStudent("Ian Watson", "Male", "Library Science", 3.0, "Freshman");
        $u2 = new UndergradStudent("Kimberlee Wang", "Female", "Nursing", 2.8, "Junior");

        //med student objs
        $m1 = new MedicalStudent("Timothy Lindsey", "Male", "Family Medicine", 3.4, "MD", 11.0);
        $m2 = new MedicalStudent("Amy Ling", "Female", "Anesthesiology", 3.8, "MD", 10.8);
        //array to store objects
        $students = array($g1, $g2, $u1, $u2, $m1, $m2);

        //echo "<h3>Undergraduate Student</h3>";
        //$u->toString();
        //echo "<br /> There are " . UndergradStudent::getStudentCount() . " undergrad students now.";

        //display num of students
        ///echo "<h3>" . Student::getStudentCount() . " students have been created. </h3>";


        //display info by calling tostring method
        foreach ($students as $student){
            printStudent($student);
        }

        //display the string representation of a student obj
        function printStudent(Student $student){
            if(get_class($student) == "GradStudent"){
                echo "<h3>Graduate Student </h3>";
            } else if (get_class($student) == "UndergradStudent"){
                echo "<h3>Undergraduate Student</h3>";
            }
            else if (get_class($student) == "MedicalStudent") {
                echo "<h3>Medical Student</h3>";
            }
            echo $student->toString();
        }

        echo "<h3>", GradStudent::getStudentCount(), " graduate students have been created.</h3>";
        echo "<h3>", UndergradStudent::getStudentCount(), " undergraduate students have been created.</h3>";
        echo "<h3>" . MedicalStudent::getStudentCount() . " medical students have been created.</h3>";
        ?>

    </body>
</html>