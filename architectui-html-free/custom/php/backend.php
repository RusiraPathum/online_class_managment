<?php
session_start();
include '../../db.php';
$db = new db();

if ($_POST['id'] == "insert") {

//    echo "xz";
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $address = $_POST['address'];
    $birth_of_date = $_POST['birth_of_date'];
    $username = $_POST['username'];
    $city = $_POST['city'];
    $email = $_POST['email'];
    $zip = $_POST['zip'];
    $password = $_POST['password'];
//    $password = md5($password);
    $phone_number = $_POST['phone_number'];
    $image = $_POST['image'];

    $query = "INSERT INTO user (first_name, last_name, address, birth_of_date, username,
                  city, email, zip, password, phone_number,image)
                VALUES ('$first_name', '$last_name', '$address', '$birth_of_date', '$username',
                        '$city', '$email', '$zip', '$password', '$phone_number', '$image')";

    $db->IUD($query);

}

//$auto_password = "aljlkjdf;ldfd2684g8d464wfe1fd4f9sfdlsijeofdmvldmsfoemlmsdwd6a4464a*%%@$!&)*";
////echo substr(str_shuffle($auto_password), 0, 12);
//$_SESSION['password'] = substr(str_shuffle($auto_password), 0, 12);

if ($_POST['id'] == "show") {

    $output = "";

    $output .= "
        <table class=\"mb-0 table table-hover\">
            <thead class='text-center'>
            <tr>
                <th>Student Id</th>         
                <th>First Name</th>
                <th>Last Name</th>
                <th>Address</th>
                <th>Username</th>
                <th>Email</th>
                <th>Phone Number</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            </thead>
            <tbody class='text-center'>
    ";

    $query = "SELECT * FROM user ORDER by uid";

    $rs = $db->Search($query);

    while ($row = $rs->fetch(2)){
        $uid = $row['uid'];
        $first_name = $row['first_name'];
        $last_name = $row['last_name'];
        $address = $row['address'];
        $username = $row['username'];
        $email = $row['email'];
        $phone_number = $row['phone_number'];
        $password = $row['password'];

        $output.= "
            <tr>
                <td>$uid</td>               
                <td>$first_name</td>
                <td>$last_name</td>
                <td>$address</td>
                <td>$username</td>
                <td>$email</td>
                <td>$phone_number</td>
                <td>$password</td>
//                <td class='text-center'><button onclick='getUserDetails()' title='Update Record' class='btn btn-warning'  data-toggle='modal'><span><i class=\"fa fa-edit\"></i></span></button></td>
//                <td class='text-center'><button onclick='delete_user()' class=\"btn btn-danger\"><span><i class=\"pe-7s-delete-user\"></i></span></span></button></td>
            </tr>    
        ";
    }

    $output.="
        </tbody>
    </table>
    ";

    echo $output;

}