<?php
class EmpWage
{
    public $WAGE_PER_HOUR = 20;
    public $FULL_TIME_WORKING_HOURS = 8;
    public $PART_TIME_WORKING_HOURS = 4;


    // function to check employee is present or absent
    function empAttendance()
    {
        $empCheck = rand(0, 2);
        switch ($empCheck) {
            case 1:
                echo "Employee is present and Works as Part time Employee\n";
                $dailyWage = $this->WAGE_PER_HOUR * $this->PART_TIME_WORKING_HOURS; //Daily wage calculation for Partime employee
                echo "Employee Daily Wage is : $dailyWage ";
                break;

            case 2:
                echo "Employee is present and Works as Full time Employee\n";
                $dailyWage =  $this->WAGE_PER_HOUR *  $this->FULL_TIME_WORKING_HOURS; //Daily wage calculation for fulltime employee
                echo "Employee Daily Wage is :  $dailyWage ";
                break;

            default:
                echo "Employee is Absent\n";
                break;
        }
    }
}

// object creation of class
$employeeWage = new EmpWage();
$employeeWage->empAttendance();
