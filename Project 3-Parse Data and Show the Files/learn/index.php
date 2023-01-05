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
// $file = fopen("./example.txt", "w");
// fwrite($file, 'hello world' . PHP_EOL);
// fwrite($file, "hello youtube \n");

// APPEND TO THE FILE
// $file = fopen("./example.txt", "a");
// fwrite($file, "hello all" .PHP_EOL);

// DONT FORGET TO ALWAYS CLOSE THE FILE
// fclose($file);


/*
|------------------------------------------
csv
|------------------------------------------
*/
// csv is a file with the data separated by comma

// OPEN & CLOSE
// $file = fopen("./example.csv", "r");
// $line = fgetcsv($file);
// while ($line != false){
//     $id = $line[0];
//     $name = $line[1];
//     echo "The id for the website with the name of $name is $id".PHP_EOL;
//     // change the condition
//     $line = fgetcsv($file);
// }
// fclose($file);

// WRITE CSV
// $file = fopen('./example.csv','a');
// fputcsv($file, ['6', 'Pinterest']);
// fclose($file);



/*
|------------------------------------------
xml & json
|------------------------------------------
*/

// what are xml and json
// json
/*
{
    "accounts":{
        "twitter": "twitter.com",
        "linkedin": "linkedin.com",
        "facebook": "facebook.com",
        "instagram": "instagram.com",
    }
}
*/

// READ JSON
// $json = ' {
//     "accounts": {
//         "twitter": "twitter.com",
//         "linkedin": "linkedin.com",
//         "facebook": "facebook.com",
//         "instagram": "instagram.com",
//     }
// }';
// $array = json_decode($json, true);
// $accounts = $array['accounts'];
// foreach ($accounts as $account => $link) {
//     echo "My account address is $account and the link is $link";
// }


// WRITE JSON
// $array = [
//     'accounts' => [
//         "twitter" => "twitter.com",
//         "linkedin" => "linkedin.com",
//         "facebook" => "facebook.com",
//         "instagram" => "instagram.com",
//     ]
// ];

// $json = json_encode($array);
// echo $json;


// READ XML
// DOMDocument
// SimpleXMLElement
/*
$xml = '<?xml version="1.0" encoding="UTF-8" ?>
<accounts>  
    <account type="twitter">twitter.com</account>
    <account type="linkedin">linkedin.com</account>
    <account type="blog">blog.com</account>
    <account type="github">github.com</account>
</accounts>';
*/
// $dom = new DOMDocument();
// $dom->loadXML($xml);
// $accounts = $dom ->getElementsByTagName('account');
// foreach($accounts as $account){
//     $name = $account->getAttribute('type');
//     $link = $account->nodeValue;
//     echo "the address of my $name is $link".PHP_EOL;
// }

// $accounts = new SimpleXMLElement($xml);
// foreach($accounts as $account){
//     $name = $account['type'];
//     $link= $account;
//     echo "the address of my $name is $link".PHP_EOL;
// }

// WRITE XML
$accounts = new SimpleXMLElement('<?xml version="1.0" encoding="UTF-8" ?><accounts></accounts>');
$accounts -> addChild('account', 'twitter.com') ->addAttribute('type', 'twitter');

$accounts -> addChild('account', 'blog.com') ->addAttribute('type', 'blog');

$accounts -> addChild('account', 'linkedin.com') ->addAttribute('type', 'linkedin');

$finalXml = $accounts -> asXML();
echo $finalXml;
