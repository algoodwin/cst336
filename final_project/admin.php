<?php 
session_start();
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
                <a class="nav-item nav-link" href="theme.php">Themes</a>
              <a class="nav-item nav-link" href="admin.php">Admin</a>
            
            </div>
          </div>
        </nav>
        <div class="jumbotron">
             <h1> Admin Portal</h1>
       
         </div>     
         
        <form method="POST" action ="loginProcess.php">
            
            
            Username: <input type="text" name="username"/> <br /><br />
            
            Password: <input type="password" name="password"/> <br />
            
            <input type="submit" name="login" value ="Login"/>
            
            <?php
             if(isset($_SESSION["error"])){
                        $error = $_SESSION["error"];
                        echo "<span>$error</span>";
             }
            ?>
        </form>


    </body>
</html>
<?php
    unset($_SESSION["error"]);
?>