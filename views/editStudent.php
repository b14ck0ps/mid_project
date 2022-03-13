<?php
// require_once('../controllers/validuser.php');
require_once('../controllers/customElements.php');
require_once('../controllers/formValidation.php');
$user = get_userinfo($_REQUEST['type'], $_REQUEST['id']);
?>
<html>

<head>
    <style>#err {color: red;}</style>
    <title>Edit User</title>
</head>

<body>
    <form method="POST" enctype='multipart/form-data'>
        <input type="hidden" name="id" value="<?= $user[0] ?>">
        <input type="hidden" name="username" value="<?= $user[4] ?>">
        <input type="hidden" name="password" value="<?= $user[5] ?>">
        <input type="hidden" name="previousBalance" value="<?= $user[8] ?>">
        <input type="hidden" name="balance" value="<?= $user[9] ?>">
        <input type="hidden" name="type" value="<?= $_REQUEST['type'] ?>">
        <table>
            <tr>
                <td>
                    <fieldset>
                        <legend>Edit User</legend>
                        <table>
                            <tr>
                                <td>
                                    <img src="../assets/students/<?= $user[0] ?>.jpg" alt="N/A" height="250px" width="250px">
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
                                <td><input type="email" name="email" value="<?= $user[3] ?>" required></td>
                            </tr>
                            <tr>
                                <td>Phone</td>
                                <td><input type="text" name="phone" value="<?= $user[12] ?>" required>
                                    <span id="err"><?= $phoneErr ?></span>
                                </td>
                            </tr>
                            <tr>
                                <td>Address</td>
                                <td><input type="text" name="address" value="<?= $user[6] ?>" required>
                                    <span id="err"><?= $addressErr ?></span>
                                </td>
                            </tr>
                            <tr>
                                <td>DOB</td>
                                <td><input type="date" name="dob" value="<?php echo date('Y-m-d', strtotime($user[11])) ?>" required></td>
                            </tr>
                        </table>
                        <table>
                            <tr>
                                <td>
                                    Gender :
                                    <select name="gender">
                                        <option value="Male" <?php if (trim($user[7]) == 'Male')  echo ' selected'; ?>>Male</option>
                                        <option value="Female" <?php if (trim($user[7]) == 'Female')  echo ' selected'; ?>>Female</option>
                                        <option value="Other" <?php if (trim($user[7]) == 'Other')  echo ' selected'; ?>>Other</option>
                                    </select>
                                    &ensp;
                                    Status :
                                    <select name="status">
                                        <option value="Active" <?php if (trim($user[2]) == 'Active')  echo ' selected'; ?>>Active</option>
                                        <option value="Inactive" <?php if (trim($user[2]) == 'Inactive')  echo ' selected'; ?>>Inactive</option>
                                    </select>
                                    &ensp;
                                    Depertment :
                                    <select name="depertment">
                                        <option value="CSE" <?php if (trim($user[10]) == 'CSE')  $gg = true; ?>>CSE</option>
                                        <option value="EEE" <?php if (trim($user[10]) == 'EEE')  echo ' selected'; ?>>EEE</option>
                                        <option value="BBA" <?php if (trim($user[10]) == 'BBA')  echo ' selected'; ?>>BBA</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="hidden" name="userType" value="student">
                                    <input type="hidden" name="header" value="../controllers/editUser.php">
                                    <input type="submit" name="edit" value="Update">
                                </td>
                            </tr>
                        </table>
                    </fieldset>
                </td>
            </tr>
        </table>
    </form>
</body>

</html>