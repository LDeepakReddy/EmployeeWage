<?php
// include 'Company.php';
class EmpWage
{

    const FULL_TIME_WORKING_HOURS = 8;
    const PART_TIME_WORKING_HOURS = 4;
    const IS_FULL_TIME = 2;
    const IS_PART_TIME = 1;
    const IS_ABSENT = 0;


    public $wagePerHour;
    public $workingDaysPerMonth;
    public $workingHoursPerMonth;

    public $workingHours = 0;
    public $monthlyWage = 0;
    public $totalWorkingDays = 0;
    public $totalWorkingHours = 0;



    public function __construct($wage, $days, $hours)
    {
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

    function userInput()
    {
        $company = readline("Enter the name of Company : ");
        echo "Wage for $company Employee \n ";
        // $wagePerHour = readline("Enter the wage per hour : ");
        // $workingDaysPerMonth = readline("Enter working Days per month : ");
        // $workingHoursPerMonth = readline ("ENter total working hours per month : ");
        $this->monthlyWage();
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
            $this->totalWorkingHours <= $this->workingHoursPerMonth &&
            $this->totalWorkingDays < $this->workingDaysPerMonth
        ) {
            $this->totalWorkingDays++;
            echo "Day : " . $this->totalWorkingDays . "\n";
            $dailyWage = $this->dailyWage();
            $this->monthlyWage += $dailyWage;
            $this->totalWorkingHours += $this->workingHours;
            $this->totalWorkingDays++;
        }
        echo "Total Working Days : $this->totalWorkingDays\n";
        echo "Total Working Hours : $this->totalWorkingHours\n";

        echo "Total Monthly Wage : $this->monthlyWage \n\n";
    }
}
//Creating object
$company1 = new EmpWage(25, 24, 89);
$company1->userInput();
$company2 = new EmpWage(49, 24, 97);
$company2->userInput();
