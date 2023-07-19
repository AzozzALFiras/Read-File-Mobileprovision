# Read-File-Mobileprovision
Read File .mobileprovision in PHP


# First Import file Functions.php
```PHP
include ("Functions.php");
```

# Second Call Function's
```PHP
// file Path
$filename = "1.mobileprovision";

// call function's
$array = ConvertFileMobileProvisionToArray($filename);

// <key>TeamName</key>
// <string>Azozz ALFiras</string>
// Will get string : Azozz ALFiras
$readfile = ReadValueFromArray($array,"TeamName"); 


print_r($readfile); // will show array u can use $readfile[0]; 

// or foreach($readfile as $item){
// echo $item[0];
// }

```

