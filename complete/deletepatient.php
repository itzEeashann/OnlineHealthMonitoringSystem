<?php
	// include("session.php");
	include("conn.php");
    $id = intval($_GET['id']);
    $result1 = mysqli_query($con,"DELETE FROM patient WHERE ic=$id");
    $result2 = mysqli_query($con,"DELETE FROM health_status WHERE ic=$id");
    $result3 = mysqli_query($con,"DELETE FROM patient_profile WHERE ic=$id");
    mysqli_close($con); 
    header('Location: home.php');  
?>