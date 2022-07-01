<html>
    <head>
        <title>Sign Up As Patient</title>
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
                                Patient <i class="fa fa-caret-down"></i>
                            </button>
                            <div class="dropdown-content" id="dropdownList">
                            <a href="signup_medteam.php">Doctor/ Nurse</a>
                            </div>
                        </div> 
                    </td>
                </tr>
                <form action="insert_patient.php" method="post">
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
                            <label for="icnum">I/C number :</label> 
                        </td>
                        <td>
                            <input type="text" id="icnum" name="icnum" placeholder="I/C number" required>
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
                            <label for="res_address">Residential address :</label>
                        </td>
                        <td>
                            <input type="text" id="res_address" name="res_address" placeholder="Residential address" required>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="country">Country :</label>
                        </td>
                        <td>
                            <input type="text" id="country" name="country" placeholder="Country" required>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="state">State :</label>
                        </td>
                        <td>
                            <input type="text" id="state" name="state" placeholder="State" required>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="city">City :</label>
                        </td>
                        <td>
                            <input type="text" id="city" name="city" placeholder="City" required>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="postcode">Postcode :</label>
                        </td>
                        <td>
                            <input type="text" id="postcode" name="postcode" placeholder="Postcode" required>
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
                            <input type="submit" value="Sign up" text-align="center"> &nbsp;&nbsp;
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