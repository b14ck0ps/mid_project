<?php
require_once("../controllers/validuser.php");
require_once("../controllers/customElements.php");
$_POST = $_SESSION['post'];
if (!isset($_POST['reg']))
	header("Location: ../views/login.php");

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

//faculty stuydent required fields
$department = $_POST['department'];
//faculty -admin common required fields
$room = $_POST['room'];


if ($_POST['userType'] == 'admin') {
	$salary = rand(60000,99999);
	if ($username != null && $password != null && $email != null && $gender != null && $dob != null) {

		$user = $id . "|" . $name . "|" . $email . "|" . $username . "|" . $password . "|" . $gender . "|" . $dob .  "|" . $salary . "|" . $address . "|" . $room . "|" . $phone . "\r\n";
		$file = fopen(get_user_dir($_POST['userType']), 'a');
		fwrite($file, $user);
		fclose($file);
		// upload($_POST['uploadname'], '../assets/admins/', $id);
		header('location: ../views/AdminPanel.php');
	} else {
		echo "null submission";
	}
}
if ($_POST['userType'] == 'stuff') {
	$grade = $_POST['grade'];
	$salary = rand(30000, 50000);
	if ($username != null && $password != null && $email != null && $gender != null && $dob != null) {
		$user = $id . '|' . $name . '|' . $username . '|' . $password . '|' . $email . '|' . $gender . '|' . $dob . '|' . $salary . '|' . $grade . '|' . $address . '|' . $phone . "\r\n";
		$file = fopen(get_user_dir($_POST['userType']), 'a');
		fwrite($file, $user);
		fclose($file);
		upload($_POST['uploadname'], '../assets/stuffs/', $id);
		header('location: ../views/AdminPanel.php');
	} else {
		echo "null submission";
	}
}
if ($_POST['userType'] == 'faculty') {
	$salary = rand(70000, 90000);
	$subject = $_POST['subject'];
	if ($username != null && $password != null && $email != null && $gender != null && $dob != null) {

		$user = $id . '|' . $name . '|' . $username . '|' . $password . '|' . $email . '|' . $subject . '|' . $department . '|' . $salary . '|' . $address . '|' . $dob . '|' . $gender . '|' . $phone . '|' . $room . "\r\n";
		$file = fopen(get_user_dir($_POST['userType']), 'a');
		fwrite($file, $user);
		fclose($file);
		upload($_POST['uploadname'], '../assets/faculty/', $id);
		header('location: ../views/AdminPanel.php');
	} else {
		echo "null submission";
	}
}
if ($_POST['userType'] == 'student') {
	$previousBalance = 0.0;
	$balance = 0.0;
	$status = 'Active';
	if ($username != null && $password != null && $email != null && $gender != null && $dob != null) {

		$user = $id . '|' . $name . '|' . $status . '|' . $email . '|' . $username . '|' . $password . '|' . $address . '|' . $gender . '|' . $previousBalance . '|' . $balance . '|' . $department . '|' . $dob . '|' . $phone . "\r\n";
		$file = fopen(get_user_dir($_POST['userType']), 'a');
		fwrite($file, $user);
		fclose($file);
		upload($_POST['uploadname'], '../assets/students/', $id);
		header('location: ../views/AdminPanel.php');
	} else {
		echo "null submission";
	}
}
