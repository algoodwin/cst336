
<?php
session_start();
       include 'dbConnection.php';
        $conn = getDatabaseConnection("final_project");

     function getColor() {
         global $conn;

            $sql = "SELECT * FROM specific_colors INNER JOIN og_colors ON specific_colors.id=og_colors.id"; 
                    
                            
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            $record = $stmt->fetchAll(PDO::FETCH_ASSOC);//expecting only one record
 
            return $record;
        }
        
    function getColorNames(){
    global $conn;

        $sql = "SELECT og_name FROM `og_colors`";

            
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $records = $stmt->fetchAll();
    
    return $records;
    
}








?>
  <!DOCTYPE html>
    <head>
        <title>Final Project </title>
         <script src="https://code.jquery.com/jquery.min.js"></script>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link  href="css/styles.css" rel="stylesheet" type="text/css" />

    </head>
    <body>
         <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
              <a class="nav-item nav-link active" href="index.php">Home <span class="sr-only">(current)</span></a>
              <a class="nav-item nav-link" href="theme.php">Theme</a>
              <a class="nav-item nav-link" href="admin.php">Admin</a>
            
            </div>
          </div>
        </nav>
        <div class="jumbotron">
             <h1> Admin Portal</h1>
       
         </div>     
     
     
      <fieldset>
        
        <legend> Add New Color </legend>
        
        <form method ="POST">
            
            Color Name: <input type="text" name="newColor" required /> <br>
            Hex Code: # <input type="text" name="hex" required/> <br>
            Color Family: <select name="og_Type" id="original_name">
                            <option value=""> Select One </option>
                             <option value ="1">White</option>
                            <option value ="2">Tan</option>
                            <option value ="3">Yellow</option>
                            <option value ="4">Brown</option>
                            <option value ="5">Grey</option>
                            <option value ="6">Orange</option>
                            <option value ="7">Red</option>
                            <option value ="8">Pink</option>
                            <option value ="9">Purple</option>
                            <option value ="10">Blue</option>
                            <option value ="11">Green</option>
                            
                        </select>
                        <br />
                <input type="submit" name="addColorForm" value="Add Color!"/>
        </form>
        
    </fieldset>
    </form>
           
          <form action="logout.php">
            
            <input type="submit" value="Logout" />
            
        </form>
    
    </br></br>
    
    
    
    <h4> Existing Colors: </h4>
           

<?php

    function confirmDelete($colorName) {
                
                
                return confirm("Are you sure you want to delete this color?" + colorName + "");
                
            }
            
    
        $colors = getColor();
        //print_r($pets);
        
        $sql1= "SELECT COUNT(id) AS count FROM `specific_colors` WHERE id = 1";
            $stmt1 = $conn->prepare($sql1);
            $stmt1->execute();
            $records1 = $stmt1->fetch();
        $sql2= "SELECT COUNT(id) AS count FROM `specific_colors` WHERE id = 2";
            $stmt2 = $conn->prepare($sql2);
            $stmt2->execute();
            $records2 = $stmt2->fetch();
        $sql3= "SELECT COUNT(id) AS count FROM `specific_colors` WHERE id = 3";
            $stmt3 = $conn->prepare($sql3);
            $stmt3->execute();
            $records3 = $stmt3->fetch();
        $sql4= "SELECT COUNT(id) AS count FROM `specific_colors` WHERE id = 4";
            $stmt4 = $conn->prepare($sql4);
            $stmt4->execute();
            $records4 = $stmt4->fetch();
        $sql5= "SELECT COUNT(id) AS count FROM `specific_colors` WHERE id = 5";
            $stmt5 = $conn->prepare($sql5);
            $stmt5->execute();
            $records5 = $stmt5->fetch();
        $sql6= "SELECT COUNT(id) AS count FROM `specific_colors` WHERE id = 6";
            $stmt6 = $conn->prepare($sql6);
            $stmt6->execute();
            $records6 = $stmt6->fetch();
        $sql7= "SELECT COUNT(id) AS count FROM `specific_colors` WHERE id = 7";
            $stmt7 = $conn->prepare($sql7);
            $stmt7->execute();
            $records7 = $stmt7->fetch();
        $sql8= "SELECT COUNT(id) AS count FROM `specific_colors` WHERE id = 8";
            $stmt8 = $conn->prepare($sql8);
            $stmt8->execute();
            $records8 = $stmt8->fetch();
        $sql9= "SELECT COUNT(id) AS count FROM `specific_colors` WHERE id = 9";
            $stmt9 = $conn->prepare($sql9);
            $stmt9->execute();
            $records9 = $stmt9->fetch();
        $sql10= "SELECT COUNT(id) AS count FROM `specific_colors` WHERE id = 10";
            $stmt10 = $conn->prepare($sql10);
            $stmt10->execute();
            $records10 = $stmt10->fetch();
        $sql11= "SELECT COUNT(id) AS count FROM `specific_colors` WHERE id = 11";
            $stmt11 = $conn->prepare($sql11);
            $stmt11->execute();
            $records11 = $stmt11->fetch();
            
            
            echo $records1['count'] . " White Colors Exist </br>";
            
            echo $records2['count'] . " Tan Colors Exist </br>";

            echo $records3['count'] . " Yellow Colors Exist </br>";

            echo $records4['count'] . " Brown Colors Exist </br>";

            echo $records5['count'] . " Grey Colors Exist </br>";

            echo $records6['count'] . " Orange Colors Exist </br>";
            
            echo $records7['count'] . " Red Colors Exist </br>";
            echo $records8['count'] . " Pink Colors Exist </br>";
            echo $records9['count'] . " Purple Colors Exist </br>";
            echo $records10['count'] . " Blue Colors Exist </br>";
            
            echo $records11['count'] . " Green Colors Exist </br></br>";


                
            
        foreach ($colors as $color){
            
            echo "Name: ";
            echo  $color['name'];
            echo "    Type: " . $color['og_name'];
            echo "    Hex: #" . $color['hex'] . " ";
            echo "</a> <a href='updateColor.php?colorName=".$color['name']."'>Update </a>";
            echo "<form action='deleteColor.php' style='display:inline' onsubmit='return confirmDelete()'>
                     <input type='hidden' name='colorHex' value='".$color['hex']."' />
                     <input type='submit' value='Delete'>
                  </form> </br>";
            echo "<div style='display: inline-block; width:5px;height:5px; text-align: center; border:100px solid #" . $color['hex'] . "'></div> </br> ";
          
        
            echo "<br />";
    
            echo "<br>";
            
        }
        
        
        if (isset($_POST['addColorForm'])){
    //the administrator clicked on the "Add User" button
    $colorName = $_POST['newColor'];
    $hex    = $_POST['hex'];
    $colorType = $_POST['og_Type'];
    echo "COLOR TYPE" . $_POST['og_Type'];
  
    
        $sql1 = "INSERT IGNORE INTO `specific_colors` (`name`, `hex`, `id`) VALUES ('$colorName', '$hex', '$colorType')";
        
        $stmt1 = $conn->prepare($sql1);
        $stmt1->execute();

        
         getColorNames();
    
        
        
    
}



?>



        
  <script>
            
            function confirmDelete(colorName) {
                
                
                return confirm("Are you sure you want to delete this color?" + colorName + "");
                
            }
            
            
        </script>