<?php
require_once('../controllers/validuser.php');
echo "<h1>Welcome " .$_SESSION['current_user'][1]. "</h1>";
echo "<h2>You are logged in as " .$_SESSION['current_user'][2]. "</h2>";