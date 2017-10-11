<!DOCTYPE html>
<html>
    <head>
        <title>What Should You Listen To</title>
        <meta charset="utf-8">
        <style>
            @import url("css/styles.css");
            
        </style>
    </head>
    <body>

<?php


function songToListenTo($animal,$flower,$number,$scene){
  
  if($animal == "cow")
  {
     if($flower == 'innocent' and $scene =='sad')
      { 
         
          
          if($number == "one")
          {
             echo"<h2> The Thunder Rolls by Garthy Brooks </h2>";
             echo'<iframe width="560" height="315" src="https://www.youtube.com/embed/tdsJI8Wc2D4" frameborder="0" allowfullscreen></iframe>';
          }
          else {
              echo"<h2> Alyssa Lies by Jason Michael Carroll </h2>";
             echo'<iframe width="560" height="315" src="https://www.youtube.com/embed/nLh5vbBLpxI" frameborder="0" allowfullscreen></iframe>';
   
          }
           
      }
      else if($flower == 'innocent' and $scene =='happy')
      {
          if($number == "one")
          {
             echo"<h2> Chicken Fried by The Zach Brown Band </h2>";
             echo'<iframe width="560" height="315" src="https://www.youtube.com/embed/e4ujS1er1r0" frameborder="0" allowfullscreen></iframe>';
          }
          else {
              echo"<h2>Cruise by Florida Georgia Line </h2>";
             echo'<iframe width="560" height="315" src="https://www.youtube.com/embed/8PvebsWcpto" frameborder="0" allowfullscreen></iframe>';
   
          }
      }
      else if($flower == 'love' and $scene =='sad')
      {
          if($number == "one")
          {
             echo"<h2> Whiskey Lullaby by Brad Paisley and Alison Krauss</h2>";
             echo'<iframe width="560" height="315" src="https://www.youtube.com/embed/IZbN_nmxAGk" frameborder="0" allowfullscreen></iframe>';
          }
          else {
              echo"<h2>Dont Take the Girl by Tim McGraw </h2>";
             echo'<iframe width="560" height="315" src="https://www.youtube.com/embed/-vn6QdqxK3g" frameborder="0" allowfullscreen></iframe>';
   
          }
      }
      else if($flower == 'love' and $scene =='happy')
      {
          if($number == "one")
          {
             echo"<h2> Sweetheart by Thomas Rhett </h2>";
             echo'<iframe width="560" height="315" src="https://www.youtube.com/embed/Lv5DFKceFac" frameborder="0" allowfullscreen></iframe>';
          }
          else {
              echo"<h2>Forever & Forever Amen by Randy Travis </h2>";
             echo'<iframe width="560" height="315" src="https://www.youtube.com/embed/KtKXc_v2iLE" frameborder="0" allowfullscreen></iframe>';
   
          }
      }
     else if($flower == 'heartbreak' and $scene =='sad')
      {
          if($number == "one")
          {
             echo"<h2> Forget to Forget You by Scotty McCreery</h2>";
             echo'<iframe width="560" height="315" src="https://www.youtube.com/embed/dLs92ILQGrU" frameborder="0" allowfullscreen></iframe>';
          }
          else {
              echo"<h2>I Got The Boy by Kana Kramer </h2>";
             echo'<iframe width="560" height="315" src="https://www.youtube.com/embed/rNJwu-YkQlc" frameborder="0" allowfullscreen></iframe>';
   
          }
      }
    else if($flower == 'heartbreak' and $scene =='happy')
      {
          if($number == "one")
          {
             echo"<h2> When it Rains it Pours by Luke Combs </h2>";
             echo'<iframe width="560" height="315" src="https://www.youtube.com/embed/uXyxFMbqKYA" frameborder="0" allowfullscreen></iframe>';
          }
          else {
             echo"<h2> Little Red Waggon by Miranda Lambert </h2>";
             echo'<iframe width="560" height="315" src="https://www.youtube.com/embed/TQK0d72Jom8" frameborder="0" allowfullscreen></iframe>';
   
          }
      }
  }
   if($animal == "dog")
  {
     if($flower == 'innocent' and $scene =='sad')
      {
          if($number == "one")
          {
             echo"<h2> 7 Years by Lukas Graham </h2>";
             echo'<iframe width="560" height="315" src="https://www.youtube.com/embed/LHCob76kigA" frameborder="0" allowfullscreen></iframe>';
          }
          else {
              echo"<h2> How To Save A Life by The Fray </h2>";
             echo'<iframe width="560" height="315" src="https://www.youtube.com/embed/cjVQ36NhbMk" frameborder="0" allowfullscreen></iframe>';
   
          }
      }
      else if($flower == 'innocent' and $scene =='happy')
      {
          if($number == "one")
          {
             echo"<h2> Call Me Maybe by Carly Rae Jepsen </h2>";
             echo'<iframe width="560" height="315" src="https://www.youtube.com/embed/fWNaR-rxAic" frameborder="0" allowfullscreen></iframe>';
          }
          else {
              echo"<h2>All Star by Smash Mouth</h2>";
             echo'<iframe width="560" height="315" src="https://www.youtube.com/embed/L_jWHffIx5E" frameborder="0" allowfullscreen></iframe>';
   
          }
      }
      else if($flower == 'love' and $scene =='sad')
      {
          if($number == "one")
          {
             echo"<h2>Love on the Brain by Rhianna</h2>";
             echo'<iframe width="560" height="315" src="https://www.youtube.com/embed/0RyInjfgNc4" frameborder="0" allowfullscreen></iframe>';
          }
          else {
              echo"<h2>If I Were a Boy by Beyonce </h2>";
             echo'<iframe width="560" height="315" src="https://www.youtube.com/embed/AWpsOqh8q0M" frameborder="0" allowfullscreen></iframe>';
   
          }
      }
      else if($flower == 'love' and $scene =='happy')
      {
          if($number == "one")
          {
             echo"<h2> Fresh Eyes by Andy Grammer </h2>";
             echo'<iframe width="560" height="315" src="https://www.youtube.com/embed/xipU1hxO_nk" frameborder="0" allowfullscreen></iframe>';
          }
          else {
              echo"<h2>Crazy in Love by Beyonce </h2>";
             echo'<iframe width="560" height="315" src="https://www.youtube.com/embed/ViwtNLUqkMY" frameborder="0" allowfullscreen></iframe>';
   
          }
      }
     else if($flower == 'heartbreak' and $scene =='sad')
      {
          if($number == "one")
          {
             echo"<h2> So Sick by Ne-Yo </h2>";
             echo'<iframe width="560" height="315" src="https://www.youtube.com/embed/IxszlJppRQI" frameborder="0" allowfullscreen></iframe>';
          }
          else {
              echo"<h2>Jar of Hearts by Christina Perri</h2>";
             echo'<iframe width="560" height="315" src="https://www.youtube.com/embed/8v_4O44sfjM-YkQlc" frameborder="0" allowfullscreen></iframe>';
   
          }
      }
    else if($flower == 'heartbreak' and $scene =='happy')
      {
          if($number == "one")
          {
             echo"<h2> So What by Pink </h2>";
             echo'<iframe width="560" height="315" src="https://www.youtube.com/embed/FJfFZqTlWrQ" frameborder="0" allowfullscreen></iframe>';
          }
          else {
             echo"<h2> Single Ladies by Beyonce </h2>";
             echo'<iframe width="560" height="315" src="https://www.youtube.com/embed/4m1EFMoRFvY" frameborder="0" allowfullscreen></iframe>';
   
          }
      }
  }
  
if($animal == "dolphin")
  {
     if($flower == 'innocent' and $scene =='sad')
      {
          if($number == "one")
          {
             echo"<h2> Hallelujah by Jeff Buckley </h2>";
             echo'<iframe width="560" height="315" src="https://www.youtube.com/embed/y8AWFf7EAc4" frameborder="0" allowfullscreen></iframe>';
          }
          else {
              echo"<h2> Cats In The Cradle by Harry Chapin </h2>";
             echo'<iframe width="560" height="315" src="https://www.youtube.com/embed/KUwjNBjqR-c" frameborder="0" allowfullscreen></iframe>';
   
          }
      }
      else if($flower == 'love' and $scene =='sad')
      {
          if($number == "one")
          {
             echo"<h2> Jolene by Dolly Parton </h2>";
             echo'<iframe width="560" height="315" src="https://www.youtube.com/embed/IW25foOMkwI" frameborder="0" allowfullscreen></iframe>';
          }
          else {
              echo"<h2>Picture by Kid Rock ft Sheryl Crow</h2>";
             echo'<iframe width="560" height="315" src="https://www.youtube.com/embed/rKFx0MMqb48" frameborder="0" allowfullscreen></iframe>';
   
          }
      }
      else if($flower == 'innocent' and $scene =='happy')
      {
          if($number == "one")
          {
             echo"<h2>Good Vibrations by The Beach Boys </h2>";
             echo'<iframe width="560" height="315" src="https://www.youtube.com/embed/Eab_beh07HU" frameborder="0" allowfullscreen></iframe>';
          }
          else {
              echo"<h2>Dancing Queen by Abba </h2>";
             echo'<iframe width="560" height="315" src="https://www.youtube.com/embed/xFrGuyw1V8s" frameborder="0" allowfullscreen></iframe>';
   
          }
      }
      else if($flower == 'love' and $scene =='happy')
      {
          if($number == "one")
          {
             echo"<h2> The Way You Make me Feel by Michael Jackson</h2>";
             echo'<iframe width="560" height="315" src="https://www.youtube.com/embed/HzZ_urpj4As" frameborder="0" allowfullscreen></iframe>';
          }
          else {
              echo"<h2>Love Shack by The B-52’s  </h2>";
             echo'<iframe width="560" height="315" src="https://www.youtube.com/embed/9SOryJvTAGs" frameborder="0" allowfullscreen></iframe>';
   
          }
      }
     else if($flower == 'heartbreak' and $scene =='sad')
      {
          if($number == "one")
          {
             echo"<h2> Total Eclipse of the Heart by Bonnie Tyler </h2>";
             echo'<iframe width="560" height="315" src="https://www.youtube.com/embed/lcOxhH8N3Bo" frameborder="0" allowfullscreen></iframe>';
          }
          else {
              echo"<h2>Bleeding Love by Leona Lewis (</h2>";
             echo'<iframe width="560" height="315" src="https://www.youtube.com/embed/Vzo-EL_62fQ" frameborder="0" allowfullscreen></iframe>';
   
          }
      }
    else if($flower == 'heartbreak' and $scene =='happy')
      {
          if($number == "one")
          {
             echo"<h2> One Week by Barenaked Ladies  </h2>";
             echo'<iframe width="560" height="315" src="https://www.youtube.com/embed/fC_q9KPczAg" frameborder="0" allowfullscreen></iframe>';
          }
          else {
             echo"<h2> I Will Survive by Gloria Gaynor </h2>";
             echo'<iframe width="560" height="315" src="https://www.youtube.com/embed/GLHY0Pqeyzw" frameborder="0" allowfullscreen></iframe>';
   
          }
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
    
     <?php 
    if (empty($_POST['Animal']) || empty($_POST['flower']) || empty($_POST['number'])  || empty($_POST['scene'])  ) {
                    
         echo "<h2 style='color:red'>  Not All values were selected that should have been, please try again with all the values";
         return;
         exit;
        }           
    
     $animal = $_POST["Animal"];
     $flower =$_POST["flower"];
     $number = $_POST["number"];
     $scene = $_POST["scene"];

     
     songToListenTo($animal,$flower,$number,$scene);
     ?>
     
     </br>
     </br>
     
     
     
     </br>
    <form action ="recipe.php" method = post>
           <fieldset id="border">
               <h1> You Selected:</h1>
        <h3>Choose an Animal:</h3>
           <label for = "Cow"> Cow</label><input type="radio" name="Animal" value ="cow" id = "cow" checked =
           <?php
                if ($_GET['animal']=="cow") {
                    echo "checked";
                }
             
             ?> > 
          <label for = "dog"> Dog</label> <input type="radio" id="dog" name="Animal" value ="dog" checked =
           <?php
                if ($_GET['animal']=="dog") {
                    echo "checked";
                }
             
             ?> > 
           <label for = "dolphin"> Dolphin</label><input type="radio" id="dolphin" name="Animal" value ="dolphin" checked =
           <?php
                if ($_GET['animal']=="dolphin") {
                    echo "checked";
                }
             
             ?> >  

        
        <h3>Choose a Flower:</h3>
        <div id="radiob">
        <label for ="in"><img src ="img/cherry.jpg"></label><input id="in" type="radio" name ="flower" value="innocent" checked =
           <?php
                if ($_GET['flower']=="innocent") {
                    echo "checked";
                }
             
             ?> /> 
             </br>
        <label for ="lo"> <img src ="img/rose.jpg"></label><input id ="lo" type="radio" name ="flower" value="love" checked =
           <?php
                if ($_GET['flower']=="love") {
                    echo "checked";
                }
             
             ?> /> </br>
        <label for ="ro"> <img src ="img/tulip.jpg"></label><input id = "ro" type="radio" name ="flower" value="heartbreak"checked =
           <?php
                if ($_GET['flower']=="heartbreak") {
                    echo "checked";
                }
             
             ?> /> </br>
        </div>
        <h3>Choose a Scene</h3>
        <label for ="f"> <img src="img/forest.jpg"></label><input type="radio" name ="scene" value="sad" id ="f" checked =
           <?php
                if ($_GET['scene']=="sad") {
                    echo "checked";
                }
             
             ?> /> </br>
          <label for ="o"> <img src="img/ocean.jpg"></label> <input type="radio" name ="scene" value="happy" id= "o"
          checked =
           <?php
                if ($_GET['scene']=="happy") {
                    echo "checked";
                }
             
             ?> /></br>

        <h3>Choose a number </h3>
        <select name="number" id = "optionb">
            <option  value="one" selceted =
           <?php
                if ($_GET['number']=="one") {
                    echo "selected";
                }
             
             ?>  > One </option>
            <option  value="two"
            selected =
           <?php
                if ($_GET['number']=="two") {
                    echo "selected";
                }
             
             ?> > Two </option>
        </select>

         </br>
         </br>
        <button id = "button" name="submit" type="submit"> Submit </button>
        </fieldset>
        </form>
     
     
    
    </body>
</html>