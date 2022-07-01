<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="style/signupStyle.css">
        <link rel="stylesheet" href="style/header_footer.css">
        <script src="script/signupScript.js"></script>
    </head>
    <body>
        <?php
            include('header.php');
        ?>

        <h1 class="center">Login</h1>

        <table>
            <form action="login_process.php" method="post">
                <tr>
                    <td>
                        <label for="IDorIC">ID/ IC number :</label> 
                    </td>
                    <td>
                        <input type="text" id="IDorIC" name="IDorIC" placeholder="ID/ IC number" required>
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
                    <td></td>
                    <td>
                        <input type="submit" value="Login"> &nbsp;&nbsp;
                        <button type="button" onclick="cancel_comfirm()">Cancel</button>
                    </td>
                </tr>
            </form>
        </table>
        
        <?php
            include('footer.html');
        ?>
    </body>
</html>