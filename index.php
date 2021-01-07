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
    <title>Home | Healthy</title>
</head>

<body class="blue-grey lighten-5">

    <!-- Navbar -->
    <nav class="mb-3">
        <div class="nav-wrapper blue lighten-2">
            <div class="container">
                <a href="#" class="brand-logo">Healthy</a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <?php if (isset($_SESSION['user'])) : ?>
                        <li><a href="logout.php">Logout</a></li>
                    <?php else : ?>
                        <li><a href="login.php">Login</a></li>
                    <?php endif ?>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Menu -->
    <div class="container ui grid" align="center">
        <div class="two wide column"><a href="#">Home</a></div>
        <div class="two wide column"><a href="#">About Us</a></div>
        <div class="two wide column"><a href="#">Contact Us</a></div>
        <div class="ten wide column"></div>
    </div>

    <!-- Content -->
    <div class="ui grid container mt-5">

        <!-- Latest News -->
        <div class="five wide column blue-grey lighten-4">
            <h1 align="center">Latest News</h1>
            <h2>Mematahkan Hoaks Seputar Vaksin Covid-19</h2>
            <h6><b>1. Vaksin Covid-19 tidak aman</b><br><br>

                Dirga mengungkapkan bahwa ini adalah hal yang keliru. Untuk dapat digunakan secara luas, vaksin telah melewati tahap penelitian panjang. Riset vaksin dimulai dari riset pada hewan, baru kemudian pada manusia setelah terbukti aman.<br><br>
                Pada manusia, ada 3 fase dan melibatkan ribuan orang. Dalam proses ini dilihat efektivitas dan keamanannya. Sejauh ini, riset vaksin Covid-19 tidak menunjukkan tidak ada catatan berarti sehingga aman. <br><br>
                "Keamanan vaksin ini dipantau terus, bukan setelah diedarkan lalu dibiarkan begitu saja," kata Dirga.</h6>

            <h6><b>2. Vaksin itu tidak ada gunanya</b><br><br>

                Vaksin itu sifatnya melatih sistem imunitas, memproduksi antibodi sehingga tubuh kebal terhadap penyakit secara spesifik. Ini jadi keunggulan penggunaan vaksin.<br><br>
                "Vaksin bekerja menetralisir virus lebih spesifik. Jaga kebersihan, makan makanan bergizi itu upaya general tapi vaksin ini spesifik," kata dia.<br><br></h6>
        </div>

        <!-- News -->
        <div class="eleven wide column">
            <?php $ambil = $koneksi->query("SELECT * FROM berita");  ?>
            <?php while ($perberita = $ambil->fetch_assoc()) {  ?>
                <?php $id_berita = ['id_berita']; ?>
                <h1 align="center"><?php echo $perberita['judul'] ?></h1>
                <img src="img/<?php echo $perberita['gambar'] ?>" height="300" class="gambar-berita" alt="">
                <h6><?php echo $perberita['isi'] ?></h6>
                <br>
            <?php } ?>
        </div>
    </div>

    <script type="text/javascript" src="css/materialize-v1.0.0/materialize/js/materialize.min.js"></script>
    <script type="text/javascript" src="css/bootstrap-4.5.3-dist/bootstrap-4.5.3-dist/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="css/Semantic-UI-CSS-master/Semantic-UI-CSS-master/semantic.min.js"></script>
</body>

</html>