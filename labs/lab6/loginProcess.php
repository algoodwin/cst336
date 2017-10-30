<?php
session_start();
//print_r ($_POST);

include '../../dbConnection.php';
$conn = getDatabaseConnection();
//print_r($conn); //check if connected, if its says PDO opject gucci

$username = $_POST['username'];
$password = sha1($_POST['password']);
//allows SQL Injection
//$sql = "SELECT * FROM tc_admin
//        WHERE username='$username'
//        And password='$password'";


$sql = "SELECT * FROM tc_admin
        WHERE username = :username
        AND password = :password";
        
$namedParameters =array();
$namedParameters[':username'] = $username;
$namedParameters[':password'] = $password;

$stmt = $conn->prepare($sql);
$stmt->execute($namedParameters);
$record = $stmt->fetch(PDO::FETCH_ASSOC);//expecting only one record

//print_r($record);
$error = "wrong username or password";
if(empty($record) ){
                 
        $_SESSION["error"] = $error;
        header("location: index.php");        
  
    
}
else{
    ///echo "Right credentials!";
    $_SESSION['username'] = $record['username'];
    $_SESSION['adminFullName'] = $record['firstName'] . " ". $record['lastName'];
    
    header("Location: admin.php"); //redirecting to admin portal
    
}


?>