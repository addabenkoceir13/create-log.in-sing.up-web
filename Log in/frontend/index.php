<?php
session_start();
include_once "../backend/index_login.php";

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
        <title>Log in </title>
    </head>

    <body>

        <div class="center-box">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-12">
                        <div class="container mt-3 box-1 ">
                            <h2 class="text-center">Log in </h2>
                            <?php echo $mesgErr; ?>
                            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class="row g-3 needs-validation" novalidate>

                                <div class="mb-3 mt-3">
                                    <label for="validationCustom01" class="form-label">Email</label>
                                    <input type="email" name="email" placeholder="Enter your email" class="form-control" id="validationCustom01" value="<?php echo $email; ?>" required>
                                    <div class="text-success"><?php echo $email_val; ?></div>
                                    <div class="text-danger"><?php echo $email_err; ?></div>
                                    <div class="invalid-feedback">Please choose a email.</div>
                                </div>
                                <div class="mb-3">
                                    <label for="validationCustom01" class="form-label">Password</label>
                                    <input type="password" name="password" placeholder="Enter your password" class="form-control" id="validationCustom01"  required>
                                    <div class="text-success"><?php echo $pass_val; ?></div>
                                    <div class="text-danger"><?php echo $pass_err; ?></div>
                                    <div class="invalid-feedback">Please choose a password.</div>
                                </div>

                                <button style="width: 100%; font-weight: 600;"  type="submit" class="btn btn-primary btn-block mt-2">Login</button>
                            </form>
                            <p style="text-align: center;"><a href="forgot pass/find/index.php" target="_blank" rel="noopener noreferrer">Forgot password?</a></p>
                            <hr>
                             <a  style="text-align: center; color:white; " href="../../sing up/frontend/index.php" class="btn btn-success btn-lg mt-5">Create new Account</a>
                        </div>
                    </div>
                    <div class="col-md-6 d-none d-md-block ">
                        <img src="../photo/Login-rafiki.svg" alt="Log in">
                    </div>
                </div>
            </div>
        </div>

        <!-- Script Botrap -->
        <script src="../../Bootstrap/js/bootstrap.min.js"></script>
        <script src="app.js"></script>
    </body>

    </html>