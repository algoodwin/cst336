<?php 
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Lab 6: Admin Login Page </title>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    </head>
    <body>

        <form method="POST" action ="loginProcess.php">
            <h1> Admin Login</h1>
            
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