<?php
class EmpWage
{
    const WAGE_PER_HOUR = 20;
    const FULL_TIME_WORKING_HOURS = 8;
    const PART_TIME_WORKING_HOURS = 4;
    const IS_FULL_TIME = 2;
    const IS_PART_TIME = 1;
    const IS_ABSENT = 0;
    const WORKING_DAYS_PER_MONTH = 20;
    const WORKING_HOURS_PER_MONTH = 100;

   public $workingHours = 0;
   public $monthlyWage= 0;
   public $totalWorkingDays = 0;
   public $totalWorkingHours=0;

    //Function to Check Employee is Present, part-time or Absent
     
    function empAttendance()
    {
        $empCheck = rand(0, 2);
        switch ($empCheck) {

            case EmpWage::IS_FULL_TIME:
                echo "Full Time Employee\n";
                return EmpWage ::FULL_TIME_WORKING_HOURS;
                break;

            case EmpWage :: IS_PART_TIME:
                echo "Part Time Employee\n";
                return EmpWage :: PART_TIME_WORKING_HOURS;
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
        $totalHrs = $this->empAttendance();
        $this->workingHours = $totalHrs;
        $dailyWage = EmpWage ::WAGE_PER_HOUR * $totalHrs;
        echo "Total Working Hours : " . $totalHrs . "\n";
        echo "Daily Wage : " . $dailyWage . "\n\n";
        return $dailyWage;
    }

   
    //Function to Calculate Monthly Wage
    //calculating monthly wage according to working hours
    //calling dailyWage() function to get daily wage
    function monthlyWage()
    {
        while($this->totalWorkingHours <= EmpWage::WORKING_HOURS_PER_MONTH &&
            $this->totalWorkingDays < EmpWage ::WORKING_DAYS_PER_MONTH
        ){
            $this->totalWorkingDays++;
            echo "Day : " . $this->totalWorkingDays. "\n";
            $dailyWage = $this->dailyWage();
            $this->monthlyWage += $dailyWage;
            $this->totalWorkingHours += $this->workingHours;
        }
       echo "Total Working Days : $this->totalWorkingDays\n";
       echo "Total Working Hours : $this->totalWorkingHours\n";
       
        echo "Total Monthly Wage : $this->monthlyWage \n\n";
    }
}
//Creating object
$empWage = new EmpWage();
$empWage -> dailyWage();
$empWage->monthlyWage();
