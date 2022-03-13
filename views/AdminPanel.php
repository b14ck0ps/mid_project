<?php
include_once("../controllers/validuser.php");
require("../controllers/customElements.php");
isAdmin(null);
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
    <table border="1" style="width: 100%; border-collapse: collapse;">
        <tr>
            <td style="width:13% ; vertical-align: top; text-align: left;">
                <table>
                    <tr>
                        <td>
                        <img src="../assets/admins/<?=$_SESSION['current_user'][0]?>.jpg" alt="admindp" height="150px" width="150px"> <br> <br>
                            <table>
                                <tr>
                                    <td><b>Welcome <a href="../controllers/userinfo.php?type=admin&id=<?=$_SESSION['current_user'][0]?>"><?=$_SESSION['current_user'][3]?></a></b> <br></td>
                                </tr>
                                <tr>
                                    <td><i>Admin</i></td>
                                </tr>
                            </table> <br><hr>
                            <a href="../views/AdminPanel.php">Dashboard</a><br><br><br> <hr>
                            <b>Add User</b>
                            <ul>
                                <li><a href="../views/userRegistration/adminRegistraion.php">Add Admin</a></li>
                                <li><a href="../views/userRegistration/facultyRegistration.php">Add Faculty</a></li>
                                <li><a href="../views/userRegistration/stuffRegistration.php">Add Stuff</a></li>
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
                <a href="../views/AdminPanel.php"> Back </a>
            </td>
    </table>
</body>

</html>