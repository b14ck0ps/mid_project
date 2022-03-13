<?php
require_once("../controllers/formvalidation.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        #err {
            color: red;
        }
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recovery</title>
</head>

<body>
    <center>
        <fieldset style="display: inline-block;">
            <legend>Recover Password</legend>
            <form action="" method="post">
                <input type="radio" name="userType" value="admin" checked="checked"> Admin
                <input type="radio" name="userType" value="stuff"> Stuff
                <input type="radio" name="userType" value="student"> Student
                <input type="radio" name="userType" value="faculty"> Faculty <br><br>

                <table>
                    <tr>
                        <td>Username:</td>
                        <td><input type="text" name="username" required>
                            <span id="err"><?= $invalidUser ?></span>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="submit" name="recover" value="Recover"></td>
                        <td><a href="Login.html">Login</a></td>
                    </tr>
                    <input type="hidden" name="header" value="resetpassword.php">
                    <input type="hidden" name="loadRecover">
                </table>
            </form>
        </fieldset>
    </center>
</body>

</html>