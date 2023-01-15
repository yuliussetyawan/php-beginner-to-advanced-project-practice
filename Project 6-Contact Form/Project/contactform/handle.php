<?php

$redirect = false;
if(empty($_POST["name"])){
    $redirect = true;
}

if(empty($_POST["email"])){
   $redirect = true;
}

if(empty($_POST['message'])){
   $redirect = true;
}

if(!$redirect){
    header('Location: form.php?submitted=false');
    exit();
}

$filename = 'contacts.json';
$file = fopen("D:\\xampp\\htdocs\\contactform\\".$fileName, 'r');
$jsonText = '';
$line = fgets($file);
while($line != false){
    $jsonText =  $jsonText . $line;
    $line = fgets($file);
}
fclose($file);
if(empty($jsonText)){
    $contacts = [];
} else{
    $contacts = json_decode($jsonText, true);
}

$contacts[] = [
    'name' => $_POST['name'],
    'email' => $_POST['email'],
    'message' => $_POST['message'],
    'time' => date('Y-m-d H:i:s')
];

$jsonContacts = json_encode($contacts);

$file = fopen('./'.$filename, 'w');
fwrite($file, $jsonContacts);
fclose($file);

header('Location: form.php?submitted=true');
exit();