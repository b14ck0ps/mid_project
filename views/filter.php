<?php
include_once("../controllers/validuser.php");
require_once("../controllers/customElements.php");
?>
<html>

<body>
    <br>
    <form method="post">
        Filter by:
        <select name="type" id="">
            <option value="student" <?php selected('filter','type','student'); ?> >Student</option>
            <?php
            if($_COOKIE['user']!='stuff')
                echo "<option value=\"stuff\"".  selected('filter','type','stuff') . ">Stuffs</option>" ; ?>
            <option value="faculty" <?php selected('filter','type','faculty'); ?> >Faculty</option>
        </select>
        <input type="submit" name="filter" value="Filter">
    </form>
    <?php 
        if(!isset($_POST['type']))
            $filter = 'student';
        else
            $filter = $_POST['type'];
    ?>
    <object data="../views/lists.php?filter=<?=$filter?>" width="100%" height="650px" type="text/html">
        No users found
    </object>
</body>

</html>