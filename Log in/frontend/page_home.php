<?php 
session_start();
if (isset($_SESSION["fname"]) && isset($_SESSION["lname"]) && isset($_SESSION["birthday"]) &&
    isset($_SESSION["gender"]) && isset($_SESSION["number"]) && isset($_SESSION["email"])) {
    $fname = $_SESSION["fname"];
    $lname = $_SESSION["lname"];
    $birth = $_SESSION["birthday"];
    $gender= $_SESSION["gender"];
    $number= $_SESSION["number"];
    $email = $_SESSION["email"];
}else {
    header('Location: index.php');
    exit();
}




?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="style_page.css">
    <link rel="stylesheet" href="../../Bootstrap/css/bootstrap.min.css">
    <!-- Actualiser Page -->
    <meta http-equiv='expires' content='0'>
    <meta http-equiv='pragma' content='no-cache'>
    <!-- icons photo -->
    <link rel="Logo Alaman.png" sizes="76x76" href="photo/Logo Alaman.png">
    <link rel="icon" type="image/png" sizes="96x96" href="photo/Logo Alaman.png">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hurricane&family=Montserrat:wght@200&family=Open+Sans:ital@1&display=swap" rel="stylesheet">
    <title>Page Information</title>
</head>

<body class="body-2">
    <div class="conter">
        <div class="box-1">
            <h1>Weclcom  <?php echo $fname;  ?></h1>
            <p><strong>Farst Name:</strong> <?php echo $fname;  ?></p>
            <p><strong>Last Name: </strong> <?php echo $lname;  ?></p>
            <p><strong>Birthday:  </strong> <?php echo $birth;  ?></p>
            <p><strong>Gender:    </strong> <?php echo $gender;  ?></p>
            <p><strong>Number Phone:</strong> <?php echo $number;  ?></p>
            <p><strong>Email:     </strong> <?php echo $email;  ?></p>
            <!-- button log out  -->
            <div class="container ">
                <button type="button" class="btn btn-danger float-end " data-bs-toggle="modal" data-bs-target="#myModal">Log out</button>
            </div>
        </div>


        <!-- The Modal -->
        <div class="modal fade" id="myModal">
            <div class="modal-dialog">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Log Out</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        Do you want to log out ?
                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <a href="../backend/logout.php" class="btn btn-danger">Log Out</a>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <script src="../../Bootstrap/js/bootstrap.min.js"></script>
</body>

</html>