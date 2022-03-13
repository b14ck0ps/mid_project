<?php
require_once('../controllers/validuser.php');
require_once('../controllers/customElements.php');
require_once('../controllers/formValidation.php');
isAdmin(null);
$user = get_userinfo($_REQUEST['type'], $_REQUEST['id']);
?>
<html>

<head>
    <style>#err {color: red;}</style>
    <title>Edit User</title>
</head>

<body>
    <fieldset>
        <legend>Edit User</legend>
        <form method="POST" action="" enctype='multipart/form-data'>
            <input type="hidden" name="id" value="<?= $user[0] ?>">
            <input type="hidden" name="salary" value="<?= $user[7] ?>">
            <input type="hidden" name="type" value="<?= $_REQUEST['type'] ?>">
            <table>
                <tr>
                    <td>
                        <table>
                            <tr>
                                <td>
                                    <img src="../assets/admins/<?= $user[0] ?>.jpg" alt="N/A" height="250px" width="250px">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Upload Photo :
                                    <input type="file" name="img_upload">
                                    <input type="hidden" name="uploadname" value="img_upload">
                                </td>
                            </tr>
                        </table> <br>
                        <table>
                            <tr>
                                <td>Name</td>
                                <td><input type="text" name="name" value="<?= $user[1] ?>" required>
                                    <span id="err"><?= $nameErr ?></span>
                                </td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td><input type="email" name="email" value="<?= $user[2] ?>" required></td>
                            </tr>
                            <tr>
                                <td>Username</td>
                                <td><input type="text" name="username" value="<?= $user[3] ?>" required>
                                    <span id="err"><?= $usernameErr ?></span>
                                </td>
                            </tr>
                            <tr>
                                <td>Password</td>
                                <td><input type="password" name="password" value="<?= $user[4] ?>" required>
                                <span id="err"><?= $passErr ?></span></td>
                            </tr>
                            <tr>
                                <td>Phone</td>
                                <?php   ?>
                                <td><input type="text" name="phone" value="<?= $user[10]; ?>" required>
                                    <span id="err"><?= $phoneErr ?></span>
                                </td>
                            </tr>
                            <tr>
                                <td>Address</td>
                                <td><input type="text" name="address" value="<?= $user[8] ?>" required>
                                    <span id="err"><?= $addressErr ?></span>
                                </td>
                            </tr>
                            <tr>
                                <td>Room</td>
                                <td><input type="text" name="room" value="<?= $user[9] ?>" required>
                                    <span id="err"><?= $roomErr ?></span>
                                </td>
                            </tr>
                            <tr>
                                <td>DOB</td>
                                <td><input type="date" name="dob" value="<?php echo date('Y-m-d', strtotime($user[6])) ?>" required></td>
                            </tr>
                            <tr>
                                <td>
                                    Gender :
                                <td>
                                    <select name="gender">
                                        <option value="Male" <?php if (trim($user[5]) == 'Male')  echo ' selected'; ?>>Male</option>
                                        <option value="Female" <?php if (trim($user[5]) == 'Female')  echo ' selected'; ?>>Female</option>
                                        <option value="Other" <?php if (trim($user[5]) == 'Other')  echo ' selected'; ?>>Other</option>
                                    </select>
                                </td>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="hidden" name="userType" value="admin">
                        <input type="hidden" name="header" value="../controllers/editUser.php">
                        <input type="submit" name="edit" value="Update">
                    </td>
                </tr>
            </table>
            </td>
            </tr>
            </table>
        </form>
    </fieldset>
    <a href="AdminPanel.php">Back</a>
</body>

</html>