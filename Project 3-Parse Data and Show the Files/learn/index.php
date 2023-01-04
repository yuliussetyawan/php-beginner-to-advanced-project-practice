<?php

// OPEN THE FILE
// FLAGS
// r for reading
// w for writing
// a for appending
// $file = fopen("./example.txt","w" );


// READ THE FILE
// $firstLine = fgets($file);
// $secondLine = fgets($file);
// echo $firstLine;
// echo $secondLine;


// READ MULTIPLE LINE USING WHILE LOOP
// $file = fopen("./example.txt","r" );
// $line = fgets($file);
// while ($line != false){
//     // do smth

//         // do smth that affect the condition
//     $line = fgets($file);
//     echo $line;
// };


// WRITE TO THE FILE
$file = fopen("./example.txt", "w");
fwrite($file, 'hello world' . PHP_EOL);
fwrite($file, "hello youtube \n");


// close the file
fclose($file);
