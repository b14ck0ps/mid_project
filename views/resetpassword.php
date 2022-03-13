<?php
require_once("../controllers/formvalidation.php");
// require_once("../../controllers/passwordRecovery.php");
session_start();
?>
<html>
<style>
    #err {
        color: red;
    }
</style>

<body>

    <body>
        <center>
            <fieldset style="display: inline-block;">
                <legend>Recover Password</legend>
                <form action="" method="post">
                    <table>
                        <tr>
                            <td>Password:</td>
                            <td><input type="password" name="password" required>
                                <span id="err"><?= $passErr ?></span>
                            </td>
                        </tr>
                        <tr>
                            <td>RE-Password:</td>
                            <td><input type="password" name="rePassword" required>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><input type="submit" name="updatepassword" value="Update Password"></td>
                            <td><a href="../Login.html">Login</a></td>
                        </tr>
                        <input type="hidden" name="header" value="../controllers/passwordRecovery.php">
                        <input type="hidden" name="loadRecover">
                        <input type="hidden" name="userType" value="">
                    </table>
                </form>
            </fieldset>
        </center>
    </body>
</body>

</html>