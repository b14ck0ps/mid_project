<?php
require_once('../controllers/validuser.php');
isAdmin(null);
// require_once('../controller/filter.php');
require_once('../controllers/customElements.php');
?>

<html>

<head>
    <title>User List</title>
</head>

<body>
    <br>
    <table border="1" style="width: 100%; border-collapse: collapse;">
        <?php
        //----- Display the table of students file ----------------------------------------------------
        if ($_GET['filter'] == 'student') {
            echo "
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Depertment</th>
            <th>Status</th>
        </tr>
        ";
            $file = fopen('../model/students.txt', 'r');
            $file = fopen(get_user_dir($_GET['filter']), 'r');
            while (!feof($file)) {
                $userArry = explode('|', fgets($file));
                if ($userArry[0] != null) {
                    echo "<tr>";
                    echo "<td>" . $userArry[0] . "</td>"; //id
                    echo "<td><a href=\"../controllers/userinfo.php?type=" . $_GET['filter'] . "&id=" . $userArry[0] . "\">" . $userArry[1] . "</a></td>"; //Name
                    echo "<td>" . $userArry[10] . "</td>"; //depertment
                    echo "<td " . active_user_style($userArry[2]) . ">" . $userArry[2] . "</td>"; //Status
                    echo "</tr>";
                }
            }
        }

        //----- Display the table of stuffs file ----------------------------------------------
        if ($_GET['filter'] == 'stuff') {
            echo "
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Grade</th>
        </tr>
        ";
            $file = fopen(get_user_dir($_GET['filter']), 'r');
            while (!feof($file)) {
                $userArry = explode('|', fgets($file));
                if ($userArry[0] != null) {
                    echo "<tr>";
                    echo "<td>" . $userArry[0] . "</td>"; //id
                    echo "<td><a href=\"../controllers/userinfo.php?type=" . $_GET['filter'] . "&id=" . $userArry[0] . "\">" . $userArry[1] . "</a></td>"; //Name
                    echo "<td>" . $userArry[4] . "</td>"; //email
                    echo "<td>" . $userArry[8] . "</td>"; //grade
                    echo "</tr>";
                }
            }
        }
        //----- Display the table of faculty file ------------------------------------------
        if ($_GET['filter'] == 'faculty') {
            echo "
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Subject</th>
            <th>Department</th>
            <th>Email</th>
            <th>Activity status</th>
        </tr>
        ";
            $file = fopen(get_user_dir($_GET['filter']), 'r');
            while (!feof($file)) {
                $userArry = explode('|', fgets($file));
                if ($userArry[0] != null) {
                    echo "<tr>";
                    echo "<td>" . $userArry[0] . "</td>"; //id
                    echo "<td><a href=\"../controllers/userinfo.php?type=" . $_GET['filter'] . "&id=" . $userArry[0] . "\">" . $userArry[1] . "</a></td>"; //Name
                    echo "<td>" . $userArry[5] . "</td>"; //subject
                    echo "<td>" . $userArry[6] . "</td>"; //subject
                    echo "<td>" . $userArry[4] . "</td>"; //email
                    echo "<td>" . "Teaching" . "</td>"; //activity status (need actuvity status from Faculty file)
                    echo "</tr>";
                }
            }
        }
        ?>
    </table>
    </form>
</body>

</html>