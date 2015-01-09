-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 20, 2014 at 01:53 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `jagadhita`
--

-- --------------------------------------------------------

--
-- Table structure for table `gsjadmin`
--

CREATE TABLE IF NOT EXISTS `gsjadmin` (
  `id_admin` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(40) NOT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `gsjadmin`
--

INSERT INTO `gsjadmin` (`id_admin`, `nama`, `email`, `username`, `password`) VALUES
(1, 'septi rahayu', 'sepraha@gmail.com', 'sepraha', '6eab8cc69c47293febd15ee23774be60');

-- --------------------------------------------------------

--
-- Table structure for table `gsjalbum`
--

CREATE TABLE IF NOT EXISTS `gsjalbum` (
  `id_album` int(11) NOT NULL AUTO_INCREMENT,
  `nama_album` varchar(200) NOT NULL,
  `keterangan` text NOT NULL,
  `uploader` int(11) NOT NULL,
  PRIMARY KEY (`id_album`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `gsjalbum`
--

INSERT INTO `gsjalbum` (`id_album`, `nama_album`, `keterangan`, `uploader`) VALUES
(1, 'Lomba', '', 1),
(2, 'Wide Game Pembangunan', ':D', 1);

-- --------------------------------------------------------

--
-- Table structure for table `gsjanggota`
--

CREATE TABLE IF NOT EXISTS `gsjanggota` (
  `id_anggota` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(200) NOT NULL,
  `password` varchar(42) NOT NULL,
  `nama_lengkap` varchar(200) NOT NULL,
  `angkatan` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `telepon` varchar(30) NOT NULL,
  `alamat` longtext NOT NULL,
  `foto` text NOT NULL,
  PRIMARY KEY (`id_anggota`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `gsjanggota`
--

INSERT INTO `gsjanggota` (`id_anggota`, `username`, `password`, `nama_lengkap`, `angkatan`, `email`, `telepon`, `alamat`, `foto`) VALUES
(1, 'sepraha', '59cdf0de3e66622d723c1b0279c07e08', 'Sepraha', 20, 'sepraha@gmail.com', '082130502026', 'Jl. Tirta Indah Raya', 'Topi_Eiger_T499.jpg'),
(2, '', '', 'adad', 1, 'sepraha@gmail.com', '4535', '<p>erwer</p>', 'boat3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `gsjdetforum`
--

CREATE TABLE IF NOT EXISTS `gsjdetforum` (
  `id_det` int(11) NOT NULL AUTO_INCREMENT,
  `id_forum` int(11) NOT NULL,
  `creator` int(11) NOT NULL,
  `isi` text NOT NULL,
  `postdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_det`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `gsjdetforum`
--


-- --------------------------------------------------------

--
-- Table structure for table `gsjforum`
--

CREATE TABLE IF NOT EXISTS `gsjforum` (
  `id_forum` int(11) NOT NULL AUTO_INCREMENT,
  `creator` int(11) NOT NULL,
  `topik` varchar(255) NOT NULL,
  `mine` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `postdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_forum`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `gsjforum`
--

INSERT INTO `gsjforum` (`id_forum`, `creator`, `topik`, `mine`, `status`, `postdate`) VALUES
(1, 1, 'PC2A', 'testeste', 1, '2014-08-30 21:24:50');

-- --------------------------------------------------------

--
-- Table structure for table `gsjfoto`
--

CREATE TABLE IF NOT EXISTS `gsjfoto` (
  `id_foto` int(11) NOT NULL AUTO_INCREMENT,
  `id_album` int(11) NOT NULL,
  `foto` text NOT NULL,
  `uploader` int(11) NOT NULL,
  PRIMARY KEY (`id_foto`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `gsjfoto`
--

INSERT INTO `gsjfoto` (`id_foto`, `id_album`, `foto`, `uploader`) VALUES
(1, 1, 'polo2.jpg', 1),
(2, 1, 'Topi_Eiger_T499.jpg', 1),
(3, 1, 'zara.jpg', 1),
(4, 2, 'Koala.jpg', 1),
(5, 2, 'Penguins.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `gsjkegiatan`
--

CREATE TABLE IF NOT EXISTS `gsjkegiatan` (
  `id_kegiatan` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kegiatan` varchar(150) NOT NULL,
  `waktu` varchar(200) NOT NULL,
  `deskripsi` longtext NOT NULL,
  `poster` int(11) NOT NULL,
  `tgl_post` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_kegiatan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `gsjkegiatan`
--

INSERT INTO `gsjkegiatan` (`id_kegiatan`, `nama_kegiatan`, `waktu`, `deskripsi`, `poster`, `tgl_post`) VALUES
(1, 'Jambore Nasional', '13 Desember 2013', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', 1, '2013-11-20 15:58:37'),
(2, 'Wide Game Pembangunan 9', '12 Desember 2015', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', 1, '2013-11-20 11:45:57');

-- --------------------------------------------------------

--
-- Table structure for table `gsjkomenkegiatan`
--

CREATE TABLE IF NOT EXISTS `gsjkomenkegiatan` (
  `id_komen` int(11) NOT NULL AUTO_INCREMENT,
  `id_kegiatan` int(11) NOT NULL,
  `sender` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `komentar` longtext NOT NULL,
  `tgl_post` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_komen`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `gsjkomenkegiatan`
--

INSERT INTO `gsjkomenkegiatan` (`id_komen`, `id_kegiatan`, `sender`, `email`, `komentar`, `tgl_post`) VALUES
(1, 3, 'Sepraha', 'sepraha@gmail.com', 'cek komentar', '2013-11-21 15:51:36'),
(2, 3, 'Dewa Anggara', 'dewa@gmail.com', 'lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum\r\nlorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum', '2013-11-21 16:38:05'),
(3, 3, 'Evelin', 'evelin@yahoo.com', 'cobaaan komentar', '2013-11-21 16:39:27'),
(4, 3, 'Jonas', 'jojo@gmail.com', 'cok coba coba komentar', '2013-11-21 16:41:16'),
(5, 3, 'Resya', 'resya@yahoo.com', 'cob coba komentar sob', '2013-11-21 16:42:04'),
(6, 3, 'Redrick', 'redic@yahoo.com', 'redic coba masukin komentar', '2013-11-21 16:43:14'),
(7, 2, 'Rocky', 'rocky@rocketmail.com', 'gimana nih kapan dibuka pendaftarannya info nya ditunggu ka', '2013-11-25 14:24:58');

-- --------------------------------------------------------

--
-- Table structure for table `gsjmateri`
--

CREATE TABLE IF NOT EXISTS `gsjmateri` (
  `id_materi` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(250) NOT NULL,
  `isi` longtext NOT NULL,
  `poster` int(11) NOT NULL,
  `tgl_post` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_materi`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `gsjmateri`
--

INSERT INTO `gsjmateri` (`id_materi`, `judul`, `isi`, `poster`, `tgl_post`) VALUES
(1, 'Sandi Morse', '<p><strong>Morse dapat dapat dilakukan dengan :</strong><br /><br /><strong> Suara / Bunyi : missal dengan peluit, terompet dsb</strong><br /><strong> Sinar / Nyala : missal dengan senter, lampu, api dsb</strong><br /><strong> Gerak : missal bendera, asap, lambaian tangan dsb</strong><br /><strong> Tulisan : missal dengan sandi, kode dsb</strong><br /><strong> Denyut Listrik : missal pada kabel telegraph</strong></p>\r\n<p>&nbsp;<!-- pagebreak --></p>\r\n<p>Huruf Morse<br /> Untuk mempermudah menghafalkan, penulis menyusunnya dalam kelompok-kelompok <br />tertentu. <br />Huruf yang terdiri dari titik (.) saja, yaitu : <br />E = . I = .. S = &hellip; H = &hellip;. <br /> <br />Huruf yang terdiri dari garis (- ) saja, yaitu : <br />T = - M = -- O = --- KH = ---- <br /> <br />Huruf yang berlawanan, terdiri atas : <br />A = .- berlawanan dengan N = -. <br />U = ..- berlawanan dengan D = -.. <br />V = &hellip;- berlawanan dengan B = -&hellip; <br />W=.-- berlawanan dengan G = --. <br />P = .--. berlawanan dengan X = -..- <br />R = .-. berlawanan dengan K = -.- <br /> <br />Huruf yang berbalikkan, terdiri dari : <br />Y = -.-- dengan Q = --.- <br />L = .-.. dengan F = ..-. <br /> <br />Huruf yang tidak ada lawannya, adalah : <br />J = .--- C = -.-. Z = --..</p>', 1, '2014-03-27 21:30:56'),
(4, 'Teknik Mencari Air', '<p class="MsoNormal" style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 18px; color: #333333;"><span style="font-size: 10pt;">Bagi seorang pengembara, seperti Pramuka yang sedang melakukan kegiatan pengembaraan, jika persediaan air yang dibawa mulai menipis atau bahkan habis, maka ia harus menjaga agar tubuh tidak mengeluarkan cairan yang berlebihan.</span></p>\r\n\r\n<p class="MsoNormal" style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 18px; color: #333333;"><span style="font-size: 10pt;">Caranya adalah sbb :</span></p>\r\n<p class="MsoNormal" style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 18px; color: #333333; margin-left: 36pt; text-indent: -18pt;"><span style="font-size: 10pt;">1)<span style="font-family: ''Times New Roman''; font-size: 7pt; line-height: normal;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span><span style="font-size: 10pt;">Bernafas melalui hidung secara teratur.</span></p>\r\n<p class="MsoNormal" style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 18px; color: #333333; margin-left: 36pt; text-indent: -18pt;"><span style="font-size: 10pt;">2)<span style="font-family: ''Times New Roman''; font-size: 7pt; line-height: normal;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span><span style="font-size: 10pt;">Mengurangi berbicara.</span></p>\r\n<p class="MsoNormal" style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 18px; color: #333333; margin-left: 36pt; text-indent: -18pt;"><span style="font-size: 10pt;">3)<span style="font-family: ''Times New Roman''; font-size: 7pt; line-height: normal;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span><span style="font-size: 10pt;">Mengurangi gerak yang berlebihan</span></p>\r\n<p class="MsoNormal" style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 18px; color: #333333; margin-left: 36pt; text-indent: -18pt;"><span style="font-size: 10pt;">4)<span style="font-family: ''Times New Roman''; font-size: 7pt; line-height: normal;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span><span style="font-size: 10pt;">Banyak istirahat</span></p>\r\n<p>&nbsp;<!-- pagebreak --></p>\r\n<p class="MsoNormal" style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 18px; color: #333333; margin-left: 36pt; text-indent: -18pt;"><span style="font-size: 10pt;">5)<span style="font-family: ''Times New Roman''; font-size: 7pt; line-height: normal;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span><span style="font-size: 10pt;">Tidak merokok dan minum minuman berakohol</span></p>\r\n<p class="MsoNormal" style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 18px; color: #333333; margin-left: 36pt; text-indent: -18pt;"><span style="font-size: 10pt;">6)<span style="font-family: ''Times New Roman''; font-size: 7pt; line-height: normal;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span><span style="font-size: 10pt;">Berteduh di tempat yang rindang</span></p>\r\n<p class="MsoNormal" style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 18px; color: #333333; margin-left: 36pt; text-indent: -18pt;"><span style="font-size: 10pt;">7)<span style="font-family: ''Times New Roman''; font-size: 7pt; line-height: normal;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span><span style="font-size: 10pt;">Tidak makan makanan kering ataupun berlendir</span></p>\r\n<p class="MsoNormal" style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 18px; color: #333333;"><span style="font-size: 10pt;">Air yang langsung dapat diminum :</span></p>\r\n<p class="MsoNormal" style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 18px; color: #333333; margin-left: 36pt; text-indent: -18pt;"><span style="font-size: 10pt;">1)<span style="font-family: ''Times New Roman''; font-size: 7pt; line-height: normal;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span><span style="font-size: 10pt;">Tampungan air hujan.</span></p>\r\n<p class="MsoNormal" style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 18px; color: #333333; margin-left: 36pt; text-indent: -18pt;"><span style="font-size: 10pt;">2)<span style="font-family: ''Times New Roman''; font-size: 7pt; line-height: normal;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span><span style="font-size: 10pt;">Air dari dalam tanaman.</span></p>\r\n<p class="MsoNormal" style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 18px; color: #333333;"><span style="font-size: 10pt;">Air yang harus dimurnikan terlebih dahulu :</span></p>\r\n<p class="MsoNormal" style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 18px; color: #333333; margin-left: 36pt; text-indent: -18pt;"><span style="font-size: 10pt;">1)<span style="font-family: ''Times New Roman''; font-size: 7pt; line-height: normal;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span><span style="font-size: 10pt;">Air yang tergenang</span></p>\r\n<p class="MsoNormal" style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 18px; color: #333333; margin-left: 36pt; text-indent: -18pt;"><span style="font-size: 10pt;">2)<span style="font-family: ''Times New Roman''; font-size: 7pt; line-height: normal;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span><span style="font-size: 10pt;">Air dari sungai</span></p>\r\n<p class="MsoNormal" style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 18px; color: #333333; margin-left: 36pt; text-indent: -18pt;"><span style="font-size: 10pt;">3)<span style="font-family: ''Times New Roman''; font-size: 7pt; line-height: normal;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span><span style="font-size: 10pt;">Air dari menggali tanah atau pasir</span></p>\r\n<p class="MsoNormal" style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 18px; color: #333333;"><span style="font-size: 10pt;">Beberapa cara untuk mendapatkan air :</span></p>\r\n<p class="MsoNormal" style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 18px; color: #333333; margin-left: 36pt; text-indent: -18pt;"><span style="font-size: 10pt;">1.<span style="font-family: ''Times New Roman''; font-size: 7pt; line-height: normal;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span><span style="font-size: 10pt;">Dari tanaman atau pohon seperti pisang, rotan, bambu muda, kantung semar, enau, nipah, umbi-umbian, akar-akaran, pakis, kaktus, kelapa.</span></p>\r\n<p class="MsoNormal" style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 18px; color: #333333; margin-left: 36pt; text-indent: -18pt;"><span style="font-size: 10pt;">2.<span style="font-family: ''Times New Roman''; font-size: 7pt; line-height: normal;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span><span style="font-size: 10pt;">Mengumpulkan embun pagi dengan menggunakan saputangan bersih.</span></p>\r\n<p class="MsoNormal" style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 18px; color: #333333; margin-left: 36pt;"><span style="font-size: 10pt;">Caranya, resapkan pada tumbuhan yang berembun lalu peras ke dalam tempat minum.</span></p>\r\n<p class="MsoNormal" style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 18px; color: #333333; margin-left: 36pt; text-indent: -18pt;"><span style="font-size: 10pt;">3.<span style="font-family: ''Times New Roman''; font-size: 7pt; line-height: normal;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span><span style="font-size: 10pt;">Tanah batu</span></p>\r\n<p class="MsoNormal" style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 18px; color: #333333; margin-left: 54pt; text-indent: -12.6pt;"><span style="font-family: Wingdings; font-size: 10pt;"><span style="font-family: Arial, Helvetica, sans-serif;">&sect;<span style="font-family: ''Times New Roman''; font-size: 7pt; line-height: normal;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span></span><span style="font-size: 10pt;">Tanah kapur lebih banyak mata airnya, sebab kapur mudah dilarutkan sehingga terbentuk saluran air.</span></p>\r\n<p class="MsoNormal" style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 18px; color: #333333; margin-left: 54pt; text-indent: -12.6pt;"><span style="font-family: Wingdings; font-size: 10pt;"><span style="font-family: Arial, Helvetica, sans-serif;">&sect;<span style="font-family: ''Times New Roman''; font-size: 7pt; line-height: normal;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span></span><span style="font-size: 10pt;">Sepanjang dinding lembah yang memotong lapisan berpori.</span></p>\r\n<p class="MsoNormal" style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 18px; color: #333333; margin-left: 54pt; text-indent: -12.6pt;"><span style="font-family: Wingdings; font-size: 10pt;"><span style="font-family: Arial, Helvetica, sans-serif;">&sect;<span style="font-family: ''Times New Roman''; font-size: 7pt; line-height: normal;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span></span><span style="font-size: 10pt;">Pada daerah berbatu granit. Carilah bukit berumput hijau, kemudian galilah.</span></p>\r\n<p class="MsoNormal" style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 18px; color: #333333; margin-left: 36pt; text-indent: -18pt;"><span style="font-size: 10pt;">4.<span style="font-family: ''Times New Roman''; font-size: 7pt; line-height: normal;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span><span style="font-size: 10pt;">Tanah gembur, di tanah gembur air mudah di dapat. Carilah daerah lembah, karena permukaan air dekat dengan permukaan tanah.</span></p>\r\n<p class="MsoNormal" style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 18px; color: #333333; margin-left: 36pt; text-indent: -18pt;"><span style="font-size: 10pt;">5.<span style="font-family: ''Times New Roman''; font-size: 7pt; line-height: normal;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span><span style="font-size: 10pt;">Kondensasi Tanah-Pohon atau Penyulingan Air.</span></p>\r\n<p class="MsoNormal" style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 18px; color: #333333; margin-left: 36pt;"><span style="font-size: 10pt;">Kondensasi yaitu dengan adanya perbedaan suhu antara tanah dengan pohon, kita dapat memperoleh air murni yang merupakan hasil proses kondensasi, diperlukan alat yang sangat sederhana, yaitu plastic dan tali pengikat.</span></p>\r\n<p class="MsoNormal" style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 18px; color: #333333; margin-left: 36pt;"><span style="font-size: 10pt;">&nbsp;</span></p>\r\n<p class="MsoNormal" style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 18px; color: #333333;"><span style="color: #ff6600;"><strong><span style="font-size: 10pt;">Cara Penyulingan</span></strong></span><span style="font-size: 10pt;"><span style="color: #ff6600;">&nbsp;:</span></span></p>\r\n<ol style="font-family: Arial, Helvetica, sans-serif; color: #333333; font-size: 12px; line-height: 18px; margin-top: 0cm;">\r\n<li class="MsoNormal" style="padding-left: 5px; padding-top: 0px; list-style-position: inside;"><span style="font-size: 10pt;">Carilah pohon yang sehat dan bersih, lalu carilah dahan ranting yang mudah dicapai dan masukkan plastic (jangan bocor) kemudian ikat dengan tali atau benda apa saj. Keadaan tersebut akan menyebabkan terjadinya proses penguapan air minum.</span></li>\r\n<li class="MsoNormal" style="padding-left: 5px; padding-top: 0px; list-style-position: inside;"><span style="font-size: 10pt;">Carilah pohon yang bersih dan timbuhnya di atas tanah yang tidak berbau. Galilah tanah sehingga membentuk cekungan, tapi jangan terlalu dalam dari tempat pohon tumbuh. Masukkan plastic dan atur sedemikian rupa agar air terapung dengan baik. Lalu ikat ujungnya (hingga menutupi seluruh tanaman) dan gantung pada batang kayu yang disangga dengan baik. Cara ini akan menyebabkan terjadinya penguapan yang menghasilkan air.</span></li>\r\n</ol>', 1, '2013-12-03 14:24:15'),
(5, 'Mengenali Tanda Alam', '<p class="MsoNormal" style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 18px; color: #333333; text-align: center;" align="center"><span style="font-family: Arial; font-size: 10pt;">Pramuka adalah juga pecinta alam lalu saking cintanya maka<span style="font-family: Arial, Helvetica, sans-serif;">&nbsp;&nbsp;</span>harus mengenal tentang alam dan tanda-tandanya.&nbsp;</span><span style="font-family: Arial; font-size: 10pt; line-height: 19px;">Berikut pengenalan alam sekitar kita yang sering kita temui saat berkemah :&nbsp;</span></p>\r\n<ol style="font-family: Arial, Helvetica, sans-serif; color: #333333; font-size: 12px; line-height: 18px; margin-top: 0cm;">\r\n<li class="MsoNormal" style="padding-left: 5px; padding-top: 0px; list-style-position: inside;"><span style="font-family: Arial; font-size: 10pt;"><span style="font-family: Arial, Helvetica, sans-serif; color: #ff6600;">Kabut</span></span></li>\r\n</ol>\r\n<p class="MsoNormal" style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 18px; color: #333333; margin-left: 36pt;"><span style="font-family: Arial; font-size: 10pt;">Kabut tipis dan rata membumbung tinggi ke atas berarti kurangnya uap air di udara dan brtanda cuaca akan selalu baik.Cuaca terang benderang pada pagi hari bertanda buruk pada hari itu, apabila kemarin ada hujan.Langit yang ditutupi awan kemudian meulai terang pada pagi hari bertanda cuaca baik.Apabila ada kabut di atas lembah pada pagi hari bertanda cuaca baik, sedang di gunung akan turun hujan.</span></p>\r\n<p>&nbsp;<!-- pagebreak --></p>\r\n<p class="MsoNormal" style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 18px; color: #333333; margin-left: 36pt;"><span style="font-family: Arial; font-size: 10pt;"><span style="font-family: Arial, Helvetica, sans-serif; color: #ff6600;">2. Awan</span></span></p>\r\n<p class="MsoNormal" style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 18px; color: #333333; margin-left: 36pt;"><span style="font-family: Arial; font-size: 10pt;">Apabila langit diliputi awan yang tebal dan gelap berarti akan turun hujan yang deras.</span></p>\r\n<p class="MsoNormal" style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 18px; color: #333333; margin-left: 36pt;"><span style="font-family: Arial; font-size: 10pt;"><span style="font-family: Arial, Helvetica, sans-serif; color: #ff6600;">3. Matahari</span></span></p>\r\n<p class="MsoNormal" style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 18px; color: #333333; margin-left: 36pt;"><span style="font-family: Arial; font-size: 10pt;">Apabila matahari terbit berwarna merah dan diliputi garis-garis awan yang kehitaman bertanda ada hujan, apabila berwarna bersih dan terang dan bertanda hari baik. Matahari terbit dengan warna kemerah-merahan yang terang bertanda cuaca baik, apabila warna merah dicampuri garis kekuning-kuningan bertanda hujan lebat.</span></p>\r\n<p class="MsoNormal" style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 18px; color: #333333; margin-left: 36pt;"><span style="font-family: Arial; font-size: 10pt;">Apabila matahari terbenam dengan warna kekuning-kuningan/orange bertanda ada hujan, apabila dengan warna merah muda atau kekuning-kuningan bertanda baik, warna merah pada matahari terbenam berarti akan ada angin yang cukup kencang.</span></p>\r\n<p class="MsoNormal" style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 18px; color: #333333; margin-left: 36pt;"><span style="font-family: Arial; font-size: 10pt;"><span style="font-family: Arial, Helvetica, sans-serif; color: #ff6600;">4. Bintang</span></span></p>\r\n<p class="MsoNormal" style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 18px; color: #333333; margin-left: 36pt;"><span style="font-family: Arial; font-size: 10pt;">Apabila pada malam hari bintang di langit kelihatan terang sekali, maka pada malam itu cuaca akan baik, sedangkan bila nampak suram bertanda cuaca kurang baik/buruk.</span></p>\r\n<p class="MsoNormal" style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 18px; color: #333333; margin-left: 36pt;"><span style="font-family: Arial; font-size: 10pt;"><span style="font-family: Arial, Helvetica, sans-serif; color: #ff6600;">5. Bulan</span></span></p>\r\n<p class="MsoNormal" style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 18px; color: #333333; margin-left: 36pt;"><span style="font-family: Arial; font-size: 10pt;">Apabila terlihat terang dan bersinar berarti cuaca baik, tapi bila bulan diliputi awan yang gelap berarti hujan akan turun.</span></p>\r\n<p class="MsoNormal" style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 18px; color: #333333; margin-left: 36pt;"><span style="font-family: Arial; font-size: 10pt;">Apabila ada lingkaran putih (halo) yang melingkari bulan berarti tidak ada ketentuan cuaca pada hari itu.</span></p>\r\n<p class="MsoNormal" style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 18px; color: #333333; margin-left: 36pt;"><span style="font-family: Arial; font-size: 10pt;"><span style="font-family: Arial, Helvetica, sans-serif; color: #ff6600;">6. Binatang</span></span></p>\r\n<p class="MsoNormal" style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 18px; color: #333333; margin-left: 36pt;"><span style="font-family: Arial; font-size: 10pt;">Apabila kita perhatikan naluri binatang dengan seksama, yang ada hubungannya dengan cuaca maka, kita akan tercengang atas keganjilan-keganjilan yang dilakukannya dengan cara mereka, antara lain :</span></p>\r\n<p class="MsoNormal" style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 18px; color: #333333; margin-left: 36pt;"><span style="font-family: Arial; font-size: 10pt;">&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; 1. Laba-laba</span></p>\r\n<p class="MsoNormal" style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 18px; color: #333333; margin-left: 72pt;"><span style="font-family: Arial; font-size: 10pt;">Akan bersembunyi bila cuaca akan buruk, dan rajin mengerjakan sarangnya apabila cuaca baik.</span></p>\r\n<p class="MsoNormal" style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 18px; color: #333333; margin-left: 72pt;"><span style="font-family: Arial; font-size: 10pt;">2. Semut</span></p>\r\n<p class="MsoNormal" style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 18px; color: #333333; margin-left: 72pt;"><span style="font-family: Arial; font-size: 10pt;">Akan tetap di dalam lubangnya bila cuaca akan buruk, apabila mereka keluar dan berjalan mondar-mandir bertanda cuaca akan tetap baik.</span></p>\r\n<p class="MsoNormal" style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 18px; color: #333333; margin-left: 72pt;"><span style="font-family: Arial; font-size: 10pt;">3. Lebah</span></p>\r\n<p class="MsoNormal" style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 18px; color: #333333; margin-left: 72pt;"><span style="font-family: Arial; font-size: 10pt;">Dengan melihat sarangnya; pada cuaca baik, mereka berterbangan jauh dari sarangnya/peternakan.</span></p>\r\n<p class="MsoNormal" style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 18px; color: #333333; margin-left: 72pt;"><span style="font-family: Arial; font-size: 10pt;">4. Lalat</span></p>\r\n<p class="MsoNormal" style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 18px; color: #333333; margin-left: 72pt;"><span style="font-family: Arial; font-size: 10pt;">Apabila akan turun hujan mereka akan hinggap di tembok/dinding, sedangkan pada cuaca baik mereka akan berterbangan kian kemari.</span></p>\r\n<p class="MsoNormal" style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 18px; color: #333333; margin-left: 72pt;"><span style="font-family: Arial; font-size: 10pt;">5. Nyamuk</span></p>\r\n<p class="MsoNormal" style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 18px; color: #333333; margin-left: 72pt;"><span style="font-family: Arial; font-size: 10pt;">Apabila di pagi hari mereka mengganggu atau menggigit kita, maka berarti akan turun hujan.</span></p>\r\n<p class="MsoNormal" style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 18px; color: #333333; margin-left: 72pt;"><span style="font-family: Arial; font-size: 10pt;">Apabila pada matahari terbenam berterbangan kian kemari dan terbang berduyun-duyun bertanda cuaca baik.</span></p>\r\n<p class="MsoNormal" style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 18px; color: #333333; margin-left: 72pt;"><span style="font-family: Arial; font-size: 10pt;">Apabila selalu terbang di tempat yang gelap/ di dalam bayang/bayang bertanda cuaca akan buruk/datang hujan.</span></p>\r\n<p class="MsoNormal" style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 18px; color: #333333; margin-left: 72pt;"><span style="font-family: Arial; font-size: 10pt;">6. Cacing</span></p>\r\n<p class="MsoNormal" style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 18px; color: #333333; margin-left: 72pt;"><span style="font-family: Arial; font-size: 10pt;">Apabila pada malam hari mereka menimbun tanah berbutir-butir di kebun, berarti akan turun hujan.</span></p>\r\n<p class="MsoNormal" style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 18px; color: #333333; margin-left: 72pt;"><span style="font-family: Arial; font-size: 10pt;">7. Lintah</span></p>\r\n<p class="MsoNormal" style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 18px; color: #333333; margin-left: 72pt;"><span style="font-family: Arial; font-size: 10pt;">Kita dapat membuat barometer dari seekor lintah yang ditaruh dalam gelas berisi air, yaitu : Bila lintah melekat pada gelas di atas permukaan air, maka bertanda cuaca akan tetap membaik ; Apabila ia berdiam di dasar gelas bertanda cuaca buruk dalam waktu yang lama ; apabila akan datangtopan maka ia akan melekat erat-erat di gelas sedang ekornya digerak-gerakkan sekeras-kerasnya.</span></p>\r\n<p class="MsoNormal" style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 18px; color: #333333; margin-left: 72pt;"><span style="font-family: Arial; font-size: 10pt;">8.&nbsp;</span><span style="font-family: Arial; font-size: 10pt;">Siput</span></p>\r\n<p class="MsoNormal" style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 18px; color: #333333; margin-left: 72pt;"><span style="font-family: Arial; font-size: 10pt;">Pada cuaca yang baik akan merayap dengan tenang, sedang pada cuaca buruk akan merayap dengan cepat.</span></p>\r\n<p class="MsoNormal" style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 18px; color: #333333; margin-left: 72pt;"><span style="font-family: Arial; font-size: 10pt;">9. Ikan</span></p>\r\n<p class="MsoNormal" style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 18px; color: #333333; margin-left: 72pt;"><span style="font-family: Arial; font-size: 10pt;">Akan melompat-lompat di atas air bila cuaca akan buruk.</span></p>\r\n<p class="MsoNormal" style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 18px; color: #333333; margin-left: 72pt;"><span style="font-family: Arial; font-size: 10pt;">9. Katak</span></p>\r\n<p class="MsoNormal" style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 18px; color: #333333; margin-left: 72pt;"><span style="font-family: Arial; font-size: 10pt;">Pada cuaca buruk akan berdiam dalam air dan pada cuaca baik mereka akan duduk di tepi kolam.</span></p>\r\n<p class="MsoNormal" style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 18px; color: #333333; margin-left: 72pt;"><span style="font-family: Arial; font-size: 10pt;">Apabila pada malam hari cuacanya baik di musim kemarau mereka tidak menyanyi maka cuaca buruk akan datang.</span></p>\r\n<p class="MsoNormal" style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 18px; color: #333333; margin-left: 72pt;"><span style="font-family: Arial; font-size: 10pt;">10.&nbsp;</span><span style="font-family: Arial; font-size: 10pt;">Ayam</span></p>\r\n<p class="MsoNormal" style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 18px; color: #333333; margin-left: 72pt;"><span style="font-family: Arial; font-size: 10pt;">Pada waktu hujan ayam akan berteduh. Bila hujan tidak akan lama mereka akan tetap berjalan-jalan dan membiarkan dirinya kehujanan. Apabila mereka selalu mencakar-cakar tanah berarti hujan akan datang.</span></p>\r\n<p class="MsoNormal" style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 18px; color: #333333; margin-left: 72pt;"><span style="font-family: Arial; font-size: 10pt;">11.&nbsp;</span><span style="font-family: Arial; font-size: 10pt;">Bebek / Angsa</span></p>\r\n<p class="MsoNormal" style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 18px; color: #333333; margin-left: 72pt;"><span style="font-family: Arial; font-size: 10pt;">Mereka nampak tidak senang dan selalu menggigit bulunya (memberi lemak), apabila cuaca akan buruk.</span></p>\r\n<p class="MsoNormal" style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 18px; color: #333333; margin-left: 72pt;"><span style="font-family: Arial; font-size: 10pt;">12. Burung Kepinis</span></p>\r\n<p class="MsoNormal" style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 18px; color: #333333; margin-left: 72pt;"><span style="font-family: Arial; font-size: 10pt;">Pada waktu cuaca baik mereka akan terbang tinggi sekali karena serangga tinggi pula terbangnya.</span></p>\r\n<p class="MsoNormal" style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 18px; color: #333333; margin-left: 72pt;"><span style="font-family: Arial; font-size: 10pt;">Apabila terbang rendah sekali bertanda cuaca buruk akan hujan.</span></p>\r\n<p class="MsoNormal" style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 18px; color: #333333; margin-left: 72pt;"><span style="font-family: Arial; font-size: 10pt;">Bila cuaca buruk di pagi hari maka mereka tidak akan keluar dari sarangnya.</span></p>\r\n<p class="MsoNormal" style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 18px; color: #333333; margin-left: 72pt;"><span style="font-family: Arial; font-size: 10pt;">13. Kambing</span></p>\r\n<p class="MsoNormal" style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 18px; color: #333333; margin-left: 72pt;"><span style="font-family: Arial; font-size: 10pt;">Apabila akan turun hujan bau badannya dapat tercium dari jarak yang lebih jauh daripada ketika cuaca baik.</span></p>\r\n<p class="MsoNormal" style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 18px; color: #333333; margin-left: 72pt;"><span style="font-family: Arial; font-size: 10pt;">14. Kelelawar</span></p>\r\n<p class="MsoNormal" style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 18px; color: #333333; margin-left: 72pt;"><span style="font-family: Arial; font-size: 10pt;">Mereka akan terbang mulai senja hari bila cuaca akan baik pada malam hari itu.</span></p>\r\n<p class="MsoNormal" style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 18px; color: #333333; margin-left: 72pt;"><span style="font-family: Arial; font-size: 10pt;">Bila mereka berdiam di dalam goa maka cuaca akan buruk.</span></p>\r\n<p class="MsoNormal" style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 18px; color: #333333; margin-left: 72pt;"><span style="font-family: Arial; font-size: 10pt;">15. Asap</span></p>\r\n<p class="MsoNormal" style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 18px; color: #333333; margin-left: 72pt;"><span style="font-family: Arial; font-size: 10pt;">Bila asap naik dengan tegak lurus dan tinggi sekali maka cuaca pada hari itu akan tetap baik. Apabila asap naiknya mendatar dengan tanah/rendah maka cuaca akan buruk.</span><span style="font-family: Arial; font-size: 10pt;">Burung</span></p>\r\n<p class="MsoNormal" style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 18px; color: #333333; margin-left: 72pt;"><span style="font-family: Arial; font-size: 10pt;">16. Gagak</span></p>\r\n<p class="MsoNormal" style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 18px; color: #333333; margin-left: 72pt;"><span style="font-family: Arial; font-size: 10pt;">Apabila hujan akan turun mereka akan terbang berputar-putar di atas sarangnya.</span></p>\r\n<p class="MsoNormal" style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 18px; color: #333333;"><span style="font-family: Arial; font-size: 10pt;">&nbsp;</span></p>\r\n<p class="MsoNormal" style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 18px; color: #333333;"><span style="font-family: Arial; font-size: 10pt;"><span style="font-family: Arial, Helvetica, sans-serif;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><strong style="font-family: Arial, Helvetica, sans-serif;"><span style="color: #ff6600;">Tanda-tanda lain apabila cuaca akan buruk :</span></strong></span></p>\r\n<p class="MsoNormal" style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 18px; color: #333333; margin-left: 72pt; text-indent: -18pt;"><span style="font-family: Arial; font-size: 10pt;"><span style="font-family: Arial, Helvetica, sans-serif;">1.<span style="font-family: ''Times New Roman''; font-size: 7pt; line-height: normal;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span></span><span style="font-family: Arial; font-size: 10pt;">Kucing akan duduk membelakangi api sambil mengusap-usap kepalanya dengan kaki depannya yang dibasahi dengan mulutnya.</span></p>\r\n<p class="MsoNormal" style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 18px; color: #333333; margin-left: 72pt; text-indent: -18pt;"><span style="font-family: Arial; font-size: 10pt;"><span style="font-family: Arial, Helvetica, sans-serif;">2.<span style="font-family: ''Times New Roman''; font-size: 7pt; line-height: normal;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span></span><span style="font-family: Arial; font-size: 10pt;">Bila anjing menggali tanah atau menyembunyikan tulangnya.</span></p>\r\n<p class="MsoNormal" style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 18px; color: #333333; margin-left: 72pt; text-indent: -18pt;"><span style="font-family: Arial; font-size: 10pt;"><span style="font-family: Arial, Helvetica, sans-serif;">3.<span style="font-family: ''Times New Roman''; font-size: 7pt; line-height: normal;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span></span><span style="font-family: Arial; font-size: 10pt;">Burung-burung membasahi bulunya dengan paruhnya.</span></p>\r\n<p class="MsoNormal" style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 18px; color: #333333; margin-left: 72pt; text-indent: -18pt;"><span style="font-family: Arial; font-size: 10pt;"><span style="font-family: Arial, Helvetica, sans-serif;">4.<span style="font-family: ''Times New Roman''; font-size: 7pt; line-height: normal;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span></span><span style="font-family: Arial; font-size: 10pt;">Bila bau bunga tercium semerbak sekali.</span></p>\r\n<p class="MsoNormal" style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 18px; color: #333333; margin-left: 72pt; text-indent: -18pt;"><span style="font-family: Arial; font-size: 10pt;"><span style="font-family: Arial, Helvetica, sans-serif;">5.<span style="font-family: ''Times New Roman''; font-size: 7pt; line-height: normal;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span></span><span style="font-family: Arial; font-size: 10pt;">Burung-burung laut terbang menuju daratan.</span></p>\r\n<p class="MsoNormal" style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 18px; color: #333333; margin-left: 72pt; text-indent: -18pt;" align="left">Dengan mengenali tanda tanda alam dan sekitar kita, akan terasa jadi lebih dekat dan nyaman sekaligus menikmati alam ciptaan Tuhan . Semoga bermanfaat di suatu hari nanti.&nbsp;</p>\r\n<div style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 18px; color: #333333;" align="left">&nbsp;</div>\r\n<p style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 18px; color: #333333;" align="left">&nbsp;</p>', 1, '2013-12-03 14:23:08'),
(6, 'Kode Kehormatan', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>Kode Kehormatan Pramuka terdiri atas janji yang disebut Satya Pramuka dan ketentuan</p>\r\n<p>moral yang disebut Darma Pramuka.</p>\r\n<p>&nbsp;</p>\r\n<p><strong>Satya Pramuka&nbsp;</strong>:</p>\r\n<p>a.&nbsp;&nbsp; &nbsp;diucapkan secara sukarela oleh seorang calon anggota atau calon pengurus Gerakan Pramuka pada saat pelantikan menjadi anggota atau pengurus;</p>\r\n<p>b.&nbsp;&nbsp; &nbsp;dipergunakan sebagai pengikat diri pribadi demi kehormatannya untuk diamalkan; dan</p>\r\n<p>c.&nbsp;&nbsp; &nbsp;dipakai sebagai dasar pengembangan spiritual, emosional, sosial, intelektual, dan fisik, baik sebagai individu maupun sebagai anggota masyarakat.</p>\r\n<p>&nbsp;<!-- pagebreak --></p>\r\n<p>&nbsp;</p>\r\n<p><strong>Darma Pramuka</strong>&nbsp;:</p>\r\n<p>a.&nbsp;&nbsp; &nbsp;Nilai dasar untuk membina dan mengembangkan akhlak mulia;</p>\r\n<p>b.&nbsp;&nbsp; Sistem nilai yang harus dihayati, dimiliki, dan diamalkan dalam kehidupan anggota Gerakan Pramuka di masyarakat;</p>\r\n<p>c.&nbsp;&nbsp;&nbsp;Landasan gerak bagi Gerakan Pramuka untuk mencapai tujuan pendidikan&nbsp; kepramukaan yang diwujudkan dalam kegiatan untuk mendorong peserta didik manunggal dengan masyarakat, bersikap demokratis, saling menghormati, serta memiliki rasa kebersamaan dan gotong royong; dan</p>\r\n<p>d.&nbsp;&nbsp; &nbsp;kode etik bagi organisasi dan anggota Gerakan Pramuka.</p>\r\n\r\n<p>Kode Kehormatan Pramuka</p>\r\n<p>adalah budaya organisasi yang melandasi sikap dan perilaku&nbsp; setiap anggota&nbsp; Gerakan</p>\r\n<p>Pramuka. Kode Kehormatan Pramuka ditetapkan dan diterapkan sesuai dengan golongan</p>\r\n<p>usia dan perkembangan rohani dan jasmani anggota Gerakan Pramuka.</p>\r\n<p>&nbsp;</p>\r\n<p>a.&nbsp;&nbsp;&nbsp;&nbsp; Kode Kehormatan bagi Pramuka Siaga, terdiri atas :</p>\r\n<p>1) Janji yang disebut Dwisatya, selengkapnya berbunyi:</p>\r\n<p>&nbsp;&nbsp;&nbsp;</p>\r\n<p><strong>Dwisatya</strong></p>\r\n<p>Demi kehormatanku aku berjanji akan bersunguh-sungguh:</p>\r\n<p>-&nbsp; Menjalankan kewajibanku terhadap Tuhan Yang Maha Esa , Negara Kesatuan&nbsp;&nbsp; Republik Indonesia dan menurut aturan keluarga.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>\r\n<p>-&nbsp; &nbsp;Setiap hari berbuat kebaikan.</p>\r\n<p>2) Ketentuan moral yang disebut Dwidarma, selengkapnya berbunyi:</p>\r\n<p>&nbsp;</p>\r\n<p><strong>Dwidarma</strong></p>\r\n<p>1. &nbsp; Siaga&nbsp; berbakti&nbsp; pada ayah dan ibundanya.</p>\r\n<p>2. &nbsp; Siaga&nbsp; berani dan tidak putus asa.</p>\r\n<p>&nbsp;</p>\r\n<p>b. &nbsp; Kode Kehormatan bagi Pramuka penggalang, terdiri atas:</p>\r\n<p>1) Janji yang disebut Trisatya, selengkapnya berbunyi</p>\r\n<p>&nbsp;</p>\r\n<p><strong>Trisatya</strong></p>\r\n<p>Demi kehormatanku aku berjanji akan bersungguh-sungguh:</p>\r\n<p>- &nbsp;Menjalankan kewajibanku terhadap Tuhan Yang Maha Esa, Negara Kesatuan&nbsp; Republik Indonesia dan mengamalkan pancasila.</p>\r\n<p>-&nbsp; &nbsp;Menolong sesama hidup dan mempersiapkan diri membangun masyarakat.</p>\r\n<p>-&nbsp;&nbsp;&nbsp;Menepati Dasadarma.</p>\r\n<p>2) Ketentuan moral yang disebut Dasadarma, selengkapnya berbunyi:</p>\r\n<p>&nbsp;</p>\r\n<p><strong>Dasadarma</strong></p>\r\n<p>1.&nbsp;&nbsp;&nbsp;&nbsp; Takwa kepada Tuhan Yang Maha Esa.</p>\r\n<p>2.&nbsp;&nbsp;&nbsp;&nbsp; Cinta alam dan kasih sayang sesama manusia.</p>\r\n<p>3.&nbsp;&nbsp;&nbsp;&nbsp; Patriot yang sopan dan kesatria.</p>\r\n<p>4.&nbsp;&nbsp;&nbsp;&nbsp; Patuh dan suka bermusyawarah.</p>\r\n<p>5.&nbsp;&nbsp;&nbsp;&nbsp; Rela menolong dan tabah.</p>\r\n<p>6.&nbsp;&nbsp;&nbsp;&nbsp; Rajin, trampil dan gembira.</p>\r\n<p>7.&nbsp;&nbsp;&nbsp;&nbsp; Hemat, cermat dan bersahaja.</p>\r\n<p>8.&nbsp;&nbsp;&nbsp;&nbsp; Disiplin, berani dan setia.</p>\r\n<p>9.&nbsp;&nbsp;&nbsp;&nbsp; Bertanggungjawab dan dapat dipercaya.</p>\r\n<p>10.&nbsp; Suci dalam pikiran, perkataan dan perbuatan.</p>\r\n<p>&nbsp;</p>\r\n<p>c. Kode Kehormatan bagi Pramuka Penegak, Pramuka Pandega, dan anggota dewasa, terdiri atas:</p>\r\n<p>1) Janji yang disebut Trisatya, selengkapnya berbunyi:</p>\r\n<p>&nbsp;</p>\r\n<p><strong>Trisatya</strong></p>\r\n<p>Demi kehormatanku aku berjanji akan bersungguh-sungguh:</p>\r\n<p>-&nbsp;&nbsp;&nbsp;Menjalankan kewajibanku terhadap Tuhan Yang Maha Esa, Negara Kesatuan Republik Indonesia dan mengamalkan pancasila.</p>\r\n<p>-&nbsp;&nbsp;&nbsp;Menolong sesama hidup dan ikut serta membangun masyarakat</p>\r\n<p>-&nbsp;&nbsp;&nbsp;Menepati Dasadarma.</p>\r\n<p>2) Ketentuan moral yang disebut Dasadarma, selengkapnya berbunyi:</p>\r\n<p>&nbsp;</p>\r\n<p><strong>Dasadarma</strong></p>\r\n<p>1.&nbsp;&nbsp;&nbsp;&nbsp; Takwa kepada Tuhan Yang Maha Esa.</p>\r\n<p>2.&nbsp;&nbsp;&nbsp;&nbsp; Cinta alam dan kasih sayang sesama manusia.</p>\r\n<p>3.&nbsp;&nbsp;&nbsp;&nbsp; Patriot yang sopan dan kesatria.</p>\r\n<p>4.&nbsp;&nbsp;&nbsp;&nbsp; Patuh dan suka bermusyawarah.</p>\r\n<p>5.&nbsp;&nbsp;&nbsp;&nbsp; Rela menolong dan tabah.</p>\r\n<p>6.&nbsp;&nbsp;&nbsp;&nbsp; Rajin, trampil dan gembira.</p>\r\n<p>7.&nbsp;&nbsp;&nbsp;&nbsp; Hemat, cermat dan bersahaja.</p>\r\n<p>8.&nbsp;&nbsp;&nbsp;&nbsp; Disiplin, berani dan setia.</p>\r\n<p>9.&nbsp;&nbsp;&nbsp;&nbsp; Bertanggungjawab dan dapat dipercaya.</p>\r\n<p>10.&nbsp; Suci dalam pikiran, perkataan dan perbuatan.</p>\r\n<p>&nbsp;</p>\r\n<p>(Hasil Munaslub 2012)</p>\r\n<p>&nbsp;</p>\r\n</body>\r\n</html>', 1, '2013-12-03 14:21:47');

-- --------------------------------------------------------

--
-- Table structure for table `gsjpengumuman`
--

CREATE TABLE IF NOT EXISTS `gsjpengumuman` (
  `id_pengumuman` int(11) NOT NULL AUTO_INCREMENT,
  `hal` varchar(255) NOT NULL,
  `pengumuman` longtext NOT NULL,
  `tanggal_post` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_pengumuman`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `gsjpengumuman`
--

INSERT INTO `gsjpengumuman` (`id_pengumuman`, `hal`, `pengumuman`, `tanggal_post`) VALUES
(1, 'Pendaftaran WGP 9999', '<p>Pendaftaran WGP 9</p>', '2014-08-24 15:39:55');

-- --------------------------------------------------------

--
-- Table structure for table `gsjprogram`
--

CREATE TABLE IF NOT EXISTS `gsjprogram` (
  `id_program` int(11) NOT NULL AUTO_INCREMENT,
  `nama_program` varchar(200) NOT NULL,
  `deskripsi` text NOT NULL,
  `poster` int(11) NOT NULL,
  `tgl_post` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_program`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `gsjprogram`
--

INSERT INTO `gsjprogram` (`id_program`, `nama_program`, `deskripsi`, `poster`, `tgl_post`) VALUES
(1, 'Beasiswa', 'Beasiswa', 1, '2014-02-07 20:21:06');
