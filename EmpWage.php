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
        $monthlyWage = 0;
        for ($i = 1; $i <= EmpWage ::WORKING_DAYS_PER_MONTH; $i++) {
            echo "Day : " . $i . "\n";
            $dailyWage = $this->dailyWage();
            $monthlyWage += $dailyWage;
        }
        echo "Total Monthly Wage : " . $monthlyWage . "\n\n";
    }
}
//Creating object
$empWage = new EmpWage();
$empWage->monthlyWage();
?>
