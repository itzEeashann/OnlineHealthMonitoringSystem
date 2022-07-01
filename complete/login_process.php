<?php
    session_start();
    include("conn.php");
    
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $uid = mysqli_real_escape_string($con, $_POST["IDorIC"]);
        $pw = mysqli_real_escape_string($con, $_POST["password"]);

        $sqlMedteam = "SELECT * FROM doctor_nurse WHERE id = '$uid' AND password = '$pw';";
        $sqlPatient = "SELECT * FROM patient WHERE ic = '$uid' AND password = '$pw';";

        $resultMedteam = mysqli_query($con, $sqlMedteam);
        $resultPatient = mysqli_query($con, $sqlPatient);
        if(mysqli_num_rows($resultMedteam) == 1) {
            if($name = mysqli_query($con, "SELECT doctor_nurse_name FROM doctor_nurse_profile WHERE id = '$uid'")) {
                $columnLogin = mysqli_fetch_array($resultMedteam);
                $username = mysqli_fetch_array($name);
                
                $_SESSION['mySession'] = $username['doctor_nurse_name'];
                $_SESSION['id'] = $columnLogin['id'];
                header("location: home.php");
            }  
        } elseif(mysqli_num_rows($resultPatient) == 1) {
            if($name = mysqli_query($con, "SELECT patient_name FROM patient_profile WHERE ic = '$uid'")) {
                $columnLogin = mysqli_fetch_array($resultPatient);
                $username = mysqli_fetch_array($name);
                
                $_SESSION['mySession'] = $username['patient_name'];
                $_SESSION['ic'] = $columnLogin['ic'];
                header("location: home.php");
            }       
        } else {
            die("<script>alert('Your ID/ IC number or Password is invalid. Please try again.');
            window.location.href='login.php';</script>");
        }
        mysqli_close($con);
    }
?>