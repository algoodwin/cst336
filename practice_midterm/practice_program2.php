<?php


include '../dbConnection.php';

$conn = getDatabaseConnection('MidtermPractice');

function populationBeteween(){
    
    global $conn;
    $sql = "SELECT * FROM `mp_town` WHERE population BETWEEN 50000 AND 80000";

    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($records as $record) {
        
        echo " Town Name:"  . $record['town_name'] . "  Population: " . $record['population'] ;
    }
    
    
}
function allTowns(){
        global $conn;
        $sql = "SELECT * FROM `mp_town` LEFT JOIN mp_county ON mp_town.county_id = mp_county.county_id";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
        foreach ($records as $record) {
                
                echo " "  . $record['town_name'] . " &nbsp&nbsp&nbsp&nbsp " . $record['county_name']. " &nbsp&nbsp&nbsp " . $record['population'] . " </br>" ;
    }
    }

function populationCounty(){
    global $conn;
        $sql = "SELECT county_name, SUM( population ) total
		FROM mp_town t
		JOIN mp_county c ON t.county_id = c.county_id
		GROUP BY county_name";
        $stmt = $conn->query($sql);	
        $results = $stmt->fetchAll();
        foreach ($results as $record) {
    	echo $record['county_name']  . " - " . $record['total'] .  "<br />";
}

function populationState(){
        global $conn;
        $sql ="SELECT state_name, SUM( population ) total
    		FROM mp_town t
    		JOIN mp_county c ON t.county_id = c.county_id
    		JOIN mp_state s ON s.state_id = c.state_id
    		GROUP BY state_name ";
    		
        $stmt = $conn->query($sql);	
        $results = $stmt->fetchAll();
        foreach ($results as $record) {
        	echo $record['state_name']  . " - " . $record['total'] .  "<br />";
        }	
    }

function leastPopulated(){
    global $conn;
        $sql = "SELECT town_name, population
    		FROM mp_town 
    		ORDER BY population
    		LIMIT 3";
        		
        $stmt = $conn->query($sql);	
        $results = $stmt->fetchAll();
        foreach ($results as $record) {
        	echo $record['town_name']  . " - " . $record['population'] .  "<br />";
        }
    }
    
function noTown(){
    global $conn;
    $sql = " SELECT * FROM mp_county c
LEFT JOIN mp_town t 
ON c.county_id = t.county_id
WHERE t.county_id IS NULL";
    $stmt = $conn->query($sql);	
    $results = $stmt->fetchAll();
    
    foreach ($results as $record) {
        echo $record['county_name']  . "<br />";
        }
}
    
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title> </title>
    </head>
    <body>
      
      <h3>  Population between 50,000 and 80,000:</h3> 
        
        <?php
        populationBeteween();
        ?>
        
      <h3>  All Towns:</h3> 
       <?php
        allTowns();
        ?>
        
        <h3> All Populations Per County:</h3> 
           <?php
            populationCounty();
            ?>
            
        <h3> Total Populations Per State:</h3> 
           <?php
            populationState();
            ?>

         <h3> Total Populations Per State:</h3> 
           <?php
            populationState();
            ?>
        <h3>Top 3 Least Populated Cities: </h3>
        
            <?php
               leastPopulated();
            ?>
        <h3>Cities without a County: </h3>
        
            <?php
               noTown();
            ?>
        
    </body>
</html>