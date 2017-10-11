<?php

$host ='localhost'; //cloud9
$dbname = 'tcp'; //database name
$username = "root";
$password = "";
$dbConn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

$dbConn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

function usersWithanA(){
        global $dbConn;
        $sql = "SELECT firstName, lastName, email FROM tc_user WHERE firstName LIKE 'A%'";
        
        $stmt = $dbConn->prepare($sql); // to get rid of SQL redundancy 
        
        $stmt->execute();
        
        $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
        //print_r($records);
        
        foreach ($records as $record)
        {
            echo $record['firstName']. " " . $record['lastName']. " " . $record['email'] . "<br />";
        }

}

function devices300(){
    global $dbConn;
    $sql = "SELECT * FROM tc_device WHERE price BETWEEN 300 AND 1000 ORDER BY price";
       $stmt = $dbConn->prepare($sql); // to get rid of SQL redundancy 
        
        $stmt->execute();
        
        $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
        //print_r($records);
      foreach ($records as $record)
        {
            echo $record['deviceName']. " " . $record['deviceType']. " " . $record['price'] . "<br />";
        }
}


?>
<!DOCTYPE html>
<html>
    <head>
        <title> </title>
    </head>
    <body>
        <h3>Users whoes first name starts with an A</h3>
        <?=usersWithanA(); ?>

        <h3>Devices priced 300 -1000</h3>
         <?=devices300(); ?>
         
         
    </body>
</html>