-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 02, 2023 at 08:22 AM
-- Server version: 5.7.33
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `website_lsima`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `penulis` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal` date NOT NULL,
  `dibaca` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `cover` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id`, `judul`, `penulis`, `isi`, `tanggal`, `dibaca`, `created_at`, `updated_at`, `cover`) VALUES
(6, 'Tes Urine WBP dalam rangka program  Rehabilitasi Pemasyarakatan', 'pangga dwi sandi', '<p>Malang - Selasa (28/02/2023) Lapas Kelas I Malang Kanwil Kemenkumhan Jawa Timur melakukan kegiatan tes urine bagi WBP, dalam rangka persiapan pelaksanaan Program Rehabilitasi Pemasyarakatan Tahun 2023 di Lapas Kelas I Malang.</p><p><br></p><p>Klinik Paricara Lapas menjadi lokasi kegiatan tes urine bagi WBP pada pagi ini, Selasa 28 Februari 2023. Kasi Perawatan, Zulfikar Bharuddin Ibnu Ghazali memberikan langsung pengarahan kepada WBP yang mengikuti tes urine Program Rehabilitasi Pemasyarakatan.Zulfikar menjelaskan dari hasil tes urine ini, nantinya akan diketahui jenis kandungan narkoba yang pernah dikonsumsi oleh Warga Binaan apakah masuk kategori ringan, sedang, atau berat.</p><p><br></p><p>Layanan rehabilitasi ini merupakan amanat Permenkumham Nomor 12 Tahun 2017 Tentang Penyelenggaraan Layanan Rehabilitasi Narkotika bagi WBP dan Tahanan di UPT Pemasyarakatan mengamanatkan agar pecandu, penyalahguna, dan korban penyalahgunaan narkotika mendapatkan layanan rehabilitasi pada Lembaga Pemasyarakatan (Lapas).</p><p><br></p><p>Tes urine kepada WBP ini merupakan tahap awal, yakni skrining. Sesuai dengan ketentuan sebagaimana tertuang pada Pasal 5 Permenkumham tersebut dijelaskan bahwa ada tiga tahapan dalam program rehabilitasi, yakni skrining, assesment rehabilitasi dan pemberian layanan rehabilitasi.\"Melalui program rehabilitasi ini pecandu-pecandu narkoba WBP Lapas Kelas I Malang ini nantinya diharapkan dapat melupakan narkoba dan berubah menjadi pribadi yang lebih baik lagi setelah mereka kembali ke masyarakat,\" tegas Zulfikar Bharuddin Ibnu Ghazali, Kasi Perawatan Lapas Kelas I Malang.</p><p><br></p><p>L\'SIMA PASTI APIK ! (HUMAS LAPAS KELAS I MALANG)</p>', '2023-03-02', 0, '2023-03-02 00:35:58', '2023-03-02 00:56:40', '1677743800.jpg'),
(7, 'Penemuan Barang Terlarang dari Pelemparang Lengkong', 'pangga dwi sandi', '<p>Malang - Selasa (28/02/2023) Lapas Kelas I Malang Kanwil Kemenkumhan Jawa Timur berhasil mengamankan penemuan diduga barang terlarang dari pelemparan di lengkong sebelah selatan Lapas Kelas I Malang.</p><p><br></p><p>Kronologi kejadian pada Selasa, 28 Februari 2023 pukul 08.15 WIB petugas staf Bimker, Suhari yang melakukan pengawalan Warga Binaan Pemasyarakatan (WBP) pekerja pertanian lengkong menemukan bungkusan berupa plastik hitam di sekitar lengkong sebelah selatan Lapas Kelas I Malang.Pada saat itu, Suhari sedang kontrol keliling di area selatan Lapas tepatnya di bawah pos menara tengah untuk mengawasi pekerja pertanian lengkong. </p><p><br></p><p>Kemudian melihat barang yang diduga mencurigakan.Suhari melaporkan temuan barang yang mencurigakan tersebut kepada Kabid Kamtib, Ka. KPLP dan Kalapas Kelas I Malang. Tanpa waktu lama Kalapas langsung berkoordinasi dengan Kasat Narkoba Polresta Malang, serta mengamankan barang temuan untuk diproses lebih lanjut.Setelah barang tersebut dibuka oleh anggota Polresta Malang Kota dan Kabid Kamtib didapat narkoba jenis ganja seberat 157 Gram. </p><p><br></p><p>Selalu waspada dan bekerja sesuai SOP merupakan kunci Sukses Lapas Kelas I Malang dalam memberantas peredaran Narkoba yang mungkin terjadi di dalam lapas. Barang temuan tersebut kemudian diserahkan ke Satres Narkoba Malang Kota.“Penggagalan masuknya barang terlarang narkoba ke dalam Lapas Kelas I Malang ini tak lepas dari ketelitian dan kecermatan Petugas yang sedang bertugas, Saya harap setiap Petugas Lapas harus selalu waspada dan juga melakukan deteksi dini gangguan keamanan dan ketertiban,” tegas Heri Azhari, Kalapas Kelas I Malang.</p><p><br></p><p>L\'SIMA PASTI APIK ! (HUMAS LAPAS KELAS I MALANG)</p>', '2023-03-02', 0, '2023-03-02 01:03:54', '2023-03-02 01:04:19', '1677744259.jpg'),
(8, 'PENGARAHAN KASI PERAWATAN LAPAS KELAS I MALANG KEPADA WBP CALON PROGRAM REHABILITASI SOSIAL', 'pangga dwi sandi', '<p>MALANG - Senin (27/02/2023) Lapas Kelas I Malang Kanwil Kemenkumham Jawa Timur bidang Pembinaan pada Sie Perawatan melakukan pengarahan Rehabilitasi Sosial.Kasi Perwatan, Zulfikar Bharuddin Ibnu Ghazali memberikan langsung pengarahan kepada WBP (Warga Binaan Pemasyarakatan) calon peserta (Residen) Program Rehabilitasi Sosial pada Senin 27 Februari di Klinik Paricara Lapas Kelas I Malang.</p><p><br></p><p>Zulfikar Berharap melalui Rehabilitasi sosial ini, tiap WBP dapat menjadi pribadi yang pulih, produktif,dan tidak kembali berurusan dengan kejahatan Narkoba dan kejahatan lainnya yang melanggar hukum saat di dalam maupun ketika telah bebas nantinya.Permenkumham Nomor 12 Tahun 2017 Tentang Penyelenggaraan Layanan Rehabilitasi Narkotika bagi WBP dan Tahanan di UPT Pemasyarakatan mengamanatkan agar pecandu, penyalahguna, dan korban penyalahgunaan narkotika mendapatkan layanan rehabilitasi pada Lembaga Pemasyarakatan (Lapas).</p><p><br></p><p>\"Program Rehabilitasi Sosial ini ditujukan untuk meningkatkan kualitas hidup Warga Binaan sehingga dapat diterima kembali dalam tatanan kehidupan sosial masyarakat,\" tegas Zulfikar Bharuddin Ibnu Ghazali Kasi Perawatan Lapas Kelas I Malang.</p><p><br></p><p>L\'SIMA PASTI APIK ! (HUMAS LAPAS KELAS I MALANG)</p>', '2023-03-02', 0, '2023-03-02 01:08:09', '2023-03-02 01:08:20', '1677744500.jpg'),
(9, 'PEMBAGIAN BARANG KEPERLUAN MANDI DAN SABUN CUCI WBP LAPAS KELAS I MALANG', 'pangga dwi sandi', '<p>MALANG - Jum\'t (24/02/2023) Lapas Kelas I Malang Kanwil Kemenkumhan Jawa Timur melakukan pembagian barang keperluan mandi dan cuci baju untuk WBP (Warga Binaan Pemasyarakatan) dan Tahanan.</p><p><br></p><p>Pembagian dilakukan mulai Jum\'at Pagi (24/02/2023) di Klnik Paricara Lapas Kelas I Malang. Barang-barang keperluan mandi dan cuci baju yang dibagikan berupa sabun mandi, shampo, pasta gigi, sabun cuci dan rexona pewangi badan.Kegiatan pembagian perlengkapan kebersihan diri ini memang sudah secara berkala dilakukan, ke seluruh Blok-blok hunian WBP/Tahanan di Lapas Kelas I Malang. </p><p><br></p><p>Sinergitas antar pelayan blok maupun palkam tiap kamar juga dibutuhkan, agar pembagian perlengkapan kebersihan ini merata.Barang-barang ini untuk Pemenuhan kebutuhan dasar WBP yang merupakan salah satu komitmen Lapas Kelas I Malang dalam melayani kebutuhan dasar WBP, diantaranya kebutuhan terhadap perlengkapan kebersihan diri. </p><p><br></p><p>Hal ini merupakan hak WBP yang diatur dalam Peraturan Pemerintah RI Nomor 32 Tahun 1999 tentang Syarat dan Tata Cara Pelaksanaan Hak Warga Binaan.Kalapas Kelas I Malang, Heri Azhari berharap seluruh Warga Binaan menjaga kebersihan diri dan lingkungan Lapas. Hal ini guna menunjang kenyamanan mengikuti kegiatan pembinaan sehari-hari yang ada di Lapas Kelas I Malang.</p><p><br></p><p>L\'SIMA PASTI APIK ! (HUMAS LAPAS KELAS I MALANG)</p>', '2023-03-02', 0, '2023-03-02 01:17:20', '2023-03-02 01:17:20', NULL),
(10, 'KHATAMAN ALQURAN BIN NADHOR SAMBUT BULAN SYA\'BAN DI LAPAS KELAS I MALANG', 'pangga dwi sandi', '<p>MALANG - Jum\'at (24/02/2023) Masjid At Taubah Lapas Kelas I Malang Kanwil Kemenkumhan Jawa Timur kembali menggelar khataman Alquran Bin Nadhor berjama\'ah.Bertepatan dengan menyambut bulan Sya\'ban, Masjid At Taubah Lapas Kelas I Malang menggelar khataman Alquran Bin Nadhor berjama\'ah yang diikuti Warga Binaan Pemasyarakatan (WBP) Lapas Kelas I Malang sejak pagi hari blok dibuka.</p><p><br></p><p>Sebelum kegiatan khataman, dilakukan kirim doa fatihah untuk keluarga warga binaan yang meninggal. Setelah sebelumnya disebarkan form nama keluarga yang akan dikirim doa fatihah disebarkan ke seluruh blok-blok hunian warga binaan Lapas Kelas I Malang.Khataman Alquran Bin Nadhor merupakan khataman AlQur\'an dengan melihat. </p><p><br></p><p>Masing-masing Warga Binaan mengambil Alquran yang telah dibagi per Juz. Tiap Warga binaan bisa menyelesaikan 1 Juz atau lebih dari itu.Kegiatan ini sebenarnya kegiatan yang rutin dilakukan, namun karena awal bulan Sya\'ban menjadi hal yang istimewa. Karena ini menandakan sekitar sebulan lagi akan memasuki bulan Ramadhan, dimana merupakan bulan suci bagi ummat Islam.Kegiatan Khataman ini merupakan salah satu pembinaan kepribadian bagi para warga binaan. Kalapas Kelas I Malang, Heri Azhari mengharapkan dengan kegiatan keagamaan semacam ini bisa meningkatkan kesadaran para warga binaan untuk berkepribadian lebih baik lagi.</p><p><br></p><p>L\'SIMA PASTI APIK ! (HUMAS LAPAS KELAS I MALANG)</p>', '2023-03-02', 0, '2023-03-02 01:18:59', '2023-03-02 01:18:59', NULL),
(11, 'LAPAS NARKOTIKA KELAS IIA SUNGGUMINASA SULSEL STUDI TIRU DI LAPAS KELS I MALANG', 'pangga dwi sandi', '<p>MALANG - Kamis (23/02/2023) Lapas Kelas I Malang Kanwil Kemenkumhan Jawa Timur mendapat kunjungan Studi Tiru dari Lapas Narkotika Kelas II A Sungguminasa Sulawesi Selatan.</p><p><br></p><p>Kalapas Narkotika Kelas II A Sungguminasa Sulawesi Selatan, Andi Mochamad Syarif memimpin kunjungan Studi Tiru Pembangunan Zona Integritas Menuju WBK (Wilayah Bebas dari Korupsi) dan WBBM (Wilayah Birokrasi Bersih Melayani) di Lapas Kelas I Malang.Kalapas Kelas I Malang, Heri Azhari menyambut rombongan Lapas Narkotika Kelas II A Sungguminasa Sulawesi Selatan ini. </p><p><br></p><p>Beliau juga menemani berkeliling ke beberapa lokasi yang ada di dalam Lapas. Rombongan mengunjungi mulai dari Area kunjungan Lapas, Klinik Paricara, Bimker Budi daya cacing, Perikanan air tawar, Handycraft dan Lukis, Jamur dan Anggrek, Bengkel Otomotif, hingga bersantai diskusi di New Pojok Kuliner.Lapas Kelas I Malang adalah salah satu pilot project Lapas Industri dan Zona Integrasi WBK/WBBM Unit Pelaksana Teknis (UPT) Pemasyarakatan di seluruh Indonesia. </p><p><br></p><p>Studi Tiru Lapas Narkotika Kelas II A Sungguminasa ini sebagai upaya saling berbagai pengalaman pembangunan integritas menuju WBK/WBBM.Heri Azhari berharap dengan Kunjungan Studi Tiru ini bisa sebagai upaya saling berbagi pengalaman pembangunan Zona Integritas menuju WBK/WBBM di masing-masing Lembaga. Sehingga memberikan pelayanan terbaik, baik untuk warga binaan maupun masyarakat.</p><p><br></p><p>L\'SIMA PASTI APIK ! (HUMAS LAPAS KELAS I MALANG)</p>', '2023-03-02', 0, '2023-03-02 01:20:23', '2023-03-02 01:20:23', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
