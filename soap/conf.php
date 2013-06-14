<?php
ob_start();
system('ipconfig /all'); 
$mycom=ob_get_contents(); 
ob_clean();

$findme = "Physical";
$pss = strpos($mycom, $findme); 
$password=substr($mycom,($pss+36),17);
?>