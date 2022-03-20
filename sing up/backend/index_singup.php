<?php
include "conn.php";
$password_err = '';
if($_SERVER['REQUEST_METHOD'] === 'POST'){

    $fname     = test_input(ucwords($_POST["fname"]));
    $lname     = test_input(ucwords($_POST["lname"]));
    $birthday  = test_input($_POST["birthday"]);
    $gender    = test_input($_POST["gender"]);
    $number    = test_input($_POST["number"]);
    $email     = test_input($_POST["email"]);
    $password  = test_input($_POST["password"]);
    $cpassword = test_input($_POST["cpassword"]);

    $hashedPAss = sha1($password);

    


    if ($password == $cpassword) {
        $sql = "INSERT INTO  sign_up SET  `fname` = '$fname', `lname` ='$lname',  `birthday` = '$birthday', `gender` = '$gender',
         `number` = '$number', `email` = '$email', `password` = '$hashedPAss'"; 
        if (mysqli_query($conn, $sql)) {
            header('Location: ../../Log in/frontend/index.php');
            exit();
          }
        
       
    }else{
        $password_err = '<i style="margin-right: 10px;" class="fa fa-times-circle-o " aria-hidden="true"></i>Password does not match';
    }



}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
   
  }


?>