<?php
/**
 * Author: katie stinson
 * Date: 1-26
 * File: mycompany.php
 * Description: this is the client program that tests the Employee and Complany objects
 */

require_once 'company.class.php';
require_once  'employee.class.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Company Profile</title>
    <style>
        body {
            width: 600px;
            margin-left: auto;
            margin-right: auto;
        }

        table {
            border: 1px solid black;
            border-collapse: collapse;
        }

        th {
            background-color: #e4f1fe;
            border-top: 1px solid black;
            border-bottom: 1px solid black;
            height: 30px;
        }

        th, td {
            padding: 5px 5px;
            height: 35px;
        }

        th:nth-child(1),
        td:nth-child(1) {
            width: 200px;
        }

        th:nth-child(2),
        th:nth-child(4),
        td:nth-child(2),
        td:nth-child(4) {
            width: 125px;
            border-left: 1px solid #ccc;
        }

        th:nth-child(3),
        td:nth-child(3) {
            width: 150px;
            border-left: 1px solid #ccc;
            text-align: center;
        }

        tr:nth-child(odd) {
            background-color: #f9f9f9;
        }

        div.flexbox {
            display: flex;
            flex-direction: column;
        }

        div.row {
            display: flex;
            flex-direction: row;
            height: 50px;
        }

        div.col {
            width: 150px;
            font-weight: bold;
        }
    </style>
</head>
<body>
<?php
//add your code to create Employee and Company objects

$emp1 = new Employee("Sarah Judy", "Accountant", '4', 35050);
$emp2 = new Employee("Jack Smith", "Manager", '6', 51500);
$emp3 = new Employee("Hellen Sabb", "Consultant", '3', 36005);
$emp4 = new Employee("John Eastin", "Technician", '3', 41000);


$emps = array($emp1, $emp2, $emp3, $emp4);

$company = new Company("Rainbow Tech Zone", '1-20-2004', "http://www.rainbowtech.com",$emps, 0);
?>

<h2 style="text-align: center">Company Profile</h2>
<table>
<div class="flexbox">
    <br class="row">
        <div class="col">Name: <?php echo "Rainbow Tech Zone"?> </div> </br>
        <div></div>
    </div>
    <div class="row">
        <div class="col">Established Date:   </br><?php echo "1-20-2004"?></div>

        <div></br></div>
        </div>
    <div class="row"></br>
        <div class="col">Website URL:</br><?php  echo "http://www.rainbowtech.com"?></div> </br>
        <div></div>
    </div>
</div>
</table>
<table>
</br>

    <tr>
        <th>Employee Name</th>
        <th>Job Title</th>
        <th>Years of Services</th>
        <th>Salary</th>
    </tr>
    <tr>
    <?php
    // Add your code to display employees
foreach($emps as $emp) { ?>
    <tr> <td> <?= $emp->getName() ?> </td>
     <td> <?= $emp->getTitle() ?> </td>
    <td> <?= $emp->getYears() ?> </td>
     <td> $<?= $emp->getSalary() ?> </td>


<?php }?>
    </tr>

</table>

<!-- display the total salary  -->
<h3>Total salary = $<?php echo $company->getTotalSalary() ?></h3>
</body>
</html>