<?php
$openfile = fopen("data.csv","r");
$header = fgetcsv($openfile);
$data =[];

while (($line = fgetcsv($openfile,1000)) !== false){
    $data[] = array_combine($header,$line);
}
fclose($openfile);

$fileToJson = json_encode($data,JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
file_put_contents('data.json',$fileToJson);