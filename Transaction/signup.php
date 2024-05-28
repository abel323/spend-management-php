<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup Form</title>
    <style type="text/css">
        body{
            font-family: Arial, Helvetica, sans-serif;
            font-size: 16px;
        }
        .login-form {
            margin-left: 30%;
            margin-top:10%;
        }
        .error{
            background-color: red;
        }
        .error_alert{
            color: white;
        }
        [type="submit"]{
            background-color: rgb(30,120,60);
            color: white;
            font-size: 14px;
            font-family: Arial, Helvetica, sans-serif;
            height: 30px;
            width: 100px;
            transition-property: border-radius;
            transition-duration: 2s;
        }
        [type="submit"]:hover{
            border-radius: 30px;
        }
        [type="reset"]{
            background-color: rgb(150,0,0);
            color: white;
            font-size: 14px;
            font-family: Arial, Helvetica, sans-serif;
            height: 30px;
            width: 100px;
            transition-property: border-radius;
            transition-duration: 2s;
        }
        [type="reset"]:hover{
            border-radius: 30px;
        }
        label{
            text-align: right;
        }
    </style>
</head>
<body>
    <div class="login-form">
    <div class="error">
        <?php
            if(isset($_SESSION['error'])){ 
        ?>
        <p class="error_alert" align="center"><?php echo $_SESSION['error']; ?></p>
        <?php
            unset($_SESSION['error']);
            }  
        ?>
    </div>
    <div class="success">
        <?php
                if(isset($_SESSION['success'])){ 
            ?>
            <p class="error_alert" align="center"><?php echo $_SESSION['success']; ?></p>
            <?php
                unset($_SESSION['error']);
                }  
            ?>
    </div>
        <form action="Handler/signup.php" method="post">
            <table border="0">
                <tr>
                    <td><label>User Name: </label></td>
                    <td><input type="email" name="user_name" placeholder="User Name" required></td>
                </tr>
                <tr>
                    <td><label>First Name: </label></td>
                    <td><input type="text" name="fname" placeholder="First Name" required></td>
                </tr>
                <tr>
                    <td><label>Last Name: </label></td>
                    <td><input type="text" name="lname" placeholder="Last Name" required></td>
                </tr>
                <tr>
                    <td><label>Middle Name: </label></td>
                    <td><input type="text" name="mname" placeholder="Middle Name"></td>
                </tr>
                <tr>
                    <td><label>Phone: </label></td>
                    <td><input type="tel" name="phone" placeholder="Phone Number"></td>
                </tr>
                <tr>
                    <td><label>Password: </label></td>
                    <td><input type="password" name="password" placeholder="Password"></td>
                </tr>
                <tr>
                    <td><label>Confirm Password: </label></td>
                    <td><input type="password" name="confPassword" placeholder="Confirm Password"></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" name="submit" value="Signup"> 
                        <input type="reset" name="reset" value="Cancel">
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <a href="login.php">You have account already? login here!</a>
                    </td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>