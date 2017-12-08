<?php



    $selectedTheme = $_GET['themeName'];
  


  include 'dbConnection.php';
$conn = getDatabaseConnection("final_project");

     
         global $conn;

            $sql = "SELECT * FROM `color_themes` WHERE theme = '$selectedTheme'"; 
                    
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            $record = $stmt->fetch();
            
        echo  "<h3>". $record['theme'] ." </h3> ";

        $n1 = $record['name1'];
        $n2 = $record['name2'];
        $n3 = $record['name3'];
        $n4 = $record['name4'];
        $n5 = $record['name5'];
        
      echo"<div id='colors'>";
            $sql1 = "SELECT * FROM `specific_colors` WHERE name = '$n1'"; 
            $stmt1 = $conn->prepare($sql1);
            $stmt1->execute();
             $name1 = $stmt1->fetch();
            echo "<div style='display: inline-block;width:5px;height:5px; text-align: center; border:100px solid #" . $name1['hex'] . "'> ";
            echo  $name1['name'] . " </br>  #" . $name1['hex'] . " </div> ";        
        
            
            $sql2 = "SELECT * FROM `specific_colors` WHERE name = '$n2'"; 
            $stmt2 = $conn->prepare($sql2);
            $stmt2->execute();
             $name2 = $stmt2->fetch();
            echo "<div style='display: inline-block; width:5px;height:5px; text-align: center; border:100px solid #" . $name2['hex'] . "'> ";
            echo  $name2['name'] . " </br>  #" . $name2['hex'] . " </div> ";
            
    	     $sql3 = "SELECT * FROM `specific_colors` WHERE name = '$n3'"; 
            $stmt3 = $conn->prepare($sql3);
            $stmt3->execute();
             $name3 = $stmt3->fetch();
            echo "<div style='display: inline-block; width:5px;height:5px; text-align: center; border:100px solid #" . $name3['hex'] . "'> ";
            echo  $name3['name'] . " </br>  #" . $name3['hex'] . " </div> ";
            
    	     $sql4 = "SELECT * FROM `specific_colors` WHERE name = '$n4'"; 
            $stmt4 = $conn->prepare($sql4);
            $stmt4->execute();
             $name4 = $stmt4->fetch();
            echo "<div style='display: inline-block;width:5px;height:5px; text-align: center; border:100px solid #" . $name4['hex'] . "'> ";
            echo  $name4['name'] . " </br>  #" . $name4['hex'] . " </div> ";
            
    	    $sql5 = "SELECT * FROM `specific_colors` WHERE name = '$n5'"; 
            $stmt5 = $conn->prepare($sql5);
            $stmt5->execute();
             $name5 = $stmt5->fetch();
            echo "<div style='display: inline-block; width:5px;height:5px; text-align: center; border:100px solid #" . $name5['hex'] . "'> ";
            echo  $name5['name'] . " </br>  #" . $name5['hex'] . " </div> ";

echo"</div>";


?>