<?php
/*
|--------------------
| Include and Require
|--------------------
*/
// if there was an error with this file included will show us a warning and then run the rest of the code, 
// but require throws an error and stops the execution immediately.

require "example.php"

// _once
// include_once "example.php"
// require_once "example.php"

// PhP will keep track of the files and if you have already included or require the file, it won't include the required again. 
// This will help you avoid issues like functional definition and stuff like that.

?>