<?php
require_once('../controllers/customElements.php');
session_start();
if (isset($_REQUEST['id'])) {
	$id = $_REQUEST['id'];
	$file = fopen(get_user_dir($_REQUEST['type']), 'r');
	$updatedContent = "";
	while (!feof($file)) {
		$line = fgets($file);
		$user = explode('|', $line);
		if ($user[0] != $id) {
			$updatedContent .= $line;
		}
	}
	$file = fopen(get_user_dir($_REQUEST['type']), 'w');
	fwrite($file, $updatedContent);
	if($_REQUEST['type'] == 'student')
		unlink('../assets/students/'.$id.'.jpg');
	else if ($_REQUEST['type'] == 'staff')
		unlink('../assets/staffs/'.$id.'.jpg');
	header('location: ../views/lists.php?filter='.$_REQUEST['type']);
}