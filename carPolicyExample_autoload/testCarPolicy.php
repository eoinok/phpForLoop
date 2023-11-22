<?php
include("./autoLoader.php");
use lib\Policy\CarPolicy as CarPolicy;

date_default_timezone_set('Europe/Dublin');
$myCarpolicy = new CarPolicy("XM123456", 450);

$myCarpolicy->setDateOfLastClaim("2015-10-10");
echo "the policy " . $myCarpolicy;
echo "has " . $myCarpolicy->getTotalYearsNoClaims();
echo "years no claims.";

?>
    