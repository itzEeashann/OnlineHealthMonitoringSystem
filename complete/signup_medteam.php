<html>
    <head>
        <title>Sign Up As Doctor/ Nurse</title>
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
                <td>Select role :</td>
                <td>
                        <div class="dropdown">
                        <button class="dropbtn" onclick="dropdownMenu()">
                            Doctor/ Nurse <i class="fa fa-caret-down"></i>
                        </button>
                        <div class="dropdown-content" id="dropdownList">
                        <a href="signup_patient.php">Patient</a>
                        </div>
                    </div> 
                </td>
            </tr>
            <form action="insert_medteam.php" method="post">
                <tr>
                    <td>
                        <label for="Fname">Full name :</label> 
                    </td>
                    <td>
                        <input type="text" id="Fname" name="Fname" placeholder="Full name" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="idnum">ID number :</label> 
                    </td>
                    <td>
                        <input type="text" id="idnum" name="idnum" placeholder="ID number" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="gender">Gender :</label> 
                    </td>
                    <td>
                        <input type="radio" id="male" name="gender" value="male" required>
                        <label for="male">Male</label>
                        <input type="radio" id="female" name="gender" value="female" required>
                        <label for="female">Female</label>
                    </td>                   
                </tr>
                <tr>
                    <td>
                        <label for="location_name">Name of hospital/ shelter :</label>
                    </td>
                    <td>
                        <input type="text" id="location_name" name="location_name" placeholder="Name of hospital/ shelter" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="contactnum">Contact number :</label>
                    </td>
                    <td>
                        <input type="text" id="contactnum" name="contactnum" placeholder="Contact number" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="password">Password :</label>
                    </td>
                    <td>
                        <input type="password" id="password" name="password" placeholder="Password" required>
                        <button type="button" onclick="passwordToggle()"><i class="fa fa-eye"></i></button>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="confirm_pw">Confirm password :</label>
                    </td>
                    <td>
                        <input type="password" id="confirm_pw" onkeyup="verifyConfirmPassword()" name="confirm_pw" placeholder="Confirm password" required>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <p id="pwMessage"></p>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="Sign up"> &nbsp;&nbsp;
                        <button type="button" onclick="cancel_comfirm()">Cancel</button>
                    </td>
                </tr>
            </form>
        </table>
        <br>
        <?php
            include('footer.html');
        ?>
    </body>
</html>