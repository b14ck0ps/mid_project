<?php
require_once("../controllers/customElements.php");
session_start();
if (isset($_REQUEST['login'])) {
	if (!isset($_REQUEST['userType'])) {
		echo "<center>";
		echo "<strong>Please select user type</strong> <br>";
		echo "<a href='../views/login.html'>try again</a>";
		echo "</center>";
	} else {
		$userType = $_REQUEST['userType'];
		$username = $_REQUEST['username'];
		$password = $_REQUEST['password'];

		if ($username != null && $password != null) {
			$file = fopen(get_user_dir($userType), 'r');
			while (!feof($file)) {
				$user = fgets($file);
				$userArry = explode('|', $user);
				if ($userType == 'admin') {
					$_username = $userArry[3];
					$_password = $userArry[4];
				} else if ($userType == 'student') {
					$_username = $userArry[4];
					$_password = $userArry[5];
				} else if ($userType == 'stuff' || $userType == 'faculty') {
					$_username = $userArry[2];
					$_password = $userArry[3];
				}

				if (trim($_username) == $username && trim($_password) == $password) {
					$_SESSION['status'] = true;
					$_SESSION['current_user'] = $userArry;
					if ($userType == 'admin') {
						setcookie('user', 'admin', time() + 3600 * 10, '/');
						header('location: ../views/adminpanel.php');
						break;
					} else if ($userType == 'student') {
						setcookie('user', 'student', time() + 3600, '/');
						header('location: ../views/studentpanel.php');
						break;
					} else if ($userType == 'stuff') {
						setcookie('user', 'stuff', time() + 3600, '/');
						header('location: ../views/stuffpanel.php');
						break;
					} else if ($userType == 'faculty') {
						setcookie('user', 'faculty', time() + 3600, '/');
						header('location: ../views/facultypanel.php');
						break;
					}
				} else {
					echo "<center>";
					echo "<h3>invalid username/password</h4>";
					echo "<a href='../views/login.html'>try again</a>";
					echo "</center>";
				}
			}
		} else {
			echo "null submission";
		}
	}
}
