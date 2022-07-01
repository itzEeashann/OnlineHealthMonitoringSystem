<?php
    include('conn.php');

    if($_POST['password'] != $_POST['confirm_pw']) {
        echo "<script>alert('Password not matched! Please try again.');
        window.location.href='signup_patient.php';</script>";
    }

    if(strlen($_POST['icnum']) != 12 or !is_numeric($_POST['icnum'])) {
        die("<script>alert('Unvalid I/C number!');
        window.location.href='signup_patient.php';</script>");
    }

    $patientLogin = "INSERT INTO patient (ic, password)
    VALUES ('$_POST[icnum]','$_POST[password]');";

    $patientProfile = "INSERT INTO patient_profile (ic, patient_name, gender, address, country, state, city, postcode, contact_number)
    VALUES ('$_POST[icnum]', '$_POST[Fname]','$_POST[gender]','$_POST[res_address]','$_POST[country]','$_POST[state]','$_POST[city]','$_POST[postcode]','$_POST[contactnum]');";

    $patienthealthstatus = "INSERT INTO health_status (ic, patient_name, weight, height, bmi, blood_pressure, blood_sugar, cholesterol_level, heart_rate, activities_of_daily_life, falling, incontinence, cognitive)
    VALUES ('$_POST[icnum]','$_POST[Fname]','1','1','1','1','1','1','1','1','1','1','1');";

    if(mysqli_query($con,$patientLogin)) {
        if(mysqli_query($con,$patientProfile)) {
            if(mysqli_query($con,$patienthealthstatus)) {
                echo "<script>alert('Registered successfully!');
                window.location.href='login.php';</script>";
            } else {
                die("<script>alert('Register failed. Please try again.');
                window.location.href='signup_patient.php';</script>");
            }
        } else {
            die("<script>alert('Register failed. Please try again.');
            window.location.href='signup_patient.php';</script>");
        }
    } else {
        die("<script>alert('Register failed. Please try again.');
        window.location.href='signup_patient.php';</script>");
    }
?>