<?php
// session_start();
// echo basename(__DIR__);
// require_once("validuser.php");
require_once("customElements.php");
$name = $username = $email = $phone = $address = $salary = $dob = $room = $subject = $password = $rePass = '';
$nameErr = $usernameErr = $invalidUser = $addressErr = $roomErr = $passErr = $phoneErr = $subjectErr = $salaryErr = '';
$valid = true;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['name']))
        $name = $_POST['name'];
    if (isset($_POST['username']))
        $username = $_POST['username'];
    if (isset($_POST['email']))
        $email = $_POST['email'];
    if (isset($_POST['address']))
        $address = $_POST['address'];
    if (isset($_POST['room']))
        $room = $_POST['room'];
    if (isset($_POST['dob']))
        $dob = $_POST['dob'];
    if (isset($_POST['subject']))
        $subject = $_POST['subject'];
    if (isset($_POST['salary']))
        $salary = $_POST['salary'];
    if (isset($_POST['password']))
        $password = $_POST['password'];
    if (isset($_POST['rePassword']))
        $rePass = $_POST['rePassword'];
    if (isset($_POST['phone']))
        $phone = $_POST['phone'];
    if (strlen($name) > 20) {
        $nameErr = 'Name must be under 20 characters';
        $valid = false;
    }
    if (isset($_POST['name']) && !ctype_alpha(str_replace(' ', '', $name))) {
        $nameErr = 'Name must contain letters and spaces only';
        $valid = false;
    }
    if (isset($_POST['username']) && !ctype_alnum($username)) {
        $usernameErr = "Only alphanumerics are allowed";
        $valid = false;
    }
    if (isset($_POST['username']) && strlen($username) > 10) {
        $usernameErr = 'username must be under 10 characters';
        $valid = false;
    }
    if (isset($_POST['rePassword']) && $password != $rePass) {
        $passErr = 'Password do not match';
        $valid = false;
    }
    if (isset($_POST['password']) && strlen($password) < 8) {
        $passErr = 'Password must be at least 8 characters';
        $valid = false;
    }
    if (isset($_POST['address']) && strlen($address) > 30) {
        $addressErr = 'Address is too long';
        $valid = false;
    }
    if (isset($_POST['room']) && strlen($room) > 15) {
        $roomErr = 'Room no is too long';
        $valid = false;
    }
    $chars = str_split($salary);
    foreach ($chars as $char) {
        if (isset($_POST['salary']) && !ctype_digit($char)) {
            $salaryErr = 'Invalid amount';
            $valid = false;
        }
    }
    $chars = str_split($phone);
    foreach ($chars as $char) {
        if (isset($_POST['phone']) && !ctype_digit($char)) {
            $phoneErr = 'Invalid phone number';
            $valid = false;
        }
    }
    if (isset($_POST['subject']) && !ctype_alpha(str_replace(' ', '', $subject))) {
        $subjectErr = 'Invalid subject';
        $valid = false;
    }
    if (isset($_POST['recover'])) {
        $existuser = get_userinfo_byUsername($_POST['userType'], $_POST['username']);
        if(!$existuser){
            $invalidUser = 'Invalid username';
            $valid = false;
        }else{
            $_SESSION['recoverUser'] = $existuser;
            $_SESSION['recoverUser']['userType'] = $_POST['userType'];
            header("Location: " . $_POST['header'] . "");
        }
        
    }
    if (!isset($_POST['recover']) && $valid) {
        session_start();
        $_SESSION['post'] = $_POST;
        $id = $_SESSION['post']['id'];
        if (!isset($_POST['id'])) {
            $id = rand(1000, 9999);
            $_SESSION['post']['id'] = $id;
        }
        if (isset($_POST['uploadname'])) {
            if ($_POST['userType'] == 'admin')
                upload($_POST['uploadname'], goBack() . '/assets/admins/', $id);
            else if ($_POST['userType'] == 'student')
                upload($_POST['uploadname'], goBack() . '/assets/students/', $id);
            else if ($_POST['userType'] == 'faculty')
                upload($_POST['uploadname'], goBack() . '/assets/faculty/', $id);
            else if ($_POST['userType'] == 'stuff')
                upload($_POST['uploadname'], goBack() . '/assets/stuffs/', $id);
        }
        header("Location: " . $_POST['header'] . "");
    }
}

function goBack()
{
    if (isset($_POST['reg']))
        return '../..';
    return '..';
}
