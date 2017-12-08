<?php
 include 'dbConnection.php';
 $conn = getDatabaseConnection(final_project);

?>

<!DOCTYPE html>
<html>
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
                <a class="nav-item nav-link" href="theme.php">Themes</a>
              <a class="nav-item nav-link" href="admin.php">Admin</a>
            
            </div>
          </div>
        </nav>
         <div class="jumbotron">
             <h1> Colors!</h1>
             <h3> Ever struggled to know what colors would look great together? What a real color name is?
                 Don't worry this site can help you!</h3>
         </div>     
         
         
         <form method ="GET" action ="submitForm.php">
             <legend> Select What Want to know!</legend>
               Colors Basic Name <select id="original_colors" name="color" required>
                   <option value="">Select One</option>
                <?php
                            
                                $records = getColors();
                                foreach ($records as $record) {
                                       
                                       echo  "<option value='$record[id]'> $record[og_name] </option>";
                                   }
                            
                ?>

                
                            

            </select><br />
           
          
             
            <input type='button' onclick='getData()'value ="submit">
             
         </form>
         </br></br></br>
       
       <div id="color_return"></div>
       

        
        </br> </br>
        <footer>
            Disclaimer: The information is this site is not real.
        </footer>







<script>
    
    
$("input").change(getData);
    	
function getData() { 

      $.ajax({
            type: "get",
             url: "submitForm.php",
        dataType: "html",
            data: { colorname:  $("#original_colors").val()},
            success: function(response) {
                
                
                
                 $('#color_return').empty().append(response);
                 
                 
            
              },
            complete: function(data,status) { //optional, used for debugging purposes
                 //alert(status);
            }
         });
    }
    
</script>
    </body>
</html>







<?php

function getColors(){
       

        global $conn;
        $sql = "SELECT * FROM `og_colors`";

            
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $records = $stmt->fetchAll();
    
    return $records;
    
}

function getThemes(){
      global $conn;

        $sql = "SELECT * FROM `color_themes`";

            
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $records = $stmt->fetchAll();
    
    return $records;
    
}



?>