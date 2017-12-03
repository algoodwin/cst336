

<!DOCTYPE html>
<html>
    <head>
        <title> Lab 10: Photo Gallery </title>
     <link  href="styles.css" rel="stylesheet" type="text/css" />


    </head>
    <body>
    <div id="contain">
    <h2> Photo Gallery </h2>
    <form method="POST" enctype="multipart/form-data"> 


        <input type="file" name="myFile" /> 
        
        <input type="submit" value="Upload File!" />

    </form>
</div>

    </body>
</html>

<?php

  //print_r($_FILES);
  //cho "File size " . $_FILES['myFile']['size'];
  
        $files = scandir("gallery/", 1);
     
          
      
        
     
  if($_FILES['myFile']['size'] > 1000000)
  {
      echo "<h3> Size is too large </h3>";
      
      
  }
  else{
        move_uploaded_file($_FILES["myFile"]["tmp_name"], "gallery/" .$_FILES['myFile']['name']);

  }
  
  
   for ($i = 0; $i < count($files)-2; $i++) {
         
       echo" <div class='thumbnail'>";  echo "<img src='gallery/" .   $files[$i] . "' width='75' >"; echo "</div>";
      }
  

  

    
    
    
?>