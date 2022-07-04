<?php
class MultipleCompanies
{
    public $companyList = [];

    function companyArray()
    {
        $company1 = new EmployeeWage("ABC", 25, 26, 100);
        $company2 = new EmployeeWage("DEF", 30, 26, 80);
        $company3 = new EmployeeWage("GHI", 20, 24, 120);
        $company4 = new EmployeeWage("JKL",54,24,100);
        $company5 = new EmployeeWage("MNO",78,27,98);

        $companyList = [$company1, $company2, $company3,$company4,$company5];
        for($i = 0; $i < count($companyList); $i++){
            $companyList[$i]->totalEmpArray();
            echo " ";
        }

    }
   
}
