<?php

// open the file
// flags
// r for reading
// w for writing
// a for appending
$file = fopen("./example.txt","w" );



// read the file
// $firstLine = fgets($file);
// $secondLine = fgets($file);
// echo $firstLine;
// echo $secondLine;

// read multiple line using while loop
// $line = fgets($file);
// while ($line !== false){
//     $line = fgets($file);
// };


// write to the file
fwrite($file, "This is note 1 \n");
fwrite($file, "This is note 2");








?>