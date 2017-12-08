<?php
session_start();

if (!isset($_SESSION['username'])) { //validates that admin has indeed logged in
    
    header("Location: admin.php");
    
}
 include 'dbConnection.php';
$conn = getDatabaseConnection("final_project");
function getColorInfo($colorName) {
    global $conn;    
    $sql = "SELECT * 
            FROM specific_colors
            WHERE name = '$colorName'";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $record = $stmt->fetch();
  //  print_r($record);
    return $record;
  
}
if(isset($_GET['updateColorForm']))
{
    $hex = $_GET['hex'];
    $name = $_GET['newColor'];
    $id = $_GET['og_type'];
    
    
    $sql = "UPDATE `specific_colors` SET `name` = '$name', `hex` = '$hex', `id` = '$id' WHERE `specific_colors`.`hex` = '$hex';";


    


    $stmt = $conn->prepare($sql);
    $stmt->execute($namedParameters);
    header("Location: adminPortal.php");
}


if (isset($_GET['colorName'])) {
    
    $colorName = getColorInfo($_GET['colorName']);
    
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
     
     
 
    <h2> Updating Color Info </h2>

  
        
        <fieldset>
        
        <legend> Update Color </legend>
        
        <form>
            
            Color Name: <input type="text" name="newColor" value = "<?=$colorName['name']?>" required /> <br>
            Hex Code: # <input type="text" name="hex" required value = "<?=$colorName['hex']?>" required/> <br>
                        
            Color Family   <select name="og_type" required> 
                        <option value=""> Select One </option>
                        <option value ="1" <?=($colorName['id']=='1' )?"selected":"" ?>>White </option>
                        <option value ="2" <?=($colorName['id']=='2')?"selected":"" ?>>Tan  </option>
                        <option value ="3" <?=($colorName['id']=='3')?"selected":"" ?>>Yellow  </option>
                        <option value ="4" <?=($colorName['id']=='4')?"selected":"" ?>>Brown  </option>
                        <option  value ="5"<?=($colorName['id']=='5')?"selected":"" ?>>Grey  </option>
                        <option  value ="6"<?=($colorName['id']=='6')?"selected":"" ?>>Orange  </option>
                        <option  value ="7"<?=($colorName['id']=='7')?"selected":"" ?>>Red  </option>
                        <option  value ="8"<?=($colorName['id']=='8')?"selected":"" ?>>Pink  </option>
                        <option  value ="9"<?=($colorName['id']=='9')?"selected":"" ?>>Purple  </option>
                        <option value ="10" <?=($colorName['id']=='10')?"selected":"" ?>>Blue  </option>
                        <option value ="11" <?=($colorName['id']=='11')?"selected":"" ?>>Green  </option>
                    </select>            
                        </br>
                <input type="submit" name="updateColorForm" value="Update Color!"/>
                
                
        </form>
        
    </fieldset>
    

    </body>
</html>
