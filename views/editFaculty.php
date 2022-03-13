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
        <input type="hidden" name="username" value="<?= $user[2] ?>">
        <input type="hidden" name="password" value="<?= $user[3] ?>">
        <input type="hidden" name="type" value="<?= $_REQUEST['type'] ?>">
        <table>
            <tr>
                <td>
                    <fieldset>
                        <legend>Edit User</legend>
                        <table>
                            <tr>
                                <td>
                                    <img src="../assets/faculty/<?= $user[0] ?>.jpg" alt="N/A" height="250px" width="250px">
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
                                <td><input type="email" name="email" value="<?= $user[4] ?>" required></td>
                            </tr>
                            <tr>
                                <td>Phone</td>
                                <td><input type="text" name="phone" value="<?= $user[11] ?>" required>
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
                                <td><input type="text" name="room" value="<?= $user[12] ?>" required>
                                    <span id="err"><?= $roomErr ?></span>
                                </td>
                            </tr>
                            <tr>
                                <td>DOB</td>
                                <td><input type="date" name="dob" value="<?php echo date('Y-m-d', strtotime($user[9])) ?>" required></td>
                            </tr>
                            <tr>
                                <td>Salary</td>
                                <td><input type="text" name="salary" value="<?= $user[7] ?>" required>
                                    <span id="err"><?= $salaryErr ?></span>
                                </td>
                            </tr>
                            <tr>
                                <td>Subject</td>
                                <td><input type="text" name="subject" value="<?= $user[5] ?>" required>
                                    <span id="err"><?= $subjectErr ?></span>
                                </td>
                            </tr>
                        </table>
                        <table>
                            <tr>
                                <td>
                                    Gender :
                                    <select name="gender">
                                        <option value="Male" <?php if (trim($user[10]) == 'Male')  echo ' selected'; ?>>Male</option>
                                        <option value="Female" <?php if (trim($user[10]) == 'Female')  echo ' selected'; ?>>Female</option>
                                        <option value="Other" <?php if (trim($user[10]) == 'Other')  echo ' selected'; ?>>Other</option>
                                    </select>
                                    &ensp;
                                    Department :
                                    <select name="department">
                                        <option value="CSE" <?php if (trim($user[6]) == 'CSE')  echo ' selected'; ?>>CSE</option>
                                        <option value="EEE" <?php if (trim($user[6]) == 'EEE')  echo ' selected'; ?>>EEE</option>
                                        <option value="BBA" <?php if (trim($user[6]) == 'BBA')  echo ' selected'; ?>>BBA</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="hidden" name="userType" value="faculty">
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