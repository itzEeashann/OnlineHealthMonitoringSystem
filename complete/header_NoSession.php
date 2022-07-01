<?php
    if(isset($_SESSION['id'])) {
        include('header_login_medteam.html');
    } elseif(isset($_SESSION['ic'])) {
        include('header_login_patient.html');
    } else {
        include('header_general.html');
    }
?>