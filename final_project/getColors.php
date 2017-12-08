<?php

    include 'dbConnection.php';
    $dbConn = getDatabaseConnection("final_project");    
    $sql = "SELECT * FROM specific_colors INNER JOIN og_colors ON specific_colors.id=og_colors.id";
    $stmt = $dbConn -> prepare($sql);
    $stmt -> execute(array("name"=>$_GET['name']));
    $resultSet = $stmt->fetch(PDO::FETCH_ASSOC);
    echo json_encode($resultSet);
        
?>