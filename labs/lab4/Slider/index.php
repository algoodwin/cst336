<?php
 $backgroundImage = "img/sea.jpg";
 
if(isset($_GET['keyword'])){
               include 'api/pixabayAPI.php';
               $imageURLs = getImageURLs($_GET['keyword']); //php has a post and a get array 
               
               $backgroundImage = $imageURLs[array_rand($imageURLs)];
        }

?>
<!DOCTYPE html>

<html>
    <head>
        <title>Image Carousel</title>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
   
   <style>
       @import url("css/styles.css");
      body{
          background-image: url('<?=$backgroundImage ?>');
      }
    </style>
    
    </head>
    
    <body>
       <br/>
       <br/>
       <?php
      
            if(!isset($imageURLs)){
                echo "<h2> Type a keyword to display a slideshow <br / > with random images from Pixabay.com </h2>";
            }
            else {
                // Display Carousel Here
                for($i =0; $i < 5; $i++)
                {
                   do {
                   $randomIndex = rand(0, count($imageURLs));
                    }
                
                    while(!isset ($imageURLs[$randomIndex]));
                    
                    echo "<img src ='" . $imageURLs[$randomIndex] . "' width='200' > ";
                    unset($imageURLs[$randomIndex]);
                    
                }
                }
        
          ?>
          
          <form>
              <input type="text" name ="keyword" placeholder = "Keyword">
              <input type="submit" value = "Submit" />
              
           </form>
          
    
    
    
    
    
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    </body>
    
    
    
</html>