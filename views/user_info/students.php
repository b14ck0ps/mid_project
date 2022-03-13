<?php $_SESSION['student'] = $user;?>
<html>
<body>
    <br>
    <table>
        <!-- personal info -->
        <tr>
            <td>
                <fieldset <?php echo trim($user[2])=='Active'? "style=\"border-color:#14ed00\"" : "style=\"border-color:#d40420\""; ?>>
                    <legend>User - <?= $user[4] ?> </legend>
                    <table>
                        <tr>
                            <td>
                                <img src="../assets/students/<?= $user[0] ?>.jpg" alt="N/A" height="250px" width="250px">
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
                            <td><?= $user[3] ?></td>
                        </tr>
                        <tr>
                            <td>Phone : </td>
                            <td><?= $user[12] ?></td>
                        </tr>
                        <tr>
                            <td>Gender : </td>
                            <td><?= $user[7] ?></td>
                        </tr>
                        <tr>
                            <td>DOB : </td>
                            <td><?= $user[11] ?></td>
                        </tr>
                        <tr>
                            <td>Status : </td>
                            <td <?php echo active_user_style($user[2]) ?>>
                                <?= $user[2] ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Programe : </td>
                            <td>
                                <?= $user[10] ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Address : </td>
                            <td><?= $user[6] ?></td>
                        </tr>
                        <hr>
                        <tr>
                            <td>Prev. Balance : </td>
                            <td><?= $user[9] ?></td>
                        </tr>
                        <tr>
                            <td>Balance : </td>
                            <td><?= $user[8] ?></td>
                        </tr>
                    </table>
                    <table>
                        <tr>
                            <td> <?php echo "<a href='../views/user_info/student_financials.php?edit&type=" . $_GET['type'] . "&id=" . $user[0] . "'>Financials</a>"; ?></td> <td>&ensp; | | &ensp;</td>
                            <td> <?php echo "<a href='../views/editStudent.php?edit&type=" . $_GET['type'] . "&id=" . $user[0] . "'>Edit</a>"; ?></td> <td>&ensp; | | &ensp;</td>
                            <td> <?php echo "<a href='../views/delete.php?&type=" . $_GET['type'] . "&id=" . $user[0] . "'>Delete</a>"; ?></td>
                        </tr>
                    </table>
            </td>
            <td>
            <?php isset($_GET['edit']) ? include_once('../views/editStudent.php') : ''?>
            </td>
        </tr>
    </table>
    </form>
</body>

</html>