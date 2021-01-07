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
            <a href="penulis.php" class="active item m-2">Posting</a>
            <a href="penulis-categories.php" class="item m-2">Categories</a>
            <a href="penulis-comments.php" class="item m-2">Comments</a>
            <a href="logout.php" class="item m-2">Logout</a>
        </div>
        <div class="thirteen wide column">
            <h1 class="m-5">Posting</h1>
            <div class="row">
                <form class="col s12" action="admin-posting.php" method="post">
                    <div class="row">
                        <div class="input-field col s12">
                            <h2 class="blue-text text-lighten-2">Judul</h2>
                            <textarea id="judul" name="judul" class="materialize-textarea"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <h2 class="blue-text text-lighten-2">Isi</h2>
                            <textarea id="isi" name="isi" class="materialize-textarea"></textarea>
                        </div>
                    </div>
                    <input class="btn waves-effect waves-light blue lighten-2" type="submit" name="submit" value="SUBMIT"></input>

                </form>
            </div>
        </div>
    </div>

    <?php

    if (isset($_POST["submit"])) {
        $judul = $_POST['judul'];
        $isi = $_POST['isi'];


        $koneksi->query("INSERT into berita (judul,isi) values('$judul','$isi')");

        echo "<script>alert('Posting Sukses');</script>";
        echo "<script>location='admin-posting.php'</script>";
    }

    ?>




    <script type="text/javascript" src="css/materialize-v1.0.0/materialize/js/materialize.min.js"></script>
    <script type="text/javascript" src="css/bootstrap-4.5.3-dist/bootstrap-4.5.3-dist/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="css/Semantic-UI-CSS-master/Semantic-UI-CSS-master/semantic.min.js"></script>
    <script type="text/javascript" src="vendor/ckeditor/ckeditor/ckeditor.js"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/23.1.0/classic/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('judul');
        CKEDITOR.replace('isi');
    </script>
</body>

</html>