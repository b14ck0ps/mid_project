<?php
include_once("../controllers/validuser.php");
require("../controllers/customElements.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
</head>

<body>
    <?php //print_r($_SESSION); ?>
    <table border="1" style="width: 100%; border-collapse: collapse;">
        <tr>
            <td style="width:13% ; vertical-align: top; text-align: left;">
                <table>
                    <tr>
                        <td>
                        <img src="../assets/stuffs/<?=$_SESSION['current_user'][0]?>.jpg" alt="stuffdp" height="150px" width="150px"> <br> <br>
                            <table>
                                <tr>
                                    <td><b>Welcome <a href="../controllers/userinfo.php?type=stuff&id=<?=$_SESSION['current_user'][0]?>"><?=$_SESSION['current_user'][2]?></a></b> <br></td>
                                </tr>
                                <tr>
                                    <td><i>stuff</i></td>
                                </tr>
                            </table> <br><hr>
                            <a href="../views/stuffpanel.php">Dashboard</a> <br>
                            <a href="">Manage Tests</a><br>
                            <a href="">Manage students groups</a><br>
                            <a href="">Give Notices</a><br><br><br> <hr>
                            
                            <b>Add User</b>
                            <ul>
                                <li><a href="../views/userRegistration/facultyRegistration.php">Add Faculty</a></li>
                                <li><a href="../views/userRegistration/studentRegistration.php">Add Student</a></li>
                            </ul>
                            <hr><br><br><br><br><br> <br><br> <br><br> <br><br><br>
                            <a href="../controllers/logout.php">Logout</a>
                        </td>
                    </tr>
                </table>
            </td>
            <td rowspan="5">
                <?php include("../views/filter.php"); ?>
                <a href="../views/stuffpanel.php"> Back </a>
            </td>
    </table>
</body>

</html>