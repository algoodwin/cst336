<?php



    $selectedColor = $_GET['colorname'];
  


  include 'dbConnection.php';
$conn = getDatabaseConnection("final_project");

     
         global $conn;

            $sql = "SELECT * FROM `specific_colors` WHERE id = '$selectedColor'"; 
                    
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            $records = $stmt->fetchAll();

        ;

        foreach ($records as $record) {
            $temphex = $record['hex'];
       
            echo "<div id='rect' style='display: inline-block; margin: 20px; width:5px;heighht:5px; text-align: center; border:100px solid #" . $record['hex'] . "'> ";
            echo  $record['name'] . " </br>  #" . $record['hex'] . " </div> ";
                
    	   
        }




?>