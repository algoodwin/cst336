<?php
include 'dbConnection.php';
$conn = getDatabaseConnection("final_project");
$hex = $_GET['colorHex'];

$sql = "DELETE FROM `specific_colors` WHERE `specific_colors`.`hex` = '" . $_GET['colorHex'] ."'";
        
$stmt=$conn->prepare($sql);
$stmt->execute();

header("Location: adminPortal.php");
?>