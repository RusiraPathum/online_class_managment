<?php

//if($_POST['id'] == "userLogin"){
//
//    session_start();
//    $_SESSION['userType'] == 1;
//    echo "User Logged!";
//}
//
//if($_POST['id'] == "getCurrentUser"){
//
//    session_start();
//    echo json_encode($_SESSION);
//}

if ($_POST['id'] == "login") {
    session_start();
    $_SESSION['userType'] = 0;
//    echo $_SESSION['userType'];
}

if ($_POST['id'] == "getCurrentUser") {
    session_start();
    echo json_encode($_SESSION);
}
