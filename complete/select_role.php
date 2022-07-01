
<html>
    <head>
        <title>Sign Up</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="style/signupStyle.css">
        <link rel="stylesheet" href="style/header_footer.css">
        <script src="script/signupScript.js"></script>
    </head>

    <body>
        <?php
            include('header.php');
        ?>
        <h1 class="center">Sign Up</h1>
   
            <table>
                <tr>
                    <td>Select Role :</td>
                    <td>
                        <div class="dropdown">
                            <button class="dropbtn" onclick="dropdownMenu()">
                                --Please Select a Role-- <i class="fa fa-caret-down"></i>
                            </button>
                            <div class="dropdown-content" id="dropdownList">
                            <a href="signup_medteam.php">Doctor/ Nurse</a>
                            <a href="signup_patient.php">Patient</a>
                            </div>
                        </div> 
                    </td>
                </tr>
            </table>
        <?php
            include('footer.html');
        ?>
    </body>
</html>