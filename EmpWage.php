<?php
class EmpWage {
    public $WAGE_PER_HR = 20;
    public $FULL_TIME_WORKING_HRS = 8;
    

// function to check employee is present or absent
    function empAttendance(){   
        $empCheck = rand(0,1);
        if ($empCheck == 1) {
            echo "Employee is present\n";
            
            $dailyWage =  $this-> WAGE_PER_HR *  $this-> FULL_TIME_WORKING_HRS ; //Daily wage calculation 
            echo "Employee Daily Wage is :  $dailyWage ";        
        }else{
            echo "Employee is absent";
        }

    }

}

// object creation of class
$employeeWage = new EmpWage();
$employeeWage->empAttendance();



?>