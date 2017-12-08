<?php


$bestTeam = true;
echo ($bestTeam)?"Go 49ers!":"Go Panthers!";

$letters = array("A","B","c","d","e","f");
unset($letters[0]);
echo $letters[1];
echo $letters[2];

echo count($letters);
echo"</br>";
$letters = array("A","B","C"); 
$letters[2] = "E";
array_push($letters, "I");
$letters[] = "F";

echo $letters[0];
echo $letters[1];
echo $letters[2];
echo $letters[3];
echo $letters[4];
echo $letters[5];
echo $letters[6];

echo"</br>";
echo"</br>";

$message ="Good";
function gretting(){
    $greeting = $message . "morning";
    echo $greeting;
}
gretting();




?>

<html>
<head>
<script src="https://code.jquery.com/jquery-3.1.0.js"></script>
<script>
$("h1").html("hello");
</script>
</head>
<body>
<h1></h1>
</body>