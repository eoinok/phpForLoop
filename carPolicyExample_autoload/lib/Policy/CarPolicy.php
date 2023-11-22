<?php
namespace lib\Policy;

class CarPolicy
{
    public $policyNumber="";
    public $yearlyPremium=0;
    public $dateOfLastClaim="";
    
    public function __construct($pn,$yp)
    {
        $this->policyNumber=$pn;
        $this->yearlyPremium=$yp;
    }
    
    public function setDateOfLastClaim($dolc)
    {
        $this->dateOfLastClaim=$dolc;
    }
    
    public function getTotalYearsNoClaims()
    {
        $currentDate = new \DateTime();
        $lastDate= new \DateTime($this->dateOfLastClaim);
        $interval = $currentDate->diff($lastDate);
        return $interval->format("%y");
    }
    
    public function __toString()
    {
        return $this->policyNumber;
    }



}
?>