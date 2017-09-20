<?php


function displaySymbol($symbols){
    
    echo"<img src='../labs/lab2/img/$symbols.png' width ='70' />";
}

$symbols = array("lemon", "orange", "cherry");

//print_r($symbols); //displays array conents

//echo $symbols[0]; //displays the first element
//displaySymbol($symbols[2]);

//$symbols[2] = "seven"; //replaces value
$symbols[]="grapes";
array_push($symbols, "seven");

//displaySymbol($symbols[4]);

for($i =0; $i < count($symbols); $i++){
    
    displaySymbol($symbols[$i]);
}

sort($symbols);//sorts the elements in acesnding order
print_r($symbols);
//rsort($symbols); //sorts the elements in decending order

//shuffle($symbols); //shuffles the elements in the array
echo"<hr>";
print_r($symbols);
echo"<hr>";

$lastSymbol = array_pop($symbols); // retrieves and removes the last elemnt in the array
displaySymbol($lastSymbol);
echo"<hr>";
print_r($symbols);

foreach($symbols as $s)
{
    displaySymbol($s);
}

unset($symbols[2]); //deleted element in an array
print_r($symbols);

$symbols = array_values($symbols); //re-indexes array
echo "<hr>";
print_r($symbols);


displaySymbol($symbols[rand(0, count($symbols-1))]); //random values another way


displaySymbol($symbols[array_rand($symbols)]); //random values another way

?>

<!DOCTYPE html>

<html>
    <head>
        <title>PHP Arrays</title>
    </head>
    
    
    <body>
        
        
        
        
    </body>
    
    
    
</html>