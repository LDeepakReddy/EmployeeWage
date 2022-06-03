<?php
class EmpWage {
    static function welcome(){
        echo "Welcome to employee wage program";
    }

// function to check employee is present or absent
    function empAttendance(){   
        $empCheck = rand(0,1);
        if ($empCheck == 1) {
            echo "Employee is present";
        }else{
            echo "Employee is absent";
        }

    }
}

// object creation of class
$employeeWage = new EmpWage();
$employeeWage -> empAttendance();



?>