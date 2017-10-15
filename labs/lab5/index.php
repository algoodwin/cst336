<?php

include '../../dbConnection.php';

$conn = getDatabaseConnection();

function getDeviceTypes() {
    global $conn;
    $sql = "SELECT DISTINCT(deviceType)
            FROM `tc_device` 
            ORDER BY deviceType";
    
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($records as $record) {
        
        echo "<option> "  . $record['deviceType'] . "</option>";
        
    }
}


function displayDevices(){
    global $conn;
    
    $sql = "SELECT * FROM tc_device WHERE 1 ";
    
    if(!isset($_GET['submit']))
    {
         $sql = "SELECT * FROM tc_device ORDER BY deviceName";
    }
    if (isset($_GET['submit'])){
        
        $namedParameters = array();
        
        if (!empty($_GET['deviceName'])) {
            //the following querey allows SQL injection due to the single quotes
           // $sql .= " AND deviceName LIKE '%" . $_GET['deviceName'] . "%'";
            
            $sql .= " AND deviceName LIKE :deviceName "; //using named parameters 
            $namedParameters[':deviceName'] = "%" . $_GET['deviceName'] . "%";
            
        }
        
        if (!empty($_GET['deviceType'])) {
            //the following querey allows SQL injection due to the single quotes
           // $sql .= " AND deviceName LIKE '%" . $_GET['deviceName'] . "%'";
            
            $sql .= " AND deviceType LIKE :deviceType"; //using named parameters 
            $namedParameters[':deviceType'] = "%" . $_GET['deviceType'] . "%";
            
        }
        
        if (isset($_GET['available']) ) {
            
            
            //the following querey allows SQL injection due to the single quotes
           // $sql .= " AND deviceName LIKE '%" . $_GET['deviceName'] . "%'";
            $sql .= " AND status LIKE 'A'"; //using named parameters 
         
       
            
            
        }
        
        if (isset($_GET['orderBy'])) {
              
            $orderby = $_GET['orderBy'];
            if($orderby == 'price'){
                $sql .= " ORDER BY price"; //using named parameters 
            }
            if($orderby =='deviceName')
            {
                 $sql .= " ORDER BY deviceName";
            }

        }
        
        
        
    }//endIf (isset)
    
    //If user types a deviceName
     //   "AND deviceName LIKE '%$_GET['deviceName']%'";
    //if user selects device type
      //  "AND deviceType = '$_GET['deviceType']";
    
    
    $stmt = $conn->prepare($sql);
    $stmt->execute($namedParameters);
    $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
 
    
     foreach ($records as $record) {
        
        echo  $record['deviceName'] . " " . $record['deviceType'] . " " .
              $record['price'] .  "  " . $record['status'] . 
              "<a target='checkoutHistory' href='checkoutHistory.php?deviceId=".$record['deviceId']."'> Checkout History </a> <br />";
        
    }

}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Lab 5: Device Search </title>
         <style>
            @import url("css/styles.css");
            
        </style>
    </head>
    <body>
        <div id="body">
        
        <h1> Technology Center: Checkout System </h1>
        
        <form id="form">
            
            Device: <input type="text" name="deviceName" placeholder="Device Name" id ="textIn"/>

            Type: 
            <select name="deviceType" id="dropDown">
                <option>Select One</option>
                <?=getDeviceTypes()?>
            </select>
            
            <input type="checkbox" name="available" id="available">
            <label for="available"> Available </label>
            <br>
            Order by:
            <input type="radio" name ="orderBy" id= "orderByName" value ="deviceName"/>
            <label for="orderByName"> Name</label>
            <input type="radio" name ="orderBy" id= "orderByPrice" value ="price"/>
            <label for="orderByPrice"> Price</label>
            
            <input type="submit" value="Search!" name="submit" id="button" >
        </form>
        
        
        <hr>
        
        <?=displayDevices()?>
        
        
        <iframe name="checkoutHistory" width="400" height="400"></iframe>
        </div>

    </body>
</html>