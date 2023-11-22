<?php
function policyLoader($myClassName)
{
    $fileName = $myClassName . ".php";
    $path = $fileName;
    require($path);
}

spl_autoload_register("policyLoader"); 

?>

