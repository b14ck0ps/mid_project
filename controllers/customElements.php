<?php


//style fuctions
function active_user_style($status)
{
    return ($status == 'Active' ? "style=\"color:#14ed00\"" : "style=\"color:#d40420\"");
}

///------functions

//stay select option
function selected($post, $name, $default)
{
    if (isset($_REQUEST[$post]) && $_POST[$name] == $default)  echo ' selected';
}

//get user info form text file
function get_userinfo($type, $user)
{
    $file = fopen(get_user_dir($type), 'r');
    while (!feof($file)) {
        $users = fgets($file);
        $userArry = explode('|', $users);
        if ($userArry[0] != null) {
            if ($userArry[0] == $user) {
                fclose($file);
                return $userArry;
            }
        }
    }
}
function get_userinfo_byUsername($type, $user)
{
    // session_start();
    // $_POST['userType'] = $_SESSION['post']['userType'];
    $index = '';
    if ($_POST['userType'] == 'admin')
        $index = 3;
    elseif ($_POST['userType'] == 'student')
        $index = 4;
    else
        $index = 2;
    $file = fopen(get_user_dir($type), 'r');
    while (!feof($file)) {
        $users = fgets($file);
        $userArry = explode('|', $users);
        if ($userArry[$index] != null) {
            if ($userArry[$index] == $user) {
                fclose($file);
                return $userArry;
            }
        }
    }
    return false;
}
//get user dir
function get_user_dir($type)
{
    if ($type == 'admin')
        return '../model/admin.txt';
    if ($type == 'student')
        return '../model/students.txt';
    if ($type == 'stuff')
        return '../model/stuffs.txt';
    if ($type == 'faculty')
        return '../model/faculty.txt';
}

//upload stuffs
function upload($name, $location, $fileName)
{
    $path_parts = pathinfo($_FILES[$name]["name"]);
    $extension = $path_parts['extension'];
    if ($extension == "jpg" || $extension == "jpeg" || $extension == "png" || $extension == "gif") {
        $src = $_FILES[$name]['tmp_name'];
        $des = $location . $fileName . '.jpg';

        if (move_uploaded_file($src, $des))
            echo "success";
        else
            echo "error";
    } else {
        echo "Invalid file format";
    }
}
