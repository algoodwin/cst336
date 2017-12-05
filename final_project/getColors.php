<?php

include 'dbConnection.php';
$conn = getDatabaseConnection(final_project);


$sql = "SELECT og_name FROM `og_colors`";



        
$stmt = $conn->prepare($sql);
$stmt->execute();


$record = $stmt->fetch(PDO::FETCH_ASSOC);//expecting only one record


echo json_encode($record);


?>

