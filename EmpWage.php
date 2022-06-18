<?php
include "EmpInterface.php";
include "CompanyLIst.php";
class EmpWage implements EmployeeWageInt
{
//constant variables
    const FULL_TIME_WORKING_HOURS = 8;
    const PART_TIME_WORKING_HOURS = 4;
    const IS_FULL_TIME = 2;
    const IS_PART_TIME = 1;
    const IS_ABSENT = 0;

    public $companyName;
    public $wagePerHour;
    public $workingDaysPerMonth;
    public $workingHoursPerMonth;

    public $workingHours = 0;
    public $monthlyWage = 0;
    public $totalWorkingDays = 0;
    public $totalWorkingHours = 0;



    public function __construct($companyName, $wage, $days, $hours)
    {
        $this->companyName = $companyName;
        $this->wagePerHour = $wage;
        $this->workingDaysPerMonth = $days;
        $this->workingHoursPerMonth = $hours;
    }

    //Function to Check Employee is Present, part-time or Absent

    function empAttendance()
    {
        $empCheck = rand(0, 2);
        switch ($empCheck) {

            case EmpWage::IS_FULL_TIME:
                echo "Full Time Employee\n";
                return EmpWage::FULL_TIME_WORKING_HOURS;
                break;

            case EmpWage::IS_PART_TIME:
                echo "Part Time Employee\n";
                return EmpWage::PART_TIME_WORKING_HOURS;
                break;

            default:
                echo "Employee is Absent\n";
                return 0;
                break;
        }
    }

    // Function to Calculate Daily Wage
    function dailyWage()
    {
        $this->workingHours =  $this->empAttendance();
        $dailyWage = $this->wagePerHour * $this->workingHours;
        echo "Total Working Hours : " . $this->workingHours . "\n";
        echo "Daily Wage : " . $dailyWage . "\n\n";
        return $dailyWage;
    }


    //Function to Calculate Monthly Wage
    //calculating monthly wage according to working hours
    //calling dailyWage() function to get daily wage
    function monthlyWage()
    {
        while (
            $this->totalWorkingDays < $this->workingDaysPerMonth &&
            $this->totalWorkingHours <= $this->workingHoursPerMonth


        ) {


            echo "Day : " . $this->totalWorkingDays . "\n";
            $dailyWage = $this->dailyWage();
            $this->monthlyWage += $dailyWage;
            $this->totalWorkingHours += $this->workingHours;
            $this->totalWorkingDays++;
        }
        echo "Total Working Days : $this->totalWorkingDays\n";
        echo "Total Working Hours : $this->totalWorkingHours\n";

        echo "Total Monthly Wage : $this->monthlyWage \n\n";
        return $this->monthlyWage;
    }
}

$companies = new CompanyList();
$companies->companies();
