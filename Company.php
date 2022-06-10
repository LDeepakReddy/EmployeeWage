<!-- <?php
include 'EmpWage.php';

class CompanyDetails
{
    public $company;
    public $wagePerHour;
    public $workingDaysPerMonth;
    public $workingHoursPerMonths;

    //class constructor.
    public function __construct($company, $wagePerHour, $workingDaysPerMonth, $workingHoursPerMonth)
    {
        $this->company = $company;
        $this->wagePerHour = $wagePerHour;
        $this->workingDays = $workingDaysPerMonth;
        $this->monthWorkingHrs = $workingHoursPerMonth;
    }
}

?>