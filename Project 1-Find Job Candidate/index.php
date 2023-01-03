<?php

/* 
PROBLEM
We have a list of people with the name and age
1. We want to count the number of adults (+18 years old) and children
2. We want to make a list of people between 22 to 30 who can apply for our job opening
*/


$people = [
    ['name' => 'Joseph', 'age' => 25],
    ['name' => 'Sarah', 'age' => 25],
    ['name' => 'Anne', 'age' => 18],
    ['name' => 'Pratham', 'age'=> 23],
    ['name' => 'Simon', 'age' => 30],
    ['name' => 'Amir', 'age' => 28],
    ['name' => 'Sabrina', 'age' => 22],
    ['name' => 'Rana', 'age'=> 24],
    ['name' => 'Meet', 'age' => 21],
    ['name' => 'Vitto', 'age' => 24],
    ['name' => 'Rachel', 'age' => 9],
    ['name' => 'Tom', 'age' => 3],
];


/*Solution*/
$adultCount = 0;
$childCount = 0;
$canApplyForJob = [];

foreach($people as $person){
    $age = $person['age'];
    if ($age >= 18){
        // this person is an adult
        $adultCount++;
        if ($age > 22 && $age < 30){
            //$canApplyForJob[] = $person;
            array_push($canApplyForJob, $person);
        }
    } else {
        $childCount++;
    }
}

echo "There are $childCount child in the community" . PHP_EOL;
echo "There are $adultCount adult in the community" . PHP_EOL;
echo "Here is the people can apply for job opening: ".PHP_EOL;
print_r($canApplyForJob);



?>

