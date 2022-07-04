<?php

include "EmpInterface.php";
include "CompanyList.php";

class EmployeeWage implements EmployeeWageInterface
{

    const IS_FULL_TIME = 2;
    const IS_PART_TIME = 1;
    const FULL_TIME_WORKING_HOURS = 8;
    const PART_TIME_WORKING_HOURS = 4;

    public $maxWorkingDays = 0;
    public $maxWorkingHours = 0;
    public $wagePerHour = 0;
    public $totalWorkingHours = 0;
    public $workingDays = 0;
    public $monthlyWage = 0;
    public $workingHours = 0;
    public $array = [];
    public $array1 = [];
    public $companyName;
    public $dailyWage = 0;
    public $companyArray = [];



    public function __construct($companyName, $wagePerHour, $maxWorkingDays, $maxWorkingHours)
    {

        $this->companyName = $companyName;
        $this->maxWorkingDays = $maxWorkingDays;
        $this->maxWorkingHours = $maxWorkingHours;
        $this->wagePerHour = $wagePerHour;
        $this->companyArray = [$this->companyName, $this->wagePerHour, $this->maxWorkingDays, $this->maxWorkingHours];
    }

    //function to check employee attendence
    function attendenceCheck()
    {
        $checkAttendance = rand(0, 2);
        switch ($checkAttendance) {

            case EmployeeWage::IS_PART_TIME :
                $this->workingHours = EmployeeWage::PART_TIME_WORKING_HOURS;
                break;
            case EmployeeWage::IS_FULL_TIME :

                $this->workingHours = EmployeeWage::FULL_TIME_WORKING_HOURS;
                break;
            default:
                $this->workingHours = 0;
        }
        $this->dailyWage = $this->workingHours * $this->wagePerHour;
    }

    //function to store daily wage along with total wage
    function printArray()
    {
        //Printing values from the array 
        foreach ($this->array as $this->workingDays => $this->dailyWage) {
            echo "Day" . $this->workingDays . " -> " . $this->dailyWage . " ";
        }
        echo "\nTotal monthly wage for the employee is :  " . $this->monthlyWage . "\n";
    }

    //function to calculate employee wage
    function calculateEmployeeWage()
    {

        while ($this->workingDays < $this->maxWorkingDays && $this->totalWorkingHours < $this->maxWorkingHours) {

            EmployeeWage::attendenceCheck();

            $this->workingDays++;
            $this->totalWorkingHours +=  $this->workingHours;

            $this->array[$this->workingDays] = $this->dailyWage;
        }
    }

    //function to print employee wage
    function printEmployeeWage()
    {

        EmployeeWage::calculateEmployeeWage();

        $this->monthlyWage = $this->totalWorkingHours * $this->wagePerHour;
    }

    public function totalEmpArray()
    {

        $this->array1[$this->companyName] = $this->companyArray;
        foreach ($this->array1 as $this->companyName => $this->companyArray) {
            EmployeeWage::printEmployeeWage();
            $this->array[$this->workingDays] = $this->dailyWage;
            echo "--- " . $this->companyName . "--- \n";

            foreach ($this->array as $this->workingDays => $this->dailyWage) {
               // echo "Day" . $this->workingDays . " -> " . $this->dailyWage . ", ";
            }
            echo "\nTotal monthly wage of $this->companyName :  " . $this->monthlyWage . " \n";
            echo " ";
        }
    }

    // function queryByCompany(){
    //     $name = readline("Enter the name of the company to get the data ");
    //     for($i=0;$i < count($this->companyList);$i++){
    //        if($name == $this->companyList[$i]){
    //           $totalEmpArray();
  
    //        }else{
    //         echo "No records of that company\n";
    //        }
    //     }
    //    }
}
//call emplogeWage objects

$empWage = new MultipleCompanies();

$empWage->companyArray();
