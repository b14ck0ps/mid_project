<?php
require_once('../controllers/validuser.php');
require_once('../controllers/customElements.php');
$user = get_userinfo($_REQUEST['type'], $_REQUEST['id']);
$edit = false;
if ($_GET['type'] == 'student')
    include_once('../views/user_info/students.php');
if ($_GET['type'] == 'stuff')
    include_once('../views/user_info/stuffs.php');
if ($_GET['type'] == 'faculty')
    include_once('../views/user_info/faculty.php');
if ($_GET['type'] == 'admin')
    include_once('../views/user_info/admin.php');