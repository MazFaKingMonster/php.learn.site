<?php
$visit_counter = 0;
if(isset($_COOKIE["visit_counter"])){
    $visit_counter = $_COOKIE["visit_counter"];
    $visit_counter = 1;
}
$last_visit = "";
if (($_COOKIE["last_visit"])){
    $last_visit = date("d-m-Y", $_COOKIE["last_visit"]);
}

setcookie("visit_counter", $visit_counter, 0x7FFFFFFF);
setcookie("last_visit", time(), 0x7FFFFFFF);
?>
