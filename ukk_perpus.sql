-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 05, 2024 at 12:09 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ukk_perpus`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `id_buku` int(11) NOT NULL,
  `id_kategori` int(11) DEFAULT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `cover` varchar(255) NOT NULL,
  `penulis` varchar(255) DEFAULT NULL,
  `penerbit` varchar(255) DEFAULT NULL,
  `tahun_terbit` varchar(255) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `rating` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id_buku`, `id_kategori`, `judul`, `cover`, `penulis`, `penerbit`, `tahun_terbit`, `deskripsi`, `rating`) VALUES
(1, 6, 'Dikta & Hukum', '967675.jpeg', 'DHIA`AN FARAH', 'ASOKA AKSARA X LOVEABLE', '2021', 'Dikta merupakan tokoh idaman semua wanita karena penggambarannya yang sempurna. Ia kaya, rajin, pintar, baik, penyayang dan tentunya berparas tampan. Di sisi lain terdapat tokoh bernama Nadhira yang merupakan anak SMA kelas 12 dengan karakter berbanding terbalik dengan Dikta, pemalas dan mageran. Nadhira dikenal sebagai orang yang banyak mau, keras kepala dan suka mengeluh. Berbeda dengan image Dikta yang dikenal sebagai sosok yang serius dan disiplin.\r\n\r\nSiapa sangka jika Dikta dijodohkan dengan gadis SMA bernama Nadhira itu dengan sifat dan watak mereka yang amat sangat berbanding terbalik bagai langit dan bumi. Demi menjaga perasaan kedua orang tuanya, mereka terpaksa harus terjebak dalam hubungan yang semakin rumit ini.\r\n\r\nSeiring berjalannya waktu, Nadhira mulai menaruh rasa suka pada Dikta dan benar saja kali ini Nadhira benar-benar jatuh cinta pada sosok yang sejak dulu hanya dianggapnya sebagai kakak. Meskipun begitu kisah percintaan mereka yang rumit akan dibahas dan rahasia-rahasia Dikta yang selama ini dipendam akan mulai terungkap.\r\n\r\n“Ini cerita sederhana yang efeknya luar biasa. Engga cuma bikin halu, tapi bikin pintar juga.”\r\n\r\nUUDN = Undang-undang Dikta Nadhira\r\n•Pasal satu, Dasar hukum perjodohan yang mengikat kedua belah pihak (Nadhira dan Dikta).\r\n•Pasal dua, memuat tentang bagaimana Keduanya tanpa sadar saling menghindar agar tak jatuh hati.\r\n•Pasal tiga, Menjelaskan kedua belah pihak terhukum dengan jatuh hati yang tak bisa mereka hindari lagi.\r\n•Pasal empat, ketentuan umum keduanya sebagai kekasih yang saling mengasihi.\r\n•Pasal lima, Kewenangan absolut Semesta menentukan akhir dari cerita yang mereka yakini akan abadi.', NULL),
(2, 8, 'Dilan 1990', '653941.jpeg', 'Pidi Baiq', 'Pastel Books (Mizan Group).', '2014', 'bercerita tentang kisah cinta dua remaja Bandung pada tahun 90an. Berawal dari seorang siswa bernama Dilan yang jatuh cinta dengan siswi pindahan dari SMA di Jakarta bernama Milea. Dilan memiliki beragam cara untuk mendekati dan mencuri perhatian Milea.', NULL),
(5, 9, 'jujutsu kaisen Vol1', '479086.jpeg', 'Gege Utakami', 'Gramedia', '2021', 'Jujutsu Kaisen adalah sebuah seri manga shōnen asal Jepang yang ditulis dan diilustrasikan oleh Gege Akutami. Manga ini dimuat berseri dalam majalah Weekly Shōnen Jump terbitan Shueisha sejak Maret 2018, dan telah diterbitkan menjadi dua puluh volume tankōbon per Agustus 2022.\r\n\r\nYūji Itadori adalah seorang siswa SMA dengan atletisitas yang tidak wajar yang tinggal di Sendai bersama kakeknya. Ia sering menghindari Klub Lari karena keengganannya pada bidang atletik, meskipun dia memiliki bakat bawaan untuk olahraga tersebut. Sebaliknya, dia memilih untuk bergabung dengan Klub Penelitian Ilmu Gaib, agar dirinya dapat bersantai dan bergaul dengan para seniornya. Setiap hari, Yūji meninggalkan sekolah pada pukul 17.00 untuk mengunjungi kakeknya di rumah sakit. Ketika dia mengunjunginya, kakeknya memberikan dua pesan kuat kepada Yūji, yaitu \"selalu membantu orang\" dan \"mati dikelilingi orang\". Setelah kematian kakeknya, Yūji menafsirkan pesan-pesan tersebut sebagai satu pernyataan—bahwa setiap orang berhak mendapatkan \"kematian yang layak\".                         ', NULL),
(6, 9, 'avatar the last airbender', '300492.jpeg', 'F.C. Yee dan Michael Dante Dimartino ', 'Dark Horse Comics.', '2005 ', 'Avatar: The Legend of Aang (dikenal sebagai Avatar: The Last Airbender di Amerika Serikat dan beberapa negara) adalah sebuah serial animasi televisi Amerika yang ditayangkan oleh jaringan televisi Nickelodeon. Mengambil tempat di dalam dunia seni beladiri dan sihir unsur-unsur alam dengan pengaruh Asia, ceritanya mengikuti petualangan demi petualangan dari penerus gelar Avatar bernama Aang dan teman-temannya dalam perjalanan mereka menyelamatkan dunia dari Negara Api yang keji. Serial ini dituliskan dalam bentuk serial buku, dengan setiap episodenya dianggap sebagai sebuah \"bab\" (chapter) dan setiap musimnya disebut sebagai \"buku\" (book).', NULL),
(7, 9, 'Chainsaw Man Vol 1', '372339.jpeg', 'Tatsuki Fujimoto', 'm&c!', '2023', 'Denji, pemuda super miskin yang dikejar banyak utang, bekerja sebagai pemburu iblis bersama iblis bernama Pochita. Hari-harinya sebagai manusia kasta terbawah berubah total setelah sebuah pengkhianatan brutal. Meski Denji menyimpan iblis dalam tubunya setelah insiden tersebut, dia tetap harus memburu iblis agar bisa bertahan hidup!?', NULL),
(8, 8, 'Ancika: Dia Yang Bersamaku Tahun 1995', '979538.jpeg', 'Pidi Baiq', 'Pastel Books', '2021', 'Ancika: Dia Yang Bersamaku Tahun 1995 menceritakan tentang persahabatan antara Dilan dan Ancika Mehrunisa Rabu. Hubungan mereka yang semakin dekat membuat benih-benih cinta tumbuh dan hubungan mereka pun naik tingkat menjadi hubungan sepasang kekasih. Ancika merupakan gadis cantik yang memiliki sifat tegas, rajin, dan memiliki pendirian yang kuat. Novel ini menceritakan kelanjutan hidup Dilan setelah putus dengan Milea dan bertemu dengan orang-orang baru yang membuat Dilan menjadi lebih dewasa dari sebelumnya. Novel ini mengajarkan bahwa hubungan antara manusia yang sehat adalah tidak ada satu pihak yang mendominasi, mereka tumbuh bersama dan saling menghargai keputusan masing-masing.', NULL),
(10, 9, 'Detektif Conan vol100', '548418.jpeg', 'Aoyama Gosho', 'Elex Media Komputindo', '2022', '                Detektif Conan yang juga dikenal sebagai Case Closed dan Detective Conan, adalah seri manga detektif Jepang yang ditulis dan diilustrasikan oleh Gosho Aoyama. Serial ini diserialisasikan dalam majalah manga shōnen Weekly Shōnen Sunday yang diterbitkan oleh Shogakukan sejak Januari 1994, dengan bab-babnya dikumpulkan dalam beberapa volume tankōbon. Karena masalah hukum dengan nama Detective Conan, rilisan bahasa Inggris dari Funimation dan Viz diubah namanya menjadi Case Closed. Serial ini bercerita mengenai detektif SMA bernama Shinichi Kudo (atau Jimmy Kudo dalam beberapa terjemahan bahasa Inggris) yang tubuhnya menyusut menjadi kecil ketika menyelidiki sebuah organisasi misterius dan umumnya memecahkan banyak kasus dengan meniru suara dari ayah teman masa kecilnya dan berbagai karakter lain.              ', NULL),
(13, 12, 'Doraemon', '941920.jpeg', 'Fujiko F. Fujio', 'Gramedia', '2005', 'Doraemon lalala', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `kategori` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `kategori`) VALUES
(6, 'romantis'),
(8, 'novel'),
(9, 'komik'),
(10, 'horor'),
(12, 'jepang');

-- --------------------------------------------------------

--
-- Table structure for table `koleksi`
--

CREATE TABLE `koleksi` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_buku` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `koleksi`
--

INSERT INTO `koleksi` (`id`, `id_user`, `id_buku`) VALUES
(3, 9, 2),
(4, 20, 5),
(6, 32, 2),
(7, 53, 7),
(8, 59, 2);

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman`
--

CREATE TABLE `peminjaman` (
  `id_peminjaman` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `id_buku` int(11) DEFAULT NULL,
  `tanggal_peminjaman` varchar(255) DEFAULT NULL,
  `tanggal_pengembalian` varchar(255) DEFAULT NULL,
  `status_peminjaman` enum('dipinjam','dikembalikan') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `peminjaman`
--

INSERT INTO `peminjaman` (`id_peminjaman`, `id_user`, `id_buku`, `tanggal_peminjaman`, `tanggal_pengembalian`, `status_peminjaman`) VALUES
(1, 9, 1, '2024-03-09', '2024-03-09', 'dikembalikan'),
(2, 20, 1, '2019-02-13', '2019-02-13', 'dipinjam'),
(3, 20, 2, '2024-03-01', '2024-03-03', 'dikembalikan'),
(4, 31, 5, '2024-03-08', '2024-03-15', 'dipinjam'),
(5, 31, 2, '2024-03-01', '2024-03-08', 'dikembalikan'),
(6, 32, 5, '2020-02-20', '2020-02-21', 'dipinjam'),
(7, 32, 2, '2020-02-20', '2020-02-22', 'dipinjam'),
(8, 53, 2, '2024-03-07', '2024-03-09', 'dipinjam'),
(9, 59, 8, '2020-02-21', '2020-02-21', 'dikembalikan'),
(10, 59, 1, '2024-03-06', '2024-03-07', 'dikembalikan'),
(11, 59, 8, '2020-02-20', '2020-02-19', 'dikembalikan'),
(14, 59, 1, '2222-02-22', '2222-02-23', 'dipinjam'),
(16, 60, 2, '2024-03-05', '2024-03-07', 'dikembalikan'),
(17, 60, 7, '2222-02-21', '2222-02-21', 'dikembalikan');

-- --------------------------------------------------------

--
-- Table structure for table `ulasan`
--

CREATE TABLE `ulasan` (
  `id_ulasan` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `id_buku` int(11) DEFAULT NULL,
  `ulasan` text DEFAULT NULL,
  `rating` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ulasan`
--

INSERT INTO `ulasan` (`id_ulasan`, `id_user`, `id_buku`, `ulasan`, `rating`) VALUES
(4, 31, 5, 'biasa aja', 1),
(5, 32, 2, 'Seru BANGEEETTTT\r\n', 5),
(6, 31, 2, 'Seru banget', 4),
(7, 31, 5, 'sangat menyenangkan', 3),
(8, 31, 1, 'sangat romantis', 5),
(10, 53, 2, 'ayam', 2),
(11, 53, 2, 'keren', 2),
(13, 59, 1, 'jelek', 1),
(14, 60, 2, 'aaa', 1),
(15, 60, 8, 'q', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `no_telepon` varchar(255) DEFAULT NULL,
  `level` enum('admin','petugas','peminjam') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `username`, `password`, `email`, `alamat`, `no_telepon`, `level`) VALUES
(9, 'Apis', 'apis', 'apis', 'Raharja@gmail.com', 'medan area', '1234567890', 'peminjam'),
(11, 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin@gmail.com', 'medan', '1234567890', 'admin'),
(19, 'petugas', 'petugas', 'afb91ef692fd08c445e8cb1bab2ccf9c', 'petugas@gmail.com', 'medan', '1234567890', 'petugas'),
(20, 'hafizhraharjaa', 'hafizhraharjaa', '77c3a161ddb7988a146a68943ed42015', 'hafizh.raharja@gmail.com', 'medan denai', '08123456789', 'peminjam'),
(31, 'asep wulan asri kirana purnamasari', 'asep', 'dc855efb0dc7476760afaa1b281665f1', 'asepkirana3@gmail.com', 'medan denai', '08123456789', 'peminjam'),
(32, 'adit', 'radit', '79a91412ad3792662aaa310214572592', 'ra', 'medan selayang', '08888', 'peminjam'),
(53, 'apis3', 'apis3', '7110271cf693ebd7b703b9ed89870fee', 'hafizh.raharja@gmail.com', 'jalan gajah mada', '323', 'peminjam'),
(58, 'petugasyas', 'petugas2', 'ac5604a8b8504d4ff5b842480df02e91', 'petugas2@gmail.com', 'medan selayang', '08123456789', 'petugas'),
(59, 'Bu Rici', 'Rici', '6b511297afc4b59bdab46dea89aa060e', 'rici@gmail.com', 'Medan Selayang', '09123123123', 'peminjam'),
(60, 'asrul', 'asrul', '5111e795f8818c69fa4eb1889ecd7af7', 'asrul@gmail.com', 'Medan Selayang', '08123123123', 'peminjam'),
(61, 'q', 'q', '0cc175b9c0f1b6a831c399e269772661', 'q', 'a', '22', 'peminjam');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id_buku`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `koleksi`
--
ALTER TABLE `koleksi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_buku` (`id_buku`);

--
-- Indexes for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`id_peminjaman`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_buku` (`id_buku`);

--
-- Indexes for table `ulasan`
--
ALTER TABLE `ulasan`
  ADD PRIMARY KEY (`id_ulasan`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_buku` (`id_buku`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `id_buku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `koleksi`
--
ALTER TABLE `koleksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `id_peminjaman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `ulasan`
--
ALTER TABLE `ulasan`
  MODIFY `id_ulasan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `buku`
--
ALTER TABLE `buku`
  ADD CONSTRAINT `buku_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`);

--
-- Constraints for table `koleksi`
--
ALTER TABLE `koleksi`
  ADD CONSTRAINT `koleksi_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`),
  ADD CONSTRAINT `koleksi_ibfk_2` FOREIGN KEY (`id_buku`) REFERENCES `buku` (`id_buku`);

--
-- Constraints for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD CONSTRAINT `peminjaman_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`),
  ADD CONSTRAINT `peminjaman_ibfk_2` FOREIGN KEY (`id_buku`) REFERENCES `buku` (`id_buku`);

--
-- Constraints for table `ulasan`
--
ALTER TABLE `ulasan`
  ADD CONSTRAINT `ulasan_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`),
  ADD CONSTRAINT `ulasan_ibfk_2` FOREIGN KEY (`id_buku`) REFERENCES `buku` (`id_buku`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
