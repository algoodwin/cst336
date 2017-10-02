<?php
function yearList($startYear, $endYear)
{
    $sum =0;
    $zodiac = array("rat","ox","tiger","rabbit","dragon","snake","horse","goat","monkey","rooster","dog","pig");
    $animal =0;
    $start=4;
    for($i=$startYear; $i<=$endYear; $i = $i+4){
       
        echo "<li> Year $i";
        $sum = $sum + $i;
       
        if ($i == 1776)
            {
                echo"<b> USA INDEPENDENCE!</b> ";
            }
        
        if($i%100 == 0)
            {
                echo"<b> Happy New Century!</b> ";
            }
        echo"</br>";
        
        ////////PRINT OUT THE SYMBOLS START//////
        if($i%12 == 4)
        {
            echo"<img src='img/$zodiac[0].png'/>";
        }
        if($i%12 == 5)
        {
            echo"<img src='img/$zodiac[1].png'/>";
        }
        if($i%12 == 6)
        {
            echo"<img src='img/$zodiac[2].png'/>";
        }
        if($i%12 == 7)
        {
            echo"<img src='img/$zodiac[3].png'/>";
        }
        if($i%12 == 8)
        {
            echo"<img src='img/$zodiac[4].png'/>";
        }
        if($i%12 == 9)
        {
            echo"<img src='img/$zodiac[5].png'/>";
        }
        if($i%12 == 10)
        {
            echo"<img src='img/$zodiac[6].png'/>";
        }
        if($i%12 == 11)
        {
            echo"<img src='img/$zodiac[7].png'/>";
        }
        if($i%12 == 0)
        {
            echo"<img src='img/$zodiac[8].png'/>";
        }
        if($i%12 == 1)
        {
            echo"<img src='img/$zodiac[9].png'/>";
        }
        if($i%12 == 2)
        {
            echo"<img src='img/$zodiac[10].png'/>";
        }
        if($i%12 == 3)
        {
            echo"<img src='img/$zodiac[11].png'/>";
        }
         ////////PRINT OUT THE SYMBOLS END//////
  
         
        
        echo" </li>";
          
}
   
    return $sum;
}





?>
<!DOCTYPE html>
<html>
    <head>
        <title>Practice: Chinese Zodiac Years </title>
    </head>
    <body>
<h1>Chinese Zodiac List</h1>

<?php $sum =yearList($_GET['startYear'], $_GET['endYear']);?>
<h1>
    <?php  echo"Year Sum =$sum ";?>
    
</h1>



    </body>
</html>