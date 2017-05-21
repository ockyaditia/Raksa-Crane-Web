-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 13 Mar 2016 pada 10.39
-- Versi Server: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `u392380127_crane`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `active_guests`
--

CREATE TABLE IF NOT EXISTS `active_guests` (
  `ip` varchar(15) NOT NULL,
  `timestamp` int(11) unsigned NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `active_users`
--

CREATE TABLE IF NOT EXISTS `active_users` (
  `username` varchar(30) NOT NULL,
  `timestamp` int(11) unsigned NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `active_users`
--

INSERT INTO `active_users` (`username`, `timestamp`) VALUES
('test123', 1457857734);

-- --------------------------------------------------------

--
-- Struktur dari tabel `banned_users`
--

CREATE TABLE IF NOT EXISTS `banned_users` (
  `username` varchar(30) NOT NULL,
  `timestamp` int(11) unsigned NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `blog`
--

CREATE TABLE IF NOT EXISTS `blog` (
`blog_id` int(10) NOT NULL,
  `category_id` int(10) NOT NULL,
  `blog_judul` varchar(100) NOT NULL,
  `blog_date` text NOT NULL,
  `blog_author` varchar(50) NOT NULL,
  `blog_keywords` text NOT NULL,
  `blog_gambar` text NOT NULL,
  `blog_content` text NOT NULL,
  `blog_published` varchar(10) NOT NULL,
  `time` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `blog`
--

INSERT INTO `blog` (`blog_id`, `category_id`, `blog_judul`, `blog_date`, `blog_author`, `blog_keywords`, `blog_gambar`, `blog_content`, `blog_published`, `time`) VALUES
(9, 1, 'Performance of new best-in-class Grove GMK5250L prompts crane sale to Merkel Autokranes', '17-09-2015', 'admin', 'Grove GMK5250L', 'GMK5250L 2.jpg', 'During a visit to Manitowocâ€™s facility in Wilhelmshaven, Germany, Bamberg-based company Merkel Autokrane GmbH had the opportunity to see a demonstration of the newly launched Grove GMK5250L all-terrain crane.\r\nImpressed by the performance and technical concept of the new Grove crane, GÃ¼nther Merkel, managing director of Merkel Autokrane, made the decision there and then to be one of the first to purchase it. He signed off the purchase on a napkin during dinner that day. \r\n\r\nThe 250 t capacity GMK5250L offers the strongest reach and load chart of any five-axle crane, and is the first mobile crane to feature a VIAB turbo clutch and integrated retarder. The VIAB turbo clutch module eliminates both fluid overheating and clutch burning, and enables the best manoeuvrability and class-leading driver comfort. The Grove crane also offers excellent roadability with its below 12 t per axle configuration, which leaves room for additional equipment that can be added later. \r\n\r\nâ€œHaving seen the benefits of the Grove GMK5250L I wanted to seal the deal immediately, so I signed for the crane on a napkin at dinner,â€ he said. â€œI was astonished at what Manitowoc has been able to achieve with this new Grove crane. It pushes the boundaries of what a five-axle crane can do, and even gives the larger six-axle cranes a run for their money in certain applications. For us, as a relatively small operation with regional customers, easy manoeuvrability is the deciding factor. A five axle crane is also more beneficial for us as that is the maximum number of axles allowing a permanent transportation permit. Another very important feature was the extreme narrow outrigger base, which is more compact compared to all other existing 220 t cranes on the market."\r\n\r\nThe GMK5250L is powered by a single engine â€“ a concept pioneered by Grove on its highly successful Grove GMK6400. On the GMK5250L, the engine is a Tier IV Final/EUROMOT 4 Mercedes-Benz OM471LA, a six cylinder diesel engine with a 390 kW (520 hp) rating and a maximum torque of 2,460 Nm. A single engine means lower fuel consumption during operation, reduced overall weight and less maintenance, meaning the crane is far more economical. The GMK5250L offers fuel savings of up to 30% from its predecessor, the GMK5220.\r\n\r\n"We are thrilled with the new addition to our fleet,â€ continued Merkel. â€œThis new Grove crane will enable us to improve and expand our range of services further.â€\r\nThe GMK5250L is now the largest capacity crane in Merkelâ€™s fleet and is replacing a 170 t mobile crane.  Merkel Autokrane is more than 20 years in the market and operates a fleet of 11 mobile cranes in SchlÃ¼sselfeld, Bamberg and Weismain. ', '1', '1442504456');

-- --------------------------------------------------------

--
-- Struktur dari tabel `blog_categories`
--

CREATE TABLE IF NOT EXISTS `blog_categories` (
`cat_id` int(10) NOT NULL,
  `cat_title` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `blog_categories`
--

INSERT INTO `blog_categories` (`cat_id`, `cat_title`) VALUES
(1, 'News');

-- --------------------------------------------------------

--
-- Struktur dari tabel `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
`cat_id` int(10) NOT NULL,
  `cat_title` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`) VALUES
(1, 'Boom Truck'),
(2, 'Tower'),
(3, 'Hydraulic Truck');

-- --------------------------------------------------------

--
-- Struktur dari tabel `conversation`
--

CREATE TABLE IF NOT EXISTS `conversation` (
`conversation_id` int(50) NOT NULL,
  `conversation_title` varchar(50) NOT NULL,
  `conversation_full_name` varchar(50) NOT NULL,
  `conversation_email` varchar(255) NOT NULL,
  `conversation_phone_number` varchar(255) NOT NULL,
  `conversation_content` text NOT NULL,
  `conversation_date` text NOT NULL,
  `conversation_status` int(10) NOT NULL,
  `conversation_read` int(25) NOT NULL,
  `username` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `conversation`
--

INSERT INTO `conversation` (`conversation_id`, `conversation_title`, `conversation_full_name`, `conversation_email`, `conversation_phone_number`, `conversation_content`, `conversation_date`, `conversation_status`, `conversation_read`, `username`) VALUES
(3, 'Pembayaran', 'dimas nur panca', 'ascan@dimasnurpanca.com', '(628) 5678-98644', 'Saya telah membayar untuk pembelian ALTEC AC38-103S\r\nDibeli pada tanggal 22-09-2015', '22-09-2015', 0, 2, 'test123'),
(5, 'Customer Service', 'Ocky Aditia Saputra', 'ocky.aditia@gmail.com', '081288104708', 'Test', '12-03-2016', 0, 1, 'ockyaditia');

-- --------------------------------------------------------

--
-- Struktur dari tabel `messages`
--

CREATE TABLE IF NOT EXISTS `messages` (
`msg_id` int(50) NOT NULL,
  `conversation_id` int(50) NOT NULL,
  `msg_date` text NOT NULL,
  `msg_username` varchar(255) NOT NULL,
  `msg_email` varchar(255) NOT NULL,
  `msg_content` text NOT NULL,
  `msg_status` int(10) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `messages`
--

INSERT INTO `messages` (`msg_id`, `conversation_id`, `msg_date`, `msg_username`, `msg_email`, `msg_content`, `msg_status`, `time`) VALUES
(11, 3, '22-09-2015', 'admin', 'dimasnurpanca@doctor.com', 'Kami akan mencoba untuk memeriksa pembayaran terlebih dahulu. ', 1, '2015-09-22 00:11:04'),
(14, 3, '12-03-2016', 'Ocky Aditia Saputra', 'ocky.aditia@gmail.com', 'Test', 1, '2016-03-12 16:23:39');

-- --------------------------------------------------------

--
-- Struktur dari tabel `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
`order_id` int(10) NOT NULL,
  `order_produk_id` int(10) DEFAULT NULL,
  `order_judul` varchar(100) NOT NULL,
  `order_date` text NOT NULL,
  `order_tipe` text NOT NULL,
  `order_start` text NOT NULL,
  `order_end` text NOT NULL,
  `order_buyer_name` varchar(50) NOT NULL,
  `order_bank` text NOT NULL,
  `order_atas_nama` text NOT NULL,
  `order_nomor_transfer` text NOT NULL,
  `order_jumlah_transfer` text NOT NULL,
  `order_status` varchar(50) NOT NULL,
  `order_publish` text NOT NULL,
  `order_total` text NOT NULL,
  `order_last_updated` text NOT NULL,
  `order_tujuan_id` varchar(25) NOT NULL,
  `order_nomor_transaksi` text NOT NULL,
  `order_duration` int(12) NOT NULL,
  `order_upload` varchar(100) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `orders`
--

INSERT INTO `orders` (`order_id`, `order_produk_id`, `order_judul`, `order_date`, `order_tipe`, `order_start`, `order_end`, `order_buyer_name`, `order_bank`, `order_atas_nama`, `order_nomor_transfer`, `order_jumlah_transfer`, `order_status`, `order_publish`, `order_total`, `order_last_updated`, `order_tujuan_id`, `order_nomor_transaksi`, `order_duration`, `order_upload`) VALUES
(7, 20, 'National NBT45-127', '22-09-2015', 'Disewakan', '09/09/2015', '09/16/2015', 'test123', 'BCA', 'TEST', '08123456789', '48.000.000', 'Success', '1', '20.000.000', '', '1', '08123456789', 0, NULL),
(8, 19, 'Altec AC38-103S', '22-09-2015', 'Dijual', '', '', 'test123', 'Mandiri', 'TEST', '08123456789', '23.369', 'Success', '1', '3.743.838.000', '', '2', '08123456789', 0, NULL),
(9, 21, 'tower crane', '21-09-2015', 'Disewakan', '09/30/2015', '09/30/2015', 'test123', 'BCA', 'faa', '082653', '19.500.000', 'Success', '1', '65.000.000', '', '1', '082653', 0, NULL),
(10, 21, 'tower crane', '09-11-2015', 'Disewakan', '10/29/2015', '10/29/2015', 'test123', 'BCA', 'bos', '075690', '19.500.000', 'Success', '1', '65.000.000', '', '1', '075690', 0, NULL),
(11, 21, 'tower crane', '11-11-2015', 'Disewakan', '11/11/2015', '11/11/2015', 'test123', 'BCA', 'aaaa', 'sss', '19.500.000', 'Success', '1', '65.000.000', '', '1', 'sss', 0, '20151228_141754.jpg'),
(12, 21, 'tower crane', '11-11-2015', 'Disewakan', '11/05/2015', '11/05/2015', 'test123', 'BCA', 'adad', 'adad', '19.500.000', 'Failed', '1', '65.000.000', '', '1', 'adad', 0, NULL),
(13, 21, 'tower crane', '11-11-2015', 'Disewakan', '11/07/2015', '11/07/2015', 'test123', 'BCA', 'dsdsdsd', 'sdsdsd', '19.500.000', 'Failed', '1', '65.000.000', '', '1', 'sdsdsd', 0, NULL),
(14, 19, 'Altec AC38-103S', '11-11-2015', 'Dijual', '', '', 'test123', 'BCA', 'ksk', 'kakak', '1.123.151.400', 'Failed', '1', '3.743.838.000', '', '1', 'kakak', 0, NULL),
(15, 19, 'Altec AC38-103S', '13-11-2015', 'Dijual', '', '', 'test123', 'BCA', 'kaka', '123', '1.123.151.400', 'Failed', '1', '3.743.838.000', '', '1', '123', 0, NULL),
(16, 19, 'Altec AC38-103S', '13-11-2015', 'Dijual', '', '', 'test123', 'BCA', 'trthy', '454', '1.123.151.400', 'Failed', '1', '3.743.838.000', '', '1', '454', 0, NULL),
(17, 19, 'Altec AC38-103S', '13-11-2015', 'Dijual', '', '', 'test123', 'BCA', '', '', '1.123.151.400', 'Failed', '1', '3.743.838.000', '', '1', '', 0, NULL),
(18, 19, 'Altec AC38-103S', '13-11-2015', 'Dijual', '', '', 'test123', 'BCA', '', '', '1.123.151.400', 'Failed', '1', '3.743.838.000', '', '1', '', 0, NULL),
(19, 19, 'Altec AC38-103S', '13-11-2015', 'Dijual', '', '', 'test123', 'BCA', '', '', '1.123.151.400', 'Failed', '1', '3.743.838.000', '', '1', '', 0, NULL),
(20, 19, 'Altec AC38-103S', '13-11-2015', 'Dijual', '', '', 'test123', 'BCA', '', '', '1.123.151.400', 'Failed', '1', '3.743.838.000', '', '1', '', 0, NULL),
(21, 19, 'Altec AC38-103S', '13-11-2015', 'Dijual', '', '', 'test123', 'BCA', '', '', '1.123.151.400', 'Failed', '1', '3.743.838.000', '', '1', '', 0, NULL),
(22, 19, 'Altec AC38-103S', '13-11-2015', 'Dijual', '', '', 'test123', 'BCA', '', '', '1.123.151.400', 'Failed', '1', '3.743.838.000', '', '1', '', 0, NULL),
(23, 19, 'Altec AC38-103S', '13-11-2015', 'Dijual', '', '', 'test123', 'BCA', '', '', '1.123.151.400', 'Failed', '1', '3.743.838.000', '', '1', '', 0, NULL),
(24, 19, 'Altec AC38-103S', '13-11-2015', 'Dijual', '', '', 'test123', 'BCA', '', '', '1.123.151.400', 'Failed', '1', '3.743.838.000', '', '1', '', 0, NULL),
(25, 19, 'Altec AC38-103S', '13-11-2015', 'Dijual', '', '', 'test123', 'BCA', '', '', '1.123.151.400', 'Failed', '1', '3.743.838.000', '', '1', '', 0, NULL),
(26, 19, 'Altec AC38-103S', '13-11-2015', 'Dijual', '', '', 'test123', 'BCA', '', '', '1.123.151.400', 'Failed', '1', '3.743.838.000', '', '1', '', 0, NULL),
(27, 19, 'Altec AC38-103S', '13-11-2015', 'Dijual', '', '', 'test123', 'BCA', '', '', '1.123.151.400', 'Failed', '1', '3.743.838.000', '', '1', '', 0, NULL),
(28, 19, 'Altec AC38-103S', '13-11-2015', 'Dijual', '', '', 'test123', 'BCA', 'eee', '123', '1.123.151.400', 'Failed', '1', '3.743.838.000', '', '1', '123', 0, NULL),
(29, 20, 'National NBT45-127', '27-02-2016', 'Disewakan', '02/24/2016', '02/24/2016', 'test123', 'Mandiri', '111', '111', '6.000.000', 'Failed', '1', '20.000.000', '', '2', '', 0, '1.PNG'),
(30, 20, 'National NBT45-127', '27-02-2016', 'Disewakan', '02/25/2016', '02/25/2016', 'test123', 'BCA', '111', '111', '6.000.000', 'Failed', '1', '20.000.000', '', '1', '', 0, NULL),
(31, 20, 'National NBT45-127', '27-02-2016', 'Disewakan', '02/29/2016', '03/17/2016', 'test123', 'Mandiri', '111', '111', '108.000.000', 'Failed', '1', '20.000.000', '', '2', '', 36, 'daya_pic.jpg'),
(32, 21, 'tower crane', '27-02-2016', 'Disewakan', '02/29/2016', '02/29/2016', 'test123', 'Mandiri', '11', '11', '19.500.000', 'Failed', '1', '65.000.000', '', '2', '', 23, 'AMD Catalyst.JPG'),
(33, 21, 'tower crane', '27-02-2016', 'Disewakan', '02/25/2016', '02/25/2016', 'test123', 'Mandiri', '123', '123', '19.500.000', 'Failed', '1', '65.000.000', '', '2', '', 108000, 'YARSI_Wall.jpg'),
(34, 21, 'tower crane', '27-02-2016', 'Disewakan', '02/29/2016', '02/29/2016', 'test123', 'Mandiri', '12345', '12345', '19.500.000', 'Failed', '1', '65.000.000', '', '2', '', 104580, 'new-year-hd-wallpaper-2016.jpg'),
(35, 21, 'tower crane', '27-02-2016', 'Disewakan', '02/29/2016', '02/29/2016', 'test123', 'Mandiri', '1', '1', '19.500.000', 'Failed', '1', '65.000.000', '', '2', '', 86400, 'Intel(R) HD Graphics 4000.JPG'),
(42, 19, 'Altec AC38-103S', '13-03-2016', 'Dijual', '', '', 'test123', 'Mandiri', 'Ocky Aditia Saputra', '1234567890', '3.743.838.000', 'Success', '2', '3.743.838.000', '', '2', '08887776666622', 86400, 'Mobile Sisa');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembayaran`
--

CREATE TABLE IF NOT EXISTS `pembayaran` (
`id` int(50) NOT NULL,
  `nama_bank` varchar(255) NOT NULL,
  `cabang` varchar(255) NOT NULL,
  `nama_pemilik` varchar(255) NOT NULL,
  `nomor_rekening` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pembayaran`
--

INSERT INTO `pembayaran` (`id`, `nama_bank`, `cabang`, `nama_pemilik`, `nomor_rekening`) VALUES
(1, 'BCA', 'Jakarta', 'HJ.NENGSIH', '08564473322'),
(2, 'Mandiri', 'Jakarta', 'H.SAKAM', '08887776666622'),
(3, 'BNI', 'jakarta', 'nurul iman f', '09272632');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE IF NOT EXISTS `produk` (
`produk_id` int(10) NOT NULL,
  `category_id` int(10) NOT NULL,
  `produk_tipe` text NOT NULL,
  `produk_judul` varchar(255) NOT NULL,
  `produk_date` text NOT NULL,
  `produk_author` varchar(50) NOT NULL,
  `produk_keywords` text NOT NULL,
  `produk_pabrikan` varchar(255) NOT NULL,
  `produk_model` varchar(255) NOT NULL,
  `produk_gambar` text NOT NULL,
  `produk_content` text NOT NULL,
  `produk_harga` text NOT NULL,
  `produk_tahun` text NOT NULL,
  `produk_kapasitas` varchar(255) NOT NULL,
  `produk_boom` varchar(255) NOT NULL,
  `produk_jib` varchar(255) NOT NULL,
  `produk_attachment` text NOT NULL,
  `produk_published` int(25) NOT NULL,
  `jumlah_barang` int(11) NOT NULL,
  `time` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`produk_id`, `category_id`, `produk_tipe`, `produk_judul`, `produk_date`, `produk_author`, `produk_keywords`, `produk_pabrikan`, `produk_model`, `produk_gambar`, `produk_content`, `produk_harga`, `produk_tahun`, `produk_kapasitas`, `produk_boom`, `produk_jib`, `produk_attachment`, `produk_published`, `jumlah_barang`, `time`) VALUES
(19, 1, 'Dijual', 'Altec AC38-103S', '22-09-2015', 'admin', 'Altec AC38-103S', 'Altec', 'AC38-103S', 'data1.jpeg', '38 Ton Altec on a Peterbilt chasis with a 9-speed transmission', '3.743.838.000', '2009', '38', '103', '103', '', 2, 97, '1442897998'),
(20, 1, 'Disewakan', 'National NBT45-127', '22-09-2015', 'admin', 'National NBT45-127', 'National', 'NBT45-127', 'data2.jpg', '20 Ton single sheave, quick reave hook block.', '20.000.000', '2013', '45', '127', '55', '', 1, 97, '1442898387'),
(21, 2, 'Disewakan', 'tower crane', '21-09-2015', 'admin', 'tower crane 1', 'hitachi', 'mt09', 'crane9.jpg', 'tower crane merk hitachi ', '65.000.000', '2008', '1000ton', '200', '240', '', 1, 94, '1442901725');

-- --------------------------------------------------------

--
-- Struktur dari tabel `settings`
--

CREATE TABLE IF NOT EXISTS `settings` (
`id` int(50) NOT NULL,
  `deskripsi_perusahaan` text NOT NULL,
  `alamat_perusahaan` text NOT NULL,
  `telephone_perusahaan` varchar(255) NOT NULL,
  `email_perusahaan` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `settings`
--

INSERT INTO `settings` (`id`, `deskripsi_perusahaan`, `alamat_perusahaan`, `telephone_perusahaan`, `email_perusahaan`) VALUES
(1, 'Sebagai perusahaan jasa penyewaan alat berat dan service (Perbaikan) yang terbaik dibidangnya dan selalu mengupayakan service dan inovasi sebagai layanan utamanya, sehingga tercipta kerjasama yang saling menguntungkan', 'Kp. Kandang Gereng Rt. 001, Rw. 006  DS. Jayamukti, Cikarang Pusat, Bekasi', '(021) 89118940', 'raksawastukencana@rocketmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `username` varchar(30) NOT NULL,
  `password` varchar(32) DEFAULT NULL,
  `userid` varchar(32) DEFAULT NULL,
  `userlevel` tinyint(1) unsigned NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `timestamp` int(11) unsigned NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `alamat_lengkap` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`username`, `password`, `userid`, `userlevel`, `email`, `timestamp`, `phone_number`, `nama_lengkap`, `alamat_lengkap`) VALUES
('admin', '4d42328436e640ed8ded61b4641e121c', 'b6d7288dedc09eabe5600ef7948e1c6a', 9, 'dimasnurpanca@doctor.com', 1456903844, '(628) 5678-98644', 'dimas np', ''),
('ockyaditia', '295bf31599e1883c25c770c0bf3afad9', '1', 1, 'ocky.aditia@gmail.com', 1, '081288104708', 'Ocky Aditia Saputra', 'Jl. H. Suit No.12'),
('test123', '4d42328436e640ed8ded61b4641e121c', 'a710b90af82e00bef92dfd7a9161d9c6', 1, 'ascan@dimasnurpanca.com', 1457857734, '(628) 5678-98644', 'kenti', 'jl.deltamas'),
('test2222', 'fec2202d1ff7adfab5ebd7d43542d70d', '0', 1, 'ascan@dimasnurpanca.com', 1442404762, '(484) 8484-84848', 'dimas np', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `active_guests`
--
ALTER TABLE `active_guests`
 ADD PRIMARY KEY (`ip`);

--
-- Indexes for table `active_users`
--
ALTER TABLE `active_users`
 ADD PRIMARY KEY (`username`);

--
-- Indexes for table `banned_users`
--
ALTER TABLE `banned_users`
 ADD PRIMARY KEY (`username`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
 ADD PRIMARY KEY (`blog_id`);

--
-- Indexes for table `blog_categories`
--
ALTER TABLE `blog_categories`
 ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
 ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `conversation`
--
ALTER TABLE `conversation`
 ADD PRIMARY KEY (`conversation_id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
 ADD PRIMARY KEY (`msg_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
 ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
 ADD PRIMARY KEY (`produk_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
MODIFY `blog_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `blog_categories`
--
ALTER TABLE `blog_categories`
MODIFY `cat_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
MODIFY `cat_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `conversation`
--
ALTER TABLE `conversation`
MODIFY `conversation_id` int(50) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
MODIFY `msg_id` int(50) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
MODIFY `order_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=43;
--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
MODIFY `id` int(50) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
MODIFY `produk_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
MODIFY `id` int(50) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `active_users`
--
ALTER TABLE `active_users`
ADD CONSTRAINT `active_users_ibfk_1` FOREIGN KEY (`username`) REFERENCES `users` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
