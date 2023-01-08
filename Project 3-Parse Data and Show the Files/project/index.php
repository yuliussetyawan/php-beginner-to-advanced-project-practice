<?php
/*
|--------------------------------------
| Project 3
|--------------------------------------
*/

/*
* PROBLEM:
* we have a json string of countries with their phone numbers
* 1. we want to read it and find the phone code based on country
*       for example if I write Morocco I would get +212
* 2. Then we want to write all of the data to the csv file
*/

$data = '{
    "Bahamas": "+1",
    "Indonesia": "+62",
    "Malaysia": "+60",
    "Singapore": +65",
    }';

$query = 'Bahamas';

/*
| SOLUTION
*/

$countries = json_decode($data, true);

foreach($countries as $country => $phone){
    if($country == $query){
        echo $phone;
    }
}

// $file = fopen('./countries_phone_code.csv', 'w');
// foreach($countries as $country => $phone){
//     fputcsv($file, [$country, $phone]);
// }
// fclose($file);


?>