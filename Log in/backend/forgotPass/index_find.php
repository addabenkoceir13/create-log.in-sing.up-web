<?php
session_start();
include "conn2.php";
$email_err = $password_err ='';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    # This code php search for email or mobile number
    if (isset($_POST["search"])) {
        $email  = test_input($_POST["search_em"]);
        $number = test_input($_POST["search_em"]);
        $_SESSION["change"] = $email;

        $sql = "SELECT * FROM `sign_up` WHERE `email` = '$email' OR `number`  = '$number'";
        $result = mysqli_query($conn,$sql);
        if(mysqli_num_rows($result) > 0){
            while ($row = mysqli_fetch_assoc($result)) {
                $id = $row["id"];
                header('Location: ../rest/index.php');
                exit();
            }
        }
        else {
            $email_err = '<i style="margin-right: 10px;" class="fa fa-times-circle-o " aria-hidden="true"></i>Email or mobile number not found';
        }
        

    }
    #This code php change password
    if (isset($_POST["change_pass"])) {
        $email = $_SESSION["change"];
        $password  = test_input($_POST["Npassword"]);
        $Cpassword = test_input($_POST["CNpassword"]);

        if ($password == $Cpassword) {
            $sql = "UPDATE `sign_up` SET `password` = '$Cpassword' WHERE `email` = '$email'";
                if (mysqli_query($conn, $sql)) {
                    header('Location: ../../index.php');
                    exit();
                }
        }else {
            $password_err = '<i style="margin-right: 10px;" class="fa fa-times-circle-o " aria-hidden="true"></i>Password does not match';
        }


    }





}


function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
   
  }
  mysqli_close($conn);
?>