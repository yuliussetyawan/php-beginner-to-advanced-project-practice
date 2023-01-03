<?php
/*
* PROBLEM:
* we want to calculate the age of a person in days.
* we will get a date and then we print out the number of days since the birthday.
* for example there are 10136 days since my birthday
*/

/* SOLUTION */

$birthDate = '2000-10-17';
$today =  date('Y-m-d');
$diff = strtotime($today) - strtotime($birthDate);

$numOfDays = $diff / (60*60*24);

echo "there are $numOfDays days since my birthday date($birthDate)";



?>