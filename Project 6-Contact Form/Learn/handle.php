<?php

if(isset($_GET['name'])){
    $name = $_GET['name'];
    echo "hello $name";
} else{
    echo "name not set";
}