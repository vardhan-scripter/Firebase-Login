<?php
require_once('./login-script.php');
$login = new Login();

 $username = $_POST['username'];

 $password = $_POST['password'];

 $fullname = $_POST['fullname'];

 $age = $_POST['age'];

 $course = $_POST['course'];

 $branch = $_POST['branch'];

 $rollno = $_POST['rollno'];


if($login->insert([
$username => [
        'password' => $password,
        'fullname' => $fullname,
        'course' => $course,
        'branch' => $branch,
        'rollno' => $rollno,
        'age' => $age,
    ],
])){
	echo "new user created successfully";
}else{
	echo "error";
}
?>