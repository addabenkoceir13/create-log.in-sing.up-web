<?php 
// conuct database
include "conn.php";

$email_val = $pass_val = $email = '';
$email_err = $pass_err = $mesgErr = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $email    = $_POST['email'];
    $password = $_POST['password'];
    
    $hashedPAss = sha1($password);

      $sql = "SELECT * FROM `sign_up` WHERE `email` = '$email'";
      $result = mysqli_query($conn,$sql);
      if(mysqli_num_rows($result) > 0){
          while($row = mysqli_fetch_assoc($result)){
              // $row["email"] = $user["email"]; 
              $email_val = '<i style="margin-right: 10px;" class="fa fa-check-circle-o" aria-hidden="true"></i>This is a valid email';
          }
      }else{
            $email_err = '<i style="margin-right: 10px;" class="fa fa-times-circle-o " aria-hidden="true"></i>This email does not exist';
      }
      $sql1 = "SELECT * FROM `sign_up` WHERE `password` = '$hashedPAss'  AND `email` = '$email' ";
      $result1 = mysqli_query($conn,$sql1);
      if(mysqli_num_rows($result1) > 0){
          while($row = mysqli_fetch_assoc($result1)){
               $_SESSION["fname"]    =  $row["fname"]   ;  
               $_SESSION["lname"]    =  $row["lname"]   ;
               $_SESSION["birthday"] =  $row["birthday"];
               $_SESSION["gender"]   =  $row["gender"]  ;
               $_SESSION["number"]   =  $row["number"]  ;
               $_SESSION["email"]    =  $row["email"]   ;

              $pass_val = '<i style="margin-right: 10px;" class="fa fa-check-circle-o" aria-hidden="true"></i> Correct password';
              header('Location: page_home.php'); #Redirectto Dashoard page
              exit();
          }
      }else{
            $pass_err = '<i style="margin-right: 10px;" class="fa fa-times-circle-o " aria-hidden="true"></i>This is an incorrect password';
      }


 function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
  
 }
}


mysqli_close($conn);
?>