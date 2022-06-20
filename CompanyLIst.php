<?php


class CompanyList{

    public function companies(){
        $companyName = array();  
        $totalWage = array();
        $n = readline("Enter the number of companies");
        for($i=0; $i < $n; $i++){
            $companyName[$i] = readline("Enter the company name : ");
            $wagePerHour = readline("Enter the wage per hour : ");
            $workingDaysPerMonth = readline("Enter the maximum working Days per month");
            $workingHoursPerMonth = readline ("Enter the maximum working Hours per month ");

            echo "Employee wage calculation of $companyName[$i] \n";

            $emp = new EmpWage($companyName,$wagePerHour,$workingDaysPerMonth,$workingHoursPerMonth);
            $totalWage[$i] = $emp->monthlyWage();
        }
        for ($i = 0; $i < $n ; $i++){
            echo "Company Name :  $companyName[$i] \n";
            echo "Total salary :  $totalWage[$i] \n";
        }

    }
}


?>