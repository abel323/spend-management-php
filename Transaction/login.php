<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style>
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
    </style>
</head>
<body>
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
    <div class="login-form">
        <form action="Handler/auth.php" method="post">
            <table border="0">
                <tr>
                    <td><label>User Name: </label></td>
                    <td><input type="text" name="user_name" placeholder="User Name"></td>
                </tr>
                <tr>
                    <td><label>Password: </label></td>
                    <td><input type="password" name="password" placeholder="Password"></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" name="submit" value="Login"> 
                        <input type="reset" name="reset" value="Cancel">
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <a href="signup.php">You dont have account? Signup here!</a>
                    </td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>