<?php

$hotel = array('###Hotel1###' =>  "Caesars", '###Hotel2###' =>  "Venetian", '###Hotel3###' =>  "Bellagio");
$htmlresponse = readFile1('C:\Users\gabjetski\Desktop\xampp\htdocs\gabjetski\ViewaLasVegas\index.html');

foreach ($hotel as $key => $val){
    $htmlresponse =  str_replace($key, $val, $htmlresponse);
}

echo $htmlresponse;

function readFile1(string $path): string
{
    $handle = fopen($path, "r");
    $contents = fread($handle, filesize($path));
    fclose($handle);
    return $contents ;
}