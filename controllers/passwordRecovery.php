<?php
include_once 'validuser.php';
// print_r($_SESSION['recoverUser']);
//common required fields
$_RCU['id'] = $_SESSION['recoverUser'][0];
$_RCU['password'] = $_SESSION['post']['password'];
if ($_SESSION['recoverUser']['userType'] == 'admin') {
    $_RCU['name'] = $_SESSION['recoverUser'][1];
    $_RCU['email'] = $_SESSION['recoverUser'][2];
    $_RCU['username'] = $_SESSION['recoverUser'][3];
    // $_RCU['password'] = $_SESSION['recoverUser'][4];
    $_RCU['gender'] = $_SESSION['recoverUser'][5];
    $_RCU['dob'] = $_SESSION['recoverUser'][6];
    $_RCU['salary'] = $_SESSION['recoverUser'][7];
    $_RCU['address'] = $_SESSION['recoverUser'][8];
    $_RCU['room'] = $_SESSION['recoverUser'][9];
    $_RCU['phone'] = $_SESSION['recoverUser'][10];
    $_RCU['type'] = $_SESSION['recoverUser']['userType'];
}
if ($_SESSION['recoverUser']['userType'] == 'stuff') {
    $_RCU['name'] = $_SESSION['recoverUser'][1];
    $_RCU['username'] = $_SESSION['recoverUser'][2];
    // $_RCU['password'] = $_SESSION['recoverUser'][3];
    $_RCU['email'] = $_SESSION['recoverUser'][4];
    $_RCU['gender'] = $_SESSION['recoverUser'][5];
    $_RCU['dob'] = $_SESSION['recoverUser'][6];
    $_RCU['salary'] = $_SESSION['recoverUser'][7];
    $_RCU['grade'] = $_SESSION['recoverUser'][8];
    $_RCU['address'] = $_SESSION['recoverUser'][9];
    $_RCU['phone'] = $_SESSION['recoverUser'][10];
    $_RCU['type'] = $_SESSION['recoverUser']['userType'];
}
if ($_SESSION['recoverUser']['userType'] == 'faculty') {
    $_RCU['name'] = $_SESSION['recoverUser'][1];
    $_RCU['username'] = $_SESSION['recoverUser'][2];
    // $_RCU['password'] = $_SESSION['recoverUser'][3];
    $_RCU['email'] = $_SESSION['recoverUser'][4];
    $_RCU['subject'] = $_SESSION['recoverUser'][5];
    $_RCU['department'] = $_SESSION['recoverUser'][6];
    $_RCU['salary'] = $_SESSION['recoverUser'][7];
    $_RCU['address'] = $_SESSION['recoverUser'][8];
    $_RCU['dob'] = $_SESSION['recoverUser'][9];
    $_RCU['gender'] = $_SESSION['recoverUser'][10];
    $_RCU['phone'] = $_SESSION['recoverUser'][11];
    $_RCU['room'] = $_SESSION['recoverUser'][12];
    $_RCU['type'] = $_SESSION['recoverUser']['userType'];
}
if ($_SESSION['recoverUser']['userType'] == 'student') {
    $_RCU['name'] = $_SESSION['recoverUser'][1];
    $_RCU['status'] = $_SESSION['recoverUser'][2];
    $_RCU['email'] = $_SESSION['recoverUser'][3];
    $_RCU['username'] = $_SESSION['recoverUser'][4];
    // $_RCU['password'] = $_SESSION['recoverUser'][5];
    $_RCU['address'] = $_SESSION['recoverUser'][6];
    $_RCU['gender'] = $_SESSION['recoverUser'][7];
    $_RCU['previousBalance'] = $_SESSION['recoverUser'][8];
    $_RCU['balance'] = $_SESSION['recoverUser'][9];
    $_RCU['depertment'] = $_SESSION['recoverUser'][10];
    $_RCU['dob'] = $_SESSION['recoverUser'][11];
    $_RCU['phone'] = $_SESSION['recoverUser'][12];
    $_RCU['type'] = $_SESSION['recoverUser']['userType'];
}
$_RCU['recover'] = true;
$_SESSION['recoverUser'] = $_RCU;
header("Location: edituser.php");