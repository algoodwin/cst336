<!DOCTYPE html>
<html>
    <head>
        <title> What Should You Listen To?</title>
         <style>
            @import url("css/styles.css");
            
        </style>
    </head>
    <body>
      <h1> Choose from the items below, to find out what to listen to!</h1>
       <form action="recipe.php" method="post">
           <fieldset id="border">
        <h3>Choose an Animal:</h3>
           <label for = "Cow"> Cow</label><input type="radio" name="Animal" value ="cow" id = "cow"> 
          <label for = "dog"> Dog</label> <input type="radio" id="dog" name="Animal" value ="dog"> 
           <label for = "dolphin"> Dolphin</label><input type="radio" id="dolphin" name="Animal" value ="dolphin"> 

        
        <h3>Choose a Flower:</h3>
        
        <label for ="in"><img src ="img/cherry.jpg"></label><input id="in" type="radio" name ="flower" value="innocent"/> </br>
        <label for ="lo"> <img src ="img/rose.jpg"></label><input id ="lo" type="radio" name ="flower" value="love"/> </br>
        <label for ="ro"> <img src ="img/tulip.jpg"></label><input id = "ro" type="radio" name ="flower" value="heartbreak"/> </br>

        <h3>Choose a Scene</h3>
        <label for ="f"> <img src="img/forest.jpg"></label><input type="radio" name ="scene" value="sad" id ="f"/> </br>
          <label for ="o"> <img src="img/ocean.jpg"></label> <input type="radio" name ="scene" value="happy" id= "o"/></br>

        <h3>Choose a number </h3>
        <select name="number" id = "optionb">
            <option  value="one"> One </option>
            <option  value="two"> Two </option>
        </select>

         </br>
         </br>
        <button id = "button"name="submit" type="submit"> Submit </button>
        </fieldset>
        </form>
       
       
    </body>
    
</html>