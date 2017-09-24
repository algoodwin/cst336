<?php

session_start(); //starts or continues an existing session

//$players = array();
//$players["John"] =40; //basically a hashamp for php, look up by name not index

$_SESSIONS['Juan'] =40;//sessions give in a built in array of storts. 
echo $_SESSION["Juan"];


//you can use the element of the array to call for ex $_SESSION[$players[$winner]] = $points_won
    //allows for the keeping track of the winner in this case and their point they have
    
    

//save time that lab takes and how many matches, after 10 times running the program find the average of them all. store elapsed time in the session and add time into it
?>