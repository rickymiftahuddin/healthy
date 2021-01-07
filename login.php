<?php include 'koneksi.php' ?>
<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/bootstrap-4.5.3-dist/bootstrap-4.5.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/materialize-v1.0.0/materialize/css/materialize.min.css">
    <link rel="stylesheet" href="css/Semantic-UI-CSS-master/Semantic-UI-CSS-master/semantic.min.css">
    <link rel="stylesheet" href="css/main.css">
    <title>Login | Koran</title>
</head>

<body class="blue lighten-2">
    <form class="box-login z-depth-4" action="login.php" method="post">
        <h1>Login</h1>
        <div class="input-field col s6">
            <input id="username" name="username" type="text">
            <label class="blue-text text-lighten-2" for="username">Username</label>
        </div>
        <div class="input-field col s6">
            <input id="password" name="password" type="password">
            <label class="blue-text text-lighten-2" for="password">Password</label>
        </div>
        <ul class="ui grid">
            <li class="four wide column"></li>
            <li class="four wide column">
                <a href="index.php" class="waves-effect waves-light btn blue-grey darken-2 blue-grey-text text-lighten-5">Cancel</a>
            </li>
            <li class="four wide column">
                <input class="waves-effect waves-light btn blue lighten-2" type="submit" name="submit" id="submit" value="Login">
            </li>
            <li class="four wide column"></li>
        </ul>
    </form>

    <?php

    if (isset($_POST["submit"])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $ambil = $koneksi->query("SELECT * FROM user where username = '$username' and password = '$password'");
        $pecah = $ambil->fetch_assoc();
        $level = $pecah["level"];
        $ygcocok = $ambil->num_rows;

        if ($ygcocok == 1) {
            $_SESSION["user"] = $pecah;

            if ($level == '1') {

                echo "<script>alert('Login Sukses, Selamat Datang Admin');</script>";
                echo "<script>location='admin.php'</script>";
            } elseif ($level == '2') {

                echo "<script>alert('Login Sukses, Selamat Datang Penulis');</script>";
                echo "<script>location='penulis.php'</script>";
            } elseif ($level == '3') {

                echo "<script>alert('Login Sukses, Selamat Datang');</script>";
                echo "<script>location='index.php'</script>";
            } else {
                echo "<script>alert('Login Gagal');</script>";
                echo "<script>location='login.php'</script>";
            }
        } else {
            echo "<script>alert('Login Gagal, Username dan/atau Pasword salah');</script>";
            //  
        }
    }
    ?>

    <script type="text/javascript" src="css/materialize-v1.0.0/materialize/js/materialize.min.js"></script>
    <script type="text/javascript" src="css/bootstrap-4.5.3-dist/bootstrap-4.5.3-dist/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="css/Semantic-UI-CSS-master/Semantic-UI-CSS-master/semantic.min.js"></script>
</body>

</html>