<?php

 include("../../dbConnection.php");
 $conn = getDatabaseConnection();
    $searchName = $_GET['value'];


function getData(){
   global $searchName;
    global $conn;
    
    
}

    //the administrator clicked on the "Add User" button
    

    $sql = "INSERT INTO walmartApi
            (searchItem, amountSearched, time)
            VALUES
            ('$searchName',1,now())";

    $stmt = $conn->prepare($sql);
    $stmt->execute();


$sql = "SELECT searchItem, SUM( amountSearched ) total FROM walmartApi WHERE
            searchItem = '$searchName' GROUP BY searchItem";
        $stmt = $conn->query($sql);	
        $results = $stmt->fetchAll();
        foreach ($results as $record) {
    	    echo $record['total'];


  
}
?>