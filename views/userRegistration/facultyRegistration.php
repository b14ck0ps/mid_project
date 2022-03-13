<?php
require_once('../../controllers/validuser.php');
require_once('../../controllers/formValidation.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        #err {
            color: red;
        }
    </style>
    <title>Registration</title>
</head>

<body>
    <center>

        <form method="POST" action="" enctype='multipart/form-data'>
            <div style="border:1px solid black;">
                <table>
                    <tr>
                        <th colspan="3">
                            <h2>Faculty Registration</h2>
                        </th>
                    </tr>
                    <tr height="40px">
                        <td>Name:</td>
                        <td>
                            <input type="text" name="name" value="<?= $name ?>" required />
                            <span id="err"><?= $nameErr ?></span>
                        </td>
                    </tr>
                    <tr height="40px">
                        <td>Email: </td>
                        <td><input type="email" name="email" value="<?= $email ?>" required /></td>
                    </tr>
                    <tr height="40px">
                        <td>Username: </td>
                        <td>
                            <input type="text" name="username" value="<?= $username ?>" required />
                            <span id="err"><?= $usernameErr ?></span>
                        </td>
                    </tr>
                    <tr height="40px">
                        <td>Password: </td>
                        <td>
                            <input type="password" name="password" value="" required />
                            <span id="err"><?= $passErr ?></span>
                        </td>
                    </tr>
                    <tr height="40px">
                        <td>RE-Password: </td>
                        <td>
                            <input type="password" name="rePassword" value="" required />
                        </td>
                    </tr>

                    <tr height="40px">
                        <td>Gender: </td>
                        <td>
                            <input type="radio" name="gender" value="Male" required <?php if (isset($_POST['reg']) && $_POST['gender'] == 'Male')  echo ' checked="checked"'; ?>> Male
                            <input type="radio" name="gender" value="Female" required <?php if (isset($_POST['reg']) && $_POST['gender'] == 'Female')  echo ' checked="checked"'; ?>> Female
                            <input type="radio" name="gender" value="Other" required <?php if (isset($_POST['reg']) && $_POST['gender'] == 'Other')  echo ' checked="checked"'; ?>> Other
                        </td>
                    </tr>
                    <tr height="40px">
                        <td>Date of Birth: </td>
                        <td>
                            <input type="date" name="dob" value="<?php echo date('Y-m-d', strtotime($dob)) ?>" required>
                        </td>
                    </tr>
                    <tr height="40px">
                        <td>Address:</td>
                        <td>
                            <input type="text" name="address" value="<?= $address ?>" required />
                            <span id="err"><?= $addressErr ?></span>
                        </td>
                    </tr>
                    <tr height="40px">
                        <td>Room:</td>
                        <td>
                            <input type="text" name="room" value="<?= $room ?>" required />
                            <span id="err"><?= $roomErr ?></span>
                        </td>
                    </tr>
                    <tr height="40px">
                        <td>Phone:</td>
                        <td>
                            <input type="text" name="phone" value="<?= $phone ?>" required />
                            <span id="err"><?= $phoneErr ?></span>
                        </td>
                    </tr>
                    <tr>
                        <td>Department :</td>
                        <td>
                            <select name="department">
                                <option value="CSE" <?php if (isset($_POST['reg']) && $_POST['department'] == 'CSE')  echo ' selected';?>>CSE</option>
                                <option value="EEE" <?php if (isset($_POST['reg']) && $_POST['department'] == 'EEE')  echo ' selected';?>>EEE</option>
                                <option value="BBA" <?php if (isset($_POST['reg']) && $_POST['department'] == 'BBA')  echo ' selected';?>>BBA</option>
                            </select>
                        </td>
                    </tr>
                    <tr height="40px">
                        <td>Subject:</td>
                        <td>
                            <input type="text" name="subject" value="<?= $subject ?>" required />
                            <span id="err"><?= $subjectErr ?></span>
                        </td>
                    </tr>
                    <tr height="40px">
                        <td>Photo </td>
                        <td colspan="3">
                            <input type="file" name="admin_dp">
                            <input type="hidden" name="uploadname" value="admin_dp">
                        </td>
                    </tr>
                    <tr height="40px"></tr>
                    <tr height="40px">
                        <td colspan="4">
                            <input type="submit" name="reg" value="Registration">
                            <input type="hidden" name="userType" value="faculty">
                            <input type="hidden" name="header" value="../../controllers/regCheck.php">
                            <input type="reset" name="reset" value="reset">
                        </td>
                    </tr>
                </table>
            </div>
        </form>
    </center>
</body>

</html>