-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 24 Nov 2020 pada 09.05
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ujianpraktik`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(11) NOT NULL,
  `judul` varchar(1000) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `isi` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`id_berita`, `judul`, `gambar`, `isi`) VALUES
(1, '<h1><strong>Cara Bangun Tidur yang Tepat untuk Jantung Lebih Sehat</strong></h1>\r\n', '20201124085607-1-banguntidur.jpg', '<p>Jakarta, CNN Indonesia --&nbsp;</p>\r\n\r\n<p>Bagaimana cara Anda bangun&nbsp;<strong><a href=\"https://www.cnnindonesia.com/tag/tidur\">tidur</a></strong>? Apakah langsung bangun tidur mendadak seperti orang kaget? Atau langsung bangun perlahan usai telentang?</p>\r\n\r\n<p>Hati-hati jika Anda biasa bangun dengan cara yang mendadak ini. Eka Sukma Putra, Founder Eka Sukma Yoga di Bali mengungkapkan bahwa bangun tidur dengan cara ini bisa berbahaya untuk jantung.</p>\r\n\r\n<p>&quot;Cara bangun tidur yang tidak benar bisa membebani jantung, terutama bagi orang yang sudah lanjut usia,&quot; ucapnya.</p>\r\n\r\n<p>&quot;Kalau Anda tahu ada beberapa kasus orang yang terkena serangan jantung, ini salah satu penyebabnya. Jantung belum siap untuk gerakan yang mendadak pascatidur.&quot;</p>\r\n\r\n<p>Lalu bagaimana cara bangun tidur yang aman dan baik?</p>\r\n\r\n<p>Eka mengungkapkan cara terbaik adalah dengan mulai berbaring ke sisi sebelah kanan tubuh. Kemudian tangan kanan diangkat ke atas dan diletakkan di bawah kepala sebagai bantalan kepala.</p>\r\n\r\n<p>Kemudian secara perlahan posisikan tangan kiri ke bagian depan dada. Dengan posisi tegak lurus dengan dada, tekan tangan ke kasur sebagai tumpuan tubuh untuk mulai bangun. Secara perlahan angkat tubuh seiring dengan tumpuan tangan.</p>\r\n\r\n<p>Kemudian duduk sebentar sebelum akhirnya ambil posisi untuk berdiri.</p>\r\n\r\n<p><ins><img alt=\"\" src=\"https://wtf2.forkcdn.com/www/delivery/lg.php?bannerid=0&amp;campaignid=0&amp;zoneid=7574&amp;loc=https%3A%2F%2Fwww.cnnindonesia.com%2Fgaya-hidup%2F20201118110918-255-571247%2Fcara-bangun-tidur-yang-tepat-untuk-jantung-lebih-sehat&amp;referer=https%3A%2F%2Fwww.cnnindonesia.com%2Ftag%2Fkesehatan&amp;cb=1c2bacb53e\" style=\"height:0px; width:0px\" /></ins></p>\r\n\r\n<p>&quot;Ini mirip dengan gerakan yoga. Tapi semuanya harus dilakukan dengan&nbsp;<em>mindfullness</em>&nbsp;sehingga ke tubuh efeknya bagus dan bisa menyehatkan.&quot;</p>\r\n\r\n<p>Tak dimungkiri, bangun tidur dengan gerakan yang terlalu cepat bisa menyebabkan sakit kepala atau migran mendadak dan merusak mood pagi hari Anda.&nbsp;</p>\r\n'),
(2, '<h1><strong>Pakar IPB: Jeroan Ikan Mengandung Protein dan Lemak Tak Jenuh</strong></h1>\r\n', '20201124090034-1-ikangoreng.jpeg', '<p>&nbsp;</p>\r\n\r\n<p>Jakarta, CNN Indonesia --&nbsp;</p>\r\n\r\n<p>Konsumsi daging&nbsp;<strong><a href=\"https://www.cnnindonesia.com/tag/ikan\" target=\"_blank\">ikan&nbsp;</a></strong>memang telah dikenal memiliki sejumlah kandungan yang bermanfaat bagi&nbsp;<strong><a href=\"https://www.cnnindonesia.com/tag/kesehatan\" target=\"_blank\">kesehatan</a></strong>. Namun, tahukah bahwa jeroan ikan, yang mungkin kerap terbuang, juga bermanfaat?</p>\r\n\r\n<p>Baru-baru ini, pakar perikanan dari Institut Pertanian Bogor (IPB), Roni Nugraha, mengatakan bahwa jeroan ikan banyak mengandung protein dan lemak tak jenuh.</p>\r\n\r\n<p>&quot;Khusus untuk jeroan ikan, jikalau kita melihat komposisi kimianya, jeroan banyak mengandung protein dan juga lemak tak jenuh,&quot; kata Roni kepada Antara di Kampus IPB&nbsp;Bogor, Jawa Barat, Senin (23/11).</p>\r\n\r\n<p>Ia mengemukakan bahwa lemak tak jenuh, terutama omega 3 dan omega 9, dapat bermanfaat sebagai anti-inflamasi dalam tubuh.</p>\r\n\r\n<p>&quot;Omega-3 misalnya, dapat mencegah penyakit kardiovaskuler dan kalau dikonsumsi oleh bayi atau anak-anak dapat meningkatkan kecerdasan otak,&quot; katanya</p>\r\n\r\n<p>Sementara untuk Omega-9, dapat menghambat pembentukan&nbsp;<em>Low-density lipoprotein&nbsp;</em>(LDL) atau kolesterol jahat yang menjadi penyebab pembentukan plak pada pembuluh darah kapiler.</p>\r\n\r\n<p>Roni mengungkapkan bahwa industri perikanan menghasilkan banyak sekali produk sampingan atau yang biasa disebut&nbsp;<em>by-product.&nbsp;</em>Di antaranya adalah tulang, jeroan, sisik, kepala dan bagian-bagian lain yang bukan merupakan produk utama, termasuk telur ikan.</p>\r\n\r\n<p>Menurutnya, kata&nbsp;<em>by-product</em>, sebenarnya bersifat relatif, tergantung jenis industrinya. Dalam industri ikan, organ-organ tersebut lah yang masuk dalam kategori&nbsp;<em>by-product</em>. Namun pada industri kaviar (telur ikan), telur ikan lah yang menjadi produk utama.</p>\r\n\r\n<p>Ia menyatakan lebih memilih kata&nbsp;<em>by-product</em>&nbsp;karena organ-organ tersebut sebenarnya masih dapat dimanfaatkan.</p>\r\n\r\n<p><ins><img alt=\"\" src=\"https://wtf2.forkcdn.com/www/delivery/lg.php?bannerid=0&amp;campaignid=0&amp;zoneid=7574&amp;loc=https%3A%2F%2Fwww.cnnindonesia.com%2Fgaya-hidup%2F20201123095503-255-573184%2Fpakar-ipb-jeroan-ikan-mengandung-protein-dan-lemak-tak-jenuh&amp;referer=https%3A%2F%2Fwww.cnnindonesia.com%2Ftag%2Fkesehatan&amp;cb=571369676c\" style=\"height:0px; width:0px\" /></ins></p>\r\n\r\n<p>Bila dilihat pada komposisi kimianya, berdasarkan sejumlah penelitian,&nbsp;jeroan ikan memiliki manfaat seperti protein dan juga lemak tak jenuh itu.</p>\r\n\r\n<p>Sayangnya, jeroan ikan termasuk organ yang mudah sekali mengalami pembusukan dikarenakan banyaknya mikroba.</p>\r\n\r\n<p>&quot;Sehingga, apabila ingin dimanfaatkan untuk konsumsi manusia, perlu penanganan yang segera setelah dikeluarkan dari tubuh ikan agar tetap segar,&quot; kata Roni.</p>\r\n\r\n<p>Dia kemudian mengungkapkan bahwa umumnya, industri ikan tidak menyediakan sumber daya yang dapat digunakan untuk menangani jeroan ikan, sehingga pada akhirnya menjadi lebih banyak dibuang. Kalaupun disimpan, biasanya tidak lagi dalam kondisi segar dan layak untuk dikonsumsi.</p>\r\n\r\n<p>&quot;Jadi jeroan ikan ini [pada akhirnya] lebih banyak dimanfaatkan untuk bahan non-konsumsi, seperti pakan, sumber enzim protease atau diambil minyaknya,&quot; ungkapnya.</p>\r\n');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `level` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `level`, `username`, `password`) VALUES
(1, 1, 'admin', 'admin'),
(2, 2, 'penulis', 'penulis'),
(3, 3, 'user', 'user');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
