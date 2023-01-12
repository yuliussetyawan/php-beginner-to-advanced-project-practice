<?php
/*
|--------------------
| Project: Distance Calculator
|--------------------
*/

/*
* PROBLEM
* we want to write a function to calculate the distance between two places with their latitude and longitude
* Steps to calculate the distance
* 1- calculate the difference of longitude of the second place and the first place
* 2- we need to convert this value to radians
* 3- and then calculate its cosine
* 4- convert the latitude
* 5- calculate the sin and cosin of both converted latitudes
* 6- sins of coverted latitudes multiplied plus cosins multiplied
*/

/*
* SOLUTION
*/

// paris
$placeA = [
    'latitude' => 48.864716,
    'longitude' => 2.349014,
];

// berlin
$placeB = [
    'latitude' => 52.520008,
    'longitude' => 13.404954,
];

$result = calculateDistance($placeA, $placeB, false);
echo $result;


function calculateDistance(array $placeA, array $placeB, bool $humanReadable = true)
{
    $longitudeDiff = $placeA['longitude'] - $placeB['longitude'];
    $longitudeDiffInRad = deg2rad($longitudeDiff);
    $longitudeDiffInRadCosin = cos($longitudeDiffInRad);

    $latitudeAInRad = deg2rad($placeA['latitude']);
    $latitudeBInRad = deg2rad($placeB['latitude']);

    $latitudeAInRadSin = sin($latitudeAInRad);
    $latitudeAInRadCosin = cos($latitudeAInRad);
    $latitudeBInRadSin = sin($latitudeBInRad);
    $latitudeBInRadCosin = cos($latitudeBInRad);

    $dist = $latitudeAInRadSin * $latitudeBInRadSin + $latitudeBInRadCosin * $latitudeAInRadCosin * $longitudeDiffInRadCosin;

    if (!$humanReadable) {
        return "distance: $dist";
    }

    $arcCosDistance = acos($dist);
    $radiusInKm = 6364.963;
    $distInKm = $arcCosDistance * $radiusInKm;
    return "distance in Km: $distInKm";
}
