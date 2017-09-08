<?php
    function getRandomColor(){
        
           return "rgba(".rand(0,255)." ,".rand(0,255).",".rand(0,255).", ".(rand(0,100)/100) .");";
        
    }
?>


<!DOCTYPE html>
<html>
    <head>
        <title> Random Background Color </title>
        <meta charset = "utf-8"/>
        
        <style>
            body{
             /*   background-color: rgba(15,20,200, .2);*/
             
             <?php
             
        
             echo "background-color: " . getRandomColor();
             
            ?>
            
                
            }
            
            h1{
                <?php
                 echo "color: " . getRandomColor();
                ?>
            }
            
            h2{
              
                background-color: <?=getRandomColor()?>;
            }
            }
        </style>
    </head>
    <body>
        <h1> Welcome</h1>
        <h2> To my Crib</h2>
        

    </body>
</html>