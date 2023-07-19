<?php
// Developer By : Azozz ALFiras
// Created Wed 19 Jul 5:35 AM 
// Created 2023/19/07




// Convert File MobileProvision To Array
function ConvertFileMobileProvisionToArray($fileName){
    $array = [];
    $lines = file($fileName, FILE_IGNORE_NEW_LINES);
    foreach ($lines as $item) {
        $array[] = $item;
    }
    return $array;
}
// Convert Array to $index => $key with $value
function ReadValueFromArray($Array,$Value_Array){
$array = [];
foreach($Array as $value => $item){
if($item == "	<key>$Value_Array</key>"){
if(!empty($Array[$value+1])){
$array[] = array("$value"=> $Array[$value+1]);
}
}
}
return $array;
} 



?>

