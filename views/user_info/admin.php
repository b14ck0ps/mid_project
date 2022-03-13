<?php 
include_once("../controllers/validuser.php");
isAdmin('../');
?>
<html>
<body>
    <br>
    <a href="../views/AdminPanel.php">Back</a> &ensp;
    <a href="../controllers/logout.php">Logout</a>
    <br> <br>
    <fieldset>
        <legend>User - <?= $user[3] ?> </legend>
        <table>
            <!-- personal info -->
            <tr>
                <td>
                    <table>
                        <tr>
                            <td>
                                <img src="../assets/admins/<?= $user[0] ?>.jpg" alt="N/A" height="250px" width="250px">
                            </td>
                        </tr>
                    </table> <br>
                    <table>
                        <tr>
                            <td>Name : </td>
                            <td><?= $user[1] ?></td>
                        </tr>
                        <tr>
                            <td>ID : </td>
                            <td><?= $user[0] ?></td>
                        </tr>
                        <tr>
                            <td>Email : </td>
                            <td><?= $user[2] ?></td>
                        </tr>
                        <tr>
                            <td>Gender : </td>
                            <td><?= $user[5] ?></td>
                        </tr>
                        <tr>
                            <td>DOB : </td>
                            <td><?= $user[6] ?></td>
                        </tr>
                        <tr>
                            <td>Salary : </td>
                            <td>
                                <?= $user[7] ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Address : </td>
                            <td><?= $user[8] ?></td>
                        </tr>
                        <hr>
                        <tr>
                            <td>Phone : </td>
                            <td><?= $user[10] ?></td>
                        </tr>
                        <tr>
                            <td>Room : </td>
                            <td><?= $user[9] ?></td>
                        </tr>
                    </table>
                    <table>
                        <tr>
                            <td> <?php echo "<a href='../views/editAdmin.php?edit&type=" . $_GET['type'] . "&id=" . $user[0] . "'>Edit</a>"; ?></td>
                            <td>&ensp; | | &ensp;</td>
                            <td> <?php echo "<a href='../views/delete.php?&type=" . $_GET['type'] . "&id=" . $user[0] . "'>Delete</a>"; ?></td>
                        </tr>
                    </table>
                </td>
                <td>
                    <?php isset($_GET['edit']) ? include_once('../views/editStuff.php') : '' ?>
                </td>
            </tr>
        </table>
        </form>
    </fieldset>
</body>

</html>