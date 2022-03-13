<?php
session_start();
if (!isset($_COOKIE['user']))
	header('location: ../views/login.html');
if (!isset($_SESSION['status']))
	header('location: ../views/login.html');

function isAdmin($dir)
{
	if ($_COOKIE['user'] != 'admin')
		header("Location: " . $dir . "403.html");
}
