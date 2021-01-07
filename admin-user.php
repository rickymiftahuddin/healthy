<?php include 'koneksi.php' ?>
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

    <div class="ui grid">
        <div class="ui secondary vertical pointing menu three wide column blue-grey lighten-5">
            <a href="admin.php" class="item m-2">Dashboard</a>
            <a href="admin-posting.php" class="item m-2">Posting</a>
            <a href="admin-categories.php" class="item m-2">Categories</a>
            <a href="admin-comments.php" class="item m-2">Comments</a>
            <a href="admin-user.php" class="active item m-2">User</a>
            <a href="logout.php" class="item m-2">Logout</a>
        </div>
        <div class="thirteen wide column">
            <h1 class="m-5">User</h1>
            <table class="ui table blue-grey lighten-5">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Level</th>
                        <th>Username</th>
                        <th>Password</th>
                    </tr>
                </thead>

                <tbody>
                    <?php $query = mysqli_query($koneksi, "SELECT * FROM user order by id_user"); ?>
                    <?php while ($data = mysqli_fetch_array($query)) : ?>
                        <tr>
                            <td><?= $data['id_user']; ?></td>
                            <td><?= $data['level']; ?></td>
                            <td><?= $data['username']; ?></td>
                            <td><?= $data['password']; ?></td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
    </div>


    <script type="text/javascript" src="css/materialize-v1.0.0/materialize/js/materialize.min.js"></script>
    <script type="text/javascript" src="css/bootstrap-4.5.3-dist/bootstrap-4.5.3-dist/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="css/Semantic-UI-CSS-master/Semantic-UI-CSS-master/semantic.min.js"></script>
</body>

</html>