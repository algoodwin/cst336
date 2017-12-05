<!DOCTYPE html>
<html>
    <head>
        <title>Final Project </title>
         <script src="https://code.jquery.com/jquery.min.js"></script>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link  href="css/styles.css" rel="stylesheet" type="text/css" />

    </head>
    <body>
         <div class="jumbotron">
             <h1> Color Themes!</h1>
             <h3> Ever struggled to know what colors would look great together? What a real color name is?
                 Don't worry this site can help you!</h3>
         </div>     
         
         
         <form>
             <legend> Select What Want to know!</legend>
               Colors Basic Name <select id="colors" name="color">
                   <option value="">Select One</option>
                <?php
                            
                                $records = getColors();
                                foreach ($records as $record) {
                                       
                                       echo  "<option value='$record[id]'> $record[og_name] </option>";
                                   }
                            
                ?>

                
                            

            </select><br />
           
             
             
             
         </form>
       
                        <div style="width:10px;height:10px;border:100px solid #d83"></div>

        
        </br> </br>
        <footer>
            Disclaimer: The information is this site is not real.
        </footer>

    </body>
</html>







<?php


function getColors(){
        include 'dbConnection.php';
        $conn = getDatabaseConnection(final_project);


        $sql = "SELECT og_name FROM `og_colors`";

            
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $records = $stmt->fetchAll();
    
    return $records;
    
}

?>