<?php
    include('conn.php');

    if($_POST['password'] != $_POST['confirm_pw']) {
        echo "<script>alert('Password not matched! Please try again.');
        window.location.href='signup_medteam.php';</script>";
    }

    $existedID = "SELECT id FROM doctor_nurse WHERE id = '$_POST[idnum]';";
    $result = mysqli_query($con, $existedID);

    if(mysqli_num_rows($result) > 0) {
        echo "<script>alert('ID number existed! Please try again.');
        window.location.href='signup_medteam.php'</script>";
    }

    $medteamLogin = "INSERT INTO doctor_nurse (id, password)
    VALUES ('$_POST[idnum]','$_POST[password]');";

    $medteamProfile = "INSERT INTO doctor_nurse_profile (id, doctor_nurse_name, contact_number, gender, hospital_name)
    VALUES ('$_POST[idnum]', '$_POST[Fname]','$_POST[contactnum]','$_POST[gender]','$_POST[location_name]');";

    if(mysqli_query($con,$medteamLogin)) {
        if(mysqli_query($con,$medteamProfile)) {
            echo "<script>alert('Registered successfully!');
            window.location.href='login.php';</script>";
        } else {
            die("<script>alert('Register failed. Please try again.');
            window.location.href='signup_medteam.php';</script>");
        }
    } else {
        die("<script>alert('Register failed. Please try again.');
        window.location.href='signup_medteam.php';</script>");
    }
?>