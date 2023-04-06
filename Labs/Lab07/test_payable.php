<?php
/**
 *Author: Katie Stinson
 *Date: 3/2/23
 *File: test_payable.php
 *Description: client program.
 * tests all classes in Payable hierarchy.
 * use polymorphism.
 * web page displays string representation of each obj type in class hierarchy
 * and number of invoice and employee objs
 */

//autoload classes
require_once ('autoloading.php');
?>


<!DOCTYPE HTML>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Payable Interface</title>
    </head>
    <body>

        <?php
        //test all classes in the payable class hierarchy.


        //invoice
        $i1 = new Invoice("01234", "seat", 2, 375.00, 750, 1);
        $i2 = new Invoice("56789", "tire", 4, 79.95, 319.80, 2);
         //employees

        $s1 = new SalariedEmployee(new Person("John", "Smith"), "111-111-1111", 800.00);

        $h1 = new HourlyEmployee(new Person("Karen", "Price"), "222-222-2222", 16.75, 40, 670.00);

        $c1 = new CommissionEmployee(new Person("Sue", "Jones"), "333-333-3333", 10000.00, 0.06, 600.00);

        $b1 = new BasePlusCommissionEmployee(new Person("Bob", "Lewis"), "444-444-4444", 5000.00, 0.04, 300.00, 500.00);
        echo "<h2>Payroll System</h2>";

        //create array
        $employees = array($s1, $h1, $c1, $b1);


        //print information about the invoives
        echo "<br /> <b>Invoices</b> <br />";
        echo"------------------------------------------------------------------------------------";
        $i1->toString();
        echo "<br /><br />";

        echo"------------------------------------------------------------------------------------";
        $i2->toString();
        echo "<br /><br />";

        echo"------------------------------------------------------------------------------------";
        //print information about the employees
        echo "<br /> <b>Salaried Employee</b> <br />";

        echo"------------------------------------------------------------------------------------";
        $s1->toString();
        echo "<br /><br />";

        echo"------------------------------------------------------------------------------------";
        echo "<br /> <b>Hourly Employee</b> <br />";

        echo"------------------------------------------------------------------------------------";
        $h1->toString();
        echo "<br /><br />";

        echo"------------------------------------------------------------------------------------";
        echo "<br /> <b>Commission Employee</b> <br />";

        echo"------------------------------------------------------------------------------------";
        $c1->toString();
        echo "<br /><br />";

        echo"------------------------------------------------------------------------------------";
        echo "<br /> <b>Base Plus Commission Employee</b> <br />";

        echo"------------------------------------------------------------------------------------";
        $b1->toString();
        echo "<br /><br />";



        echo"------------------------------------------------------------------------------------";
        //print number of invoices
        echo "<h3>", Invoice::getInvoiceCount(), " invoices have been created.</h3>";
        //print number of employees
        echo "<h3>", Employee::getEmployeeCount(), " employees have been created.</h3>"


        ?>
    </body>
</html>
