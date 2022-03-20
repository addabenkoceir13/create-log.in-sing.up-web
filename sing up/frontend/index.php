<?php 
include "../backend/index_singup.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS Style -->
    <link rel="stylesheet" href="style.css">
    <!-- Bootstrap -->
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
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital@1&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="file:///E:/fontawesome/css/all.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>

    <!-- Title Login  -->
    <title>Sing up </title>
</head>

<body>

    <!--  -->
    <div class="container mt-2">
        <div class="row">
            <div class="col-md-6">
                <div class="box-2 d-none d-md-block">
                    <img src="../photo/Mobile login-pana.svg" alt="">
                </div>
            </div>
            <div class="col-md-5">
                <div class="container box-1 card">
                    <h2 class="text-center">Sing Up</h2>

                    <!-- Forms  -->
                    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" class="row g-3 needs-validation" method="POST" novalidate>
                        <div class="col-md-12">
                            <label for=" ">First Name</label>
                            <input type="text" name="fname" class="form-control" id="validationCustom01" placeholder="Enter your first name" required>
                        </div>
                        <div class="col-md-12">
                            <label for=" ">Last Name</label>
                            <input type="text" name="lname" class="form-control" id="validationCustom02" placeholder="Enter your last name" required>
                        </div>
                        <div class="col-md-12">
                            <label for=" ">Birthday</label>
                            <input type="date" name="birthday" class="form-control" id="validationCustom03" required>
                        </div>
                        <div class="col-md-12">
                            <!-- <label for="validationCustom04" class="form-label">State</label> -->
                            <select class="form-select" name="gender" id="validationCustom04" required>
                              <option selected disabled value="">Gender</option>
                              <option value="Man">Man</option>
                              <option value="Woman">Woman</option>
                            </select>
                        </div>
                        <div class="col-md-12">
                            <label for="">Mobile Number</label>
                            <input type="tel" name="number" pattern="[0-9]{2}[0-9]{8}" class="form-control" id="validationCustom05" placeholder="Enter your number" required>
                        </div>
                        <div class="col-md-12">
                            <label for="">Email</label>
                            <input type="email"  name="email" class="form-control" id="validationCustom03" placeholder="Enter your email" required>
                        </div>
                        <div class="col-md-12">
                            <label for="">Password</label>
                            <input type="password" name="password" class="form-control" id="validationCustom03" placeholder="Enter your Password" required>
                        </div>
                        <div style="text-align: left;" class="text-danger"><?php echo $password_err; ?></div>
                        <div class="col-md-12">
                            <input type="password" name="cpassword" class="form-control" id="validationCustom03" placeholder="Confirm password" required>
                        </div>
                        <button class="btn btn-primary btn-block btn-lg " type="submit">Sing Up</button>

                    </form>
                </div>
            </div>
        </div>

    </div>

    <!-- Script Botrap -->
    <script src="../../Bootstrap/js/bootstrap.min.js"></script>
    <script src="app.js"></script>
</body>

</html>