<?php
include '../../db.php';
$db = new db();
session_start();
if ($_POST['id'] == "login") {
//    echo "login";
    $username = $_POST['username'];
    $password = $_POST['password'];

//    echo $username;

    $query = "SELECT * FROM user WHERE username='$username' and password='$password'";
    $rs = $db->Search($query);
//    echo $query;
    if ($row = $rs->fetch(2)) {
        $_SESSION['name'] = $row['username'];
        echo 1;
    } else {
        echo 0;
    }
}

if ($_POST['id'] == "forgpass") {

    $username = $_POST['username'];

    $query = "SELECT email FROM user WHERE username='$username'";

    $rs = $db->Search($query);
    if ($row = $rs->fetch(2)) {
//        echo $row['email'];
        $_SESSION['ss'] = $row['email'];
    } else {
        echo "0";
    }

}