<?php
session_start();
require_once('../controllers/customElements.php');
if (isset($_SESSION['recoverUser'])) {
	$_POST = $_SESSION['recoverUser'];
}else{
	$_POST = $_SESSION['post'];
}

if (!isset($_POST['edit']) || !$_POST['recover'])
	//header('Location: ../views/403.html');

//common required fields
$id = $_POST['id'];
$username = $_POST['username'];
$password = $_POST['password'];
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$gender = $_POST['gender'];
$dob = $_POST['dob'];

//admin-stuff-faculty common reuired fields
$room = $_POST['room'];
$salary = $_POST['salary'];

//student required fields
$previousBalance = $_POST['previousBalance'];
$balance = $_POST['balance'];
$dept = $_POST['depertment'];
$status = $_POST['status'];

//stuffs required fields
$grade = $_POST['grade'];

//faculty required fields
$department = $_POST['department'];
$subject = $_POST['subject'];


if ($_POST['type'] == 'admin') { // edit stuffs	
	if ($name != null && $address != null && $email != null) {
		$file = fopen(get_user_dir($_POST['type']), 'r');
		$updatedContent = "";
		while (!feof($file)) {
			$line = fgets($file);
			$user = explode('|', $line);
			if ($user[0] == $id) {
				$line = $id . "|" . $name . "|" . $email . "|" . $username . "|" . $password . "|" . $gender . "|" . $dob .  "|" . $salary . "|" . $address . "|" . $room . "|" . $phone . "\r\n";
			}
			$updatedContent .= $line;
		}
		if (isset($_SESSION['recoverUser']))
			unset($_SESSION['recoverUser']);
	}
	$file = fopen(get_user_dir($_POST['type']), 'w');
	fwrite($file, $updatedContent);
	upload($_POST['uploadname'], '../assets/admins/', $id);
	header('location: ../controllers/userinfo.php?type=' . $_POST['type'] . "&id=" . $id);
}
if ($_POST['type'] == 'student') { // edit students
	if ($name != null && $address != null && $email != null) {
		$file = fopen(get_user_dir($_POST['type']), 'r');
		$updatedContent = "";
		while (!feof($file)) {
			$line = fgets($file);
			$user = explode('|', $line);
			if ($user[0] == $id) {
				$line = $id . '|' . $name . '|' . $status . '|' . $email . '|' . $username . '|' . $password . '|' . $address . '|' . $gender . '|' . $previousBalance . '|' . $balance . '|' . $dept . '|' . $dob . '|' . $phone ."\r\n";
			}
			$updatedContent .= $line;
		}
		if (isset($_SESSION['recoveruser']))
			unset($_SESSION['recoveruser']);
	}
	$file = fopen(get_user_dir($_POST['type']), 'w');
	fwrite($file, $updatedContent);
	upload($_POST['uploadname'], '../assets/students/', $id);
	header('location: ../controllers/userinfo.php?type=' . $_POST['type'] . "&id=" . $id);
}
if ($_POST['type'] == 'stuff') { // edit stuffs
	if ($name != null && $address != null && $email != null) {
		$file = fopen(get_user_dir($_POST['type']), 'r');
		$updatedContent = "";
		while (!feof($file)) {
			$line = fgets($file);
			$user = explode('|', $line);
			if ($user[0] == $id) {
				$line = $id . '|' . $name . '|' . $username . '|' . $password . '|' . $email . '|' . $gender . '|' . $dob . '|' . $salary . '|' . $grade . '|' . $address . '|' . $phone."\r\n";
			}
			$updatedContent .= $line;
		}
		if (isset($_SESSION['recoveruser']))
			unset($_SESSION['recoveruser']);
	}
	$file = fopen(get_user_dir($_POST['type']), 'w');
	fwrite($file, $updatedContent);
	upload($_POST['uploadname'], '../assets/stuffs/', $id);
	header('location: ../controllers/userinfo.php?type=' . $_POST['type'] . "&id=" . $id);
}
if ($_POST['type'] == 'faculty') { // edit faculties
	if ($name != null && $address != null && $email != null) {
		$file = fopen(get_user_dir($_POST['type']), 'r');
		$updatedContent = "";
		while (!feof($file)) {
			$line = fgets($file);
			$user = explode('|', $line);
			if ($user[0] == $id) {
				$line = $id . '|' . $name . '|' . $username . '|' . $password . '|' . $email . '|' . $subject . '|' . $department . '|' . $salary . '|' . $address . '|' . $dob . '|' . $gender . '|' . $phone . '|' . $room."\r\n";
			}
			$updatedContent .= $line;
		}
		if (isset($_SESSION['recoveruser']))
			unset($_SESSION['recoveruser']);
	}
	$file = fopen(get_user_dir($_POST['type']), 'w');
	fwrite($file, $updatedContent);
	upload($_POST['uploadname'], '../assets/faculty/', $id);
	header('location: ../controllers/userinfo.php?type=' . $_POST['type'] . "&id=" . $id);
}
