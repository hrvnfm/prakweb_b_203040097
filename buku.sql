-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 23, 2022 at 09:41 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prakweb_2022_b_203040097`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `id_buku` int(11) NOT NULL,
  `nama_buku` varchar(128) NOT NULL,
  `tahun_terbit` date NOT NULL,
  `gambar` varchar(11) NOT NULL,
  `harga` varchar(32) NOT NULL,
  `keterangan` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id_buku`, `nama_buku`, `tahun_terbit`, `gambar`, `harga`, `keterangan`) VALUES
(1, 'Sebuah Seni untuk Bersikap Bodo Amat by Mark Manson\r\n', '2016-09-30', '1.jpg', 'Rp. 75.000', 'Selama beberapa tahun belakangan, Mark Manson banyak menulis hal-hal yang mengoreksi harapan-harapan delusional melalui blognya dan menjadi sangat populer di berbagai kalangan. Berbagai pemikirannya tersebut kemudian dituangkan dalam buku ini dan menjadi salah satu buku best seller di Indonesia dengan cepat.\r\n\r\nSelain ditunjang dengan judul yang unik, isi buku juga tidak kalah menarik. Pada buku ini, Mark Manson menuliskan bahwa, “Kunci untuk kehidupan menjadi lebih baik bukan tentang mempedulikan banyak hal; namun tentang mempedulikan hal yang sederhana saja, hanya peduli tentang apa yang benar dan mendesak dan penting”. Dipasarkan secara luas di toko buku online maupun offline, buku best seller ini dibandrol dengan harga 60 ribuan rupiah'),
(2, 'Atomic Habits: Perubahan Kecil yang Memberikan Hasil Luar Biasa by James Clear', '2018-10-16', '2.jpg', 'Rp. 50.000', 'James Clear menemukan bahwa perubahan nyata berasal dari efek gabungan ratusan atau bahkan ribuan keputusan kecil, misalnya mengerjakan dua push-up sehari, bangun lima menit lebih awal, sampai menahan sebentar hasrat untuk menelepon. Semua kebiasaan itu disebut sebagai Atomic Habits, sebagaimana judul buku best seller yang ditulisnya.\r\n\r\nDalam buku best seller ini, Clear mengungkapkan bagaimana perubahan-perubahan yang sangat kecil dapat tumbuh menjadi hasil-hasil yang mengubah hidup. Ia menyingkap beberapa trik sederhana dalam hidup, seperti kekuatan tak terduga Aturan Dua Menit, dan menggali teori psikologi serta neurosains untuk menjelaskan pentingnya perubahan kecil tersebut. Kalau Anda memerlukan motivasi yang sederhana tapi mengena, buku ini cocok untuk Anda.'),
(3, 'I Want To Die But I Want To Eat Tteokpokki by Baek Se Hee', '2022-11-01', '3.jpg', 'Rp. 80.000', 'Ditulis oleh Baek Se Hee, I Want To Die But I Want To Eat Tteokpokki menjadi salah satu buku best seller di Korea Selatan dan banyak digemari juga oleh orang Indonesia. I Want To Die But I Want To Eat Tteokpokki merupakan sebuah esai tentang pertanyaan, penilaian, saran, nasihat, dan evaluasi diri dengan tujuan membuat pembaca bisa menerima dan mencintai dirinya sendiri. Kisah Baek Se Hee ditulis dengan menyentuh sehingga tidak heran jika buku self improvement ini memperoleh sambutan baik dari para pembaca di negara asalnya.\r\n\r\nUntuk versi terjemahan bahasa Indonesianya, diterbitkan oleh Penerbit Haru dengan tebal 236 halaman. Buku best seller ini dijual di banyak toko buku, baik secara online maupun offline.'),
(4, 'Filosofi Teras by Henry Manampiring', '2018-11-26', '4.jpg', 'Rp. 100.000', 'Stoisisme atau yang dikenal sebagai Filosofi Teras yang telah ditemukan sekitar 2000 tahun lalu adalah filsafat Yunani-Romawi kuno yang bisa membantu manusia untuk mengatasi emosi negatif dan menghasilkan mental yang kuat dalam menghadapi kehidupan. Namun berbeda dengan filsafat yang berat dan mengawang-awang, Filosofi Teras justru relevan dan mudah dimengerti dengan kehidupan manusia masa kini. Hal itu membuat Filosofi Teras karya Henry Manampiring ini menjadi salah satu buku best seller di Indonesia.\r\n\r\nBuku best seller ini ditulis setebal 320 halaman dan diterbitkan oleh Penerbit Buku Kompas.'),
(5, 'The Psychology of Money by Morgan Housel', '2020-09-08', '5.jpg', 'Rp. 100.000', 'Kalau Anda termasuk orang yang sulit mengatur pengeluaran dengan baik, buku best seller The Psychology of Money karya Morgan Housel ini bisa menjadi pilihan yang tepat. Dalam buku ini, Morgan Housel membagikan 19 cerita pendek yang mengeksplorasi cara-cara ‘aneh’ dari orang-orang yang berpikir tentang uang dan mengajari pembacanya memahami topik finansial dengan lebih baik.\r\n\r\nBuku best seller ini hanya setebal 262 halaman, jadi tidak akan menyita waktu terlalu banyak untuk menamatkannya.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `id_buku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
