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
    <title>Penulis | Healthy</title>
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
            <a href="penulis.php" class="item m-2">Posting</a>
            <a href="penulis-categories.php" class="item m-2">Categories</a>
            <a href="penulis-comments.php" class="item active m-2">Comments</a>
            <a href="logout.php" class="item m-2">Logout</a>
        </div>
        <div class="thirteen wide column">
            <h1 class="m-5">Comments</h1>
            <div class="ui card">
                <div class="content">
                    <div class="header">Alok</div>
                    <div class="meta">
                        <span>2 hari lalu</span>
                        <a>Kriminal</a>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum excepturi corrupti quia, molestiae debitis iure accusantium consectetur sunt aperiam quasi minus ea reiciendis fugit omnis ipsam sapiente hic et voluptas!</p>
                </div>
            </div>
        </div>
    </div>




    <script type="text/javascript" src="css/materialize-v1.0.0/materialize/js/materialize.min.js"></script>
    <script type="text/javascript" src="css/bootstrap-4.5.3-dist/bootstrap-4.5.3-dist/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="css/Semantic-UI-CSS-master/Semantic-UI-CSS-master/semantic.min.js"></script>
</body>

</html>