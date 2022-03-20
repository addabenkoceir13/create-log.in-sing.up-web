<?php 
include "../../../backend/forgotPass/index_find.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Css -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="../../../../Bootstrap/css/bootstrap.min.css">
    <!-- icons photo -->
    <link rel="Logo Alaman.png" sizes="76x76" href="photo/Logo Alaman.png">
    <link rel="icon" type="image/png" sizes="96x96" href="photo/Logo Alaman.png">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hurricane&family=Open+Sans:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="file:///E:/fontawesome/css/all.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <title>Forgot password</title>
</head>

<body class=".bod">
    <div class="box-body">
        <div class="  box-1">
            <h1>Choose a New Password</h1>
            <hr>
            <p>
                Create a new password that is at least 6 characters long. A strong password is combination of letters, numbers, and punctuation marks.
            </p>
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
                <input type="password" name="Npassword" placeholder="New Password" class="form-control" required>

                <input type="password" name="CNpassword" placeholder="Confirm new password" class="form-control" required>
                <div style="text-align: left;" class="text-danger"><?php echo $password_err; ?></div>
                <hr>
                <div class="float-end">
                    <button type="submit" name="change_pass" class="btn btn-primary">Confirm</button>
                </div>
            </form>
        </div>
        <div class=" box-2 d-none d-md-block">
            <img src="../../../photo/Security On-amico.svg" alt="">
        </div>

    </div>
</body>

</html>