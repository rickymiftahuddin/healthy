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
    <title>Admin | Healthy</title>
</head>

<body>

    <!-- Navbar -->
    <nav class="mb-3">
        <div class="nav-wrapper blue lighten-2">
            <div class="container">
                <a href="#" class="brand-logo">Healthy</a>
                <a href="logout.php" class="right">Logout</a>
            </div>
        </div>
    </nav>

    <div class="ui grid mr-1">
        <div class="ui secondary vertical pointing menu three wide column blue-grey lighten-5">
            <a href="admin.php" class="active item m-2">Dashboard</a>
            <a href="admin-posting.php" class="item m-2">Posting</a>
            <a href="admin-categories.php" class="item m-2">Categories</a>
            <a href="admin-comments.php" class="item m-2">Comments</a>
            <a href="admin-user.php" class="item m-2">User</a>
            <a href="logout.php" class="item m-2">Logout</a>
        </div>
        <div class="thirteen wide column">
            <h1 class="m-5">Dashboard</h1>
            <div class="row">
                <div class="col s2 m1">
                    <div class="card blue-grey darken-2">
                        <div class="card-content white-text">
                            <span class="card-title">POSTING</span>
                            <p>Jadi gini bro, <br>
                                Kalo mau posting berita, klik link di bawah.</p>
                        </div>
                        <div class="card-action">
                            <a class="blue-text text-lighten-2" href="admin-posting.php">This is a link</a>
                        </div>
                    </div>
                </div>
                <div class="col s2 m1">
                    <div class="card blue-grey darken-2">
                        <div class="card-content white-text">
                            <span class="card-title">Categories</span>
                            <p>Jadi gini sis, <br>
                                Kalo mau liat kategori, klik link di bawah.</p>
                        </div>
                        <div class="card-action">
                            <a class="blue-text text-lighten-2" href="admin-categories.php">This is a link</a>
                        </div>
                    </div>
                </div>
                <div class="col s2 m1">
                    <div class="card blue-grey darken-2">
                        <div class="card-content white-text">
                            <span class="card-title">Comments</span>
                            <p>Jadi gini bjir, <br>
                                Kalo mau liat komentar pedas, klik link di bawah.</p>
                        </div>
                        <div class="card-action">
                            <a class="blue-text text-lighten-2" href="admin-comments.php">This is a link</a>
                        </div>
                    </div>
                </div>
                <div class="col s2 m1">
                    <div class="card blue-grey darken-2">
                        <div class="card-content white-text">
                            <span class="card-title">User</span>
                            <p>Jadi gini bjay, <br>
                                Kalo mau stalk mantan, klik link di bawah.</p>
                        </div>
                        <div class="card-action">
                            <a class="blue-text text-lighten-2" href="admin-user.php">This is a link</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <script type="text/javascript" src="css/materialize-v1.0.0/materialize/js/materialize.min.js"></script>
    <script type="text/javascript" src="css/bootstrap-4.5.3-dist/bootstrap-4.5.3-dist/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="css/Semantic-UI-CSS-master/Semantic-UI-CSS-master/semantic.min.js"></script>
</body>

</html>