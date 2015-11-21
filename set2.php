<?php
// NACHALO SET2.PHP - TITLE 2_2
// NACHALNO SYSTOIANIE
// COMMIT MESSAGE 2_1
// COMMIT MESSAGE 2_2
// COMMIT MESSAGE 2_3
class Employee
{
var $name;
function __set($propName, $propValue)
{
echo "Nonexistent variable: \$$propName!";
}
}
$employee = new Employee ();
$employee->name = "Mario";
$employee->title = "Executive Chef";

?>
