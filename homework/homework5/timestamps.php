<?php

 include("../../dbConnection.php");
 $conn = getDatabaseConnection();
    $searchName = $_GET['value'];


    //the administrator clicked on the "Add User" button
    


$sql = "SELECT time FROM walmartApi WHERE
            searchItem = '$searchName'";
        $stmt = $conn->query($sql);	
        $results = $stmt->fetchAll();
        foreach ($results as $record) {
    	    echo $record['time']. "<br />";
        }

  

?>