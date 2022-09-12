-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 12, 2022 at 12:15 PM
-- Server version: 5.7.33
-- PHP Version: 8.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `utsblog`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `penulis` varchar(255) DEFAULT NULL,
  `isi` text,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id`, `id_user`, `judul`, `foto`, `penulis`, `isi`, `created_at`, `updated_at`) VALUES
(12, 2, 'Wakil Bupati Ketapang Hadiri Pelantikan Pengurus Komisariat PMII STAI AL-Haudl', 'app/artikel/12-1662743291-CPNG2.jpg', 'Ifan Rifaldi', 'Ketapang (Suara Ketapang) - Wakil Bupati Ketapang H. Farhan, SE.,M.Si sekaligus Ketua Majelis Pertimbangan Pergerakan Mahasiswa Islam Indonesia (PMII) Kabupaten Ketapang menghadiri Pelantikan Pengurus Komisariat PMII STAI-HAUDL Ketapang Masa Khidmat 2021-2022 dan membuka Dialog Interaktif Kader PMII Kabupaten Ketapang dengan tema Mewujudkan Satu Komitmen PMII Jaya, Sabtu (22/01/2022) bertempat di Hotel Grand Zuri Ketapang.\r\nWabup Ketapang dalam kesempatan tersebut mengatakan bahwa dalam mewujudkan satu komitmen agar PMII berjaya tidaklah sulit.\r\n\r\n\"Tadi sudah kita lihat dan dengarkan ketika pengurus PMII dilantik dengan sumpah dan janji. Pengucapan tersebut tidak harus dengan lantang tetapi bagaimana mengamalkan atau merealisasikannya dalam kehidupan sehari-hari.\" tegasnya.\r\n\r\nIa berpesan dalam membangun kekuatan dengan kebersamaan ada 3 hal yang perlu PMII kejar, pertama bagaimana membangun kekuatan kader yang kuat, kedua kader PMII diharapkan memiliki kemampuan teknokrat, ketiga kader PMII harus memiliki harus jiwa intreprenuer/ mempunyai inovasi.\r\n\r\n\"Kesimpulannya saya minta kita tetap solid. Segala sesuatu permasalahan harus kita diskusi dan musyawarahkan sehingga kita bisa mewujudkan PMII jaya,\" katanya.\r\n\r\nTurut hadir dalam kegiatan tersebut Wakil Ketua Majelis Pertimbangan PMII Kabupaten Ketapang, Ketua IKA PMII Kabupaten Ketapang, Sekretaris IKA PMII Kab.Ketapang, Ketua Komisariat PMII Al-Haudl, Ketua Komisariat PMII Politeknik, undangan dan lainnya.', '2022-09-09 10:08:11', '2022-09-09 10:08:11'),
(13, 2, 'PMII Ketapang Bagikan Ratusan Takjil dan Al – Qur’an', 'app/artikel/13-1662743752-HAX7Q.jpg', 'Ifan Rifaldi', 'Ketapang, Beritaborneo.id – Pergerakan Mahasiswa Islam Indonesia (PMII) Kabupaten Ketapang bagikan ratusan takjil dan juga Al – Qur’an kepada masyarakat dan juga beberapa Panti Asuhan yang ada di Ketapang. Kegiatan ini dilakukan untuk mengisi rangkaian peringatan Hari Lahir (Harlah) PMII ke 62 tahun sekaligus dalam rangka berbagi dengan sesama.\r\n\r\nPantauan dalam kegiatan, jajaran kader yang terdiri dari badan pengurus harian Komisariat dan Rayon dari Politeknik Negeri Ketapang dan juga STAI Al – Haudl Ketapang berlangsung pada tanggal 18 – 19 April 2022.\r\n\r\n\r\nMenurut Ketua Panitia Riska Septyani, kegiatan pembagian takjil kali ini bersamaan dengan bulan suci ramadhan 1443 hijriah. Hal ini patut disyukuri karena menjadi momentum yang sangat spesial dan penuh keberkahan.\r\n\r\n“Kegiatan dimulai dengan membagikan Al – Qur’an ke beberapa Panti Asuhan dan dilanjutkan hari berikutnya dengan pembagian takjil,” ujar Riska.\r\n\r\nDalam pembagian Al – Qur’an ini PMII Ketapang bekerja sama dengan Rumah Syamil Qur’an untuk membantu menyukseskan kegiatan harlah dan juga menjalankan program Rumah Syamil Qur’an.\r\n\r\n\r\nDikatakan Meriyanti sebagai penanggung jawab Rumah Syaamil Qur’an yang ada di Ketapang, Rumah Syaamil adalah mitra resmi Syaamil Quran untuk memperluas jaringan distribusi sekaligus menjadi pusat kegiatan masyarakat untuk mempelajari dan menghafal Al Quran dalam rangka mencetak generasi Qurani.\r\n\r\nKemudian, event lain yang sedang dipersiapkan yaitu Diskusi Kader Pergerakan dan Santunan Anak Yatim pada Malam Puncak Harlah PMII ke 62 tahun yang akan digelar pada 22 April 2022 mendatang.', '2022-09-09 10:15:52', '2022-09-09 10:15:52'),
(14, 2, 'Gelar Mapaba 2021, PMII Ketapang Usung Tema Mewujudkan Transformasi Mahasiswa Kreatif, Inovatif, dan Agamis', 'app/artikel/14-1662743852-iBUID.jpg', 'Ifan Rifaldi', 'Kegiatan dengan tema “Mewujudkan Transformasi Mahasiswa Yang Kreatif, Inovatif, dan Agamis Serta Berdaya Saing Tinggi Melalui Kegiatan Masa Penerimaan Anggota Baru (Mapaba)” itu berlangsung saja 25 hingga 26 September 2021 dengan diikuti oleh anggota PMII dari Komisariat Politeknik Negeri Ketapang, STAI AL-Haudl Ketapang, dan juga dari Universitas Tanjungpura Pontianak.\r\n\r\nKetua PMII Komisariat Politeknik Negeri Ketapang Didit Priansyah mengatakan kalau sebagai mahasiswa kerap didoktrin dalam sebuah kalimat “Mahasiswa is agent of the change”.\r\n\r\n“Mahasiswa adalah sebuah agen perubahan, lantas bagaimana cara kita bisa menerapkan hal tersebut, yaitu dengan cara kita berdiskusi dan berorganisasi,” katanya saat memberikan sambutan, Sabtu (25/09/2021).\r\n\r\nDidit Priansyah menyebut kalau pada Mapaba kali ini pihaknya berharap dapat menrtransformasikan siswa tidak aktif menjadi mahasiswa yang aktif dan dari siswa yang tidak kreatif bertransformasi menjadi mahasiswa yang kreatif.\r\n\r\n“Serta dari siswa yang tidak inovatif menjadi mahasiswa yang inovatif, dari mahasiswa yang tidak peduli akan nilai nilai nilai agama insyaallah dalam kegiatan Mapaba ini akan kami transformasikan menjadi mahasiswa-mahasiwa yang peduli akan agama yang peduli akan kewajiban-kewajiban agama,” ucapnya.\r\n\r\nSementara itu, satu diantara pemateri yakni Drs H. Satuki Huddin M.Si mengatakan kalau kelebihan dari PMII yaitu organisasi yang berada dibawah naungan Nahdlatul Ulama (NU). PMII ini murni lahir dari Rahim NU.\r\n\r\n“Kami berharap kedepannya para kader PMII dapat menjadi pewaris ulama, yang nantinya akan menggantikan kami yang menjadi pengurus NU saat ini. Lalu kemudian kalau kalian menjadi pewaris NU pewaris ulama kalian itu termasuk santrinya Mbah Hasyim Asy ‘ari. Mbah Hasyim Asy ‘ari sudah mendoakan siapa-siapa yang menjadi santriku walaupun santrinya hanya santri dari PMII banomnya dari NU tapi didoakan akan khusnul khatimah akan bersama-sama Mbah Hasyim Asy ‘ari,” ujarnya.\r\n\r\nBACA JUGA:  Wabup Farhan ke PMII Ketapang: Pegang Teguh Nilai Keislaman dan Pancasila\r\nSementara itu, Firmansyah yang merupakan peserta Mapaba dengan penghargaan peserta terbaik selama mengikuti Mapaba mengaku kalau dirinya merasa senang setelah mengikuti Mapaba, selain dapat berkenalan dengan teman dari jurusan dan kampus lain dirinya juga mendapatkan ilmu dari para pemateri.\r\n\r\n“Dengan mengikuti PMII kami belajar berorganisasi yang dapat melatih rasa tanggung jawab, jiwa kepemimpinan, dan public speaking. Harapan saya dan lainnya yaitu kedepannya setelah mengikuti kegiatan MAPABA kami dapat berkontribusi untuk negeri, kedepannya juga PMII harus mampu memproteksi dirinya dan mengambil peran secara kolektif baik dalam masalah ekonomi, budaya, agama, politik, pendidikan dan teknologi,” tutupnya.', '2022-09-09 10:17:32', '2022-09-09 10:17:32'),
(15, 3, 'PMII Komisariat POLITAP Adakan Sosialisasi Pendidikan di Rumah Baca Gambut Harapan, Transmigrasi Sungai Besar', 'app/artikel/15-1662744043-0qkRY.jpg', 'auliya', 'PMII POLITAP - Pergerakan Mahasiswa Islam Indonesia (PMII) Komisariat Politeknik Negeri Ketapang (POLITAP) bersama Komisariat STAI Al- Haudl Ketapang menggelar kegiatan Sosialisasi Pendidikan di Rumah Baca Gambut Harapan di Desa Trans Sungai Besar, Ketapang, Sabtu (08/01/22).\r\n\r\nDikatakan Pengurus Rumah baca gambut harapan, Ichan Wahyudi pada saat diwawancarai komunitas ini berdiri dari inisiatif seorang pendamping program keluarga harapan Bapak Amir Hamzah.\r\n\r\n\"Harapan dari dibentuknya komunitas ini adalah untuk membantu anak anak yang berasal dari desa terutama di keluarga harapan di Trans Sungai Besar untuk belajar membaca,menulis,menghitung dan bermain\" kata Ichan.\r\n\r\nKetua Komisariat Politeknik Negeri Ketapang, Didit Priasnyah mengatakan kegiatan ini merupakan satu program kerja PMII POLITAP.\r\n\r\n\"Program ini di inisiasi dengan landasan rasa kepedulian dan komitmen PMII POLITAP atas taraf pendidikan di Indonesia, khususnya Kabupaten Ketapang\" ujar Didit.\r\n\r\nDitambahkan Didit, kegiatan sosialisasi kali ini kami konsep dengan kegiatan membaca, beajar, dan bermain agar anak-anak tidak merasa bosan.\r\n\r\n\"Harapannya dengan adanya sosialisasi ini bisa memacu dan memotivasi  semangat anak-anak negeri untuk selalu berliterasi dan menempuh jenjang pendidikan yang lebih baik. Khususnya untuk anak-anak Transmigrasi Sungai Besar\" tambah Didit.\r\n\r\nDalam acara yang diberi tema \"PMII UNTUK NEGERI\" ini, para kader PMII POLITAP memberikan bingkisan berupa paket lengkap alat tulis juga buku bacaan untuk anak anak dirumah baca tersebut, serta memberikan cat untuk rumah baca gambut harapan.\r\n\r\n\r\n\r\nPengurus rumah baca gambut harapan memberikan ucapan terimakasih kepada pengurus PMII Komisaraiat POLITAP dan STAI Al-Haudl Ketapang atas kunjungan, sosialisasi, dan juga barang barang yang telah di berikan untuk anak anak disini.\r\n\r\n\"Saya mewakili pengurus rumah baca, anak anak, dan para orang tua di Trans Sungai Besar merasa senang atas kunjungan dari pengurus PMII dan saya mewakili Rumah Baca Gambut Harapan mengucapkan terima kasih sebesar\" ujarnya.', '2022-09-09 10:20:43', '2022-09-09 10:20:43'),
(16, 2, 'Seminar Kemahasiswaan Dalam Rangka HARLAH PMII POLITAP KE-II sekaligus Pelantikan Pengurus Rayon Komisariat Politeknik Negeri Ketapang', 'app/artikel/16-1662745395-xozFg.png', 'Ifan Rifaldi', 'PMII POLITAP - Dalam Rangka HARLAH PMII Ke-II Pergerakan Mahasiswa Islam Indonesia (PMII) Komisariat Politeknik Negeri Ketapang (POLITAP)  mengadakan kegiatan Seminar Kemahasiswaan sekaligus pelantikan pengurus rayon di Hotel Grand Zury Ketapang,  Sabtu (23/10/2021).\r\n\r\nKetua Panitia Kegiatan, Adriansyah mengatakan kegiatan HARLAH ini dirangkai dengan tiga kegiatan yaitu Seminar Kemahasiswaan yang dirangkai dengan Pelantikan Pengurus Rayon Komisariat POLITAP, PMII Kasih (BANSOS), dan kegiatan Have Fun Holiday. \r\n\r\n\" Semoga dari kegiatan peringatan HARLAH ini dapat menumbuhkan rasa kepedulian terhadap sesama karena kegiatan HARLAH ini di agendakan untuk mengadakan BANSOS aksi penggalangan dana untuk membantu adik adik kita yang ada di panti asuhan, dan juga dari kegiatan ini dapat mempererat tali silaturahmi antar kader saling bertukar pikiran dan berbagi pengalaman satu sama lain \" tambah Adriansyah, dalam laporan Ketua Panitia. \r\n\r\nWakil Bupati Kabupaten Ketapang, H. Farhan SE., M. Si.  dalam pembukaan kegiatan acara ini mengatakan bahwa keberadaan gerakan mahasiswa dalam konteks sosisal politik tidak bisa dipandang sebelah mata, mahasiswa selalu dipertimbangkan oleh pemerintah dan berbagai kelompok kepentingan. PMII sebagai sebuah organisasi yang memberikan pengaruh dan dampak yang cukup besar dalam sejarah perjalanan bangsa\r\n\r\n\" Indonesia sejak dari masa penjajahan sampai kepada orde reformasi ini selaku penerus perjuangan dalam mengisi kemerdekaan Indonesia, PMII ini bertanggung jawab terhadap masa depan kehidupan bangsa dan negara\". ujar Farhan dalam pembukaan kegiatan, Sabtu (23/10/2021).\r\n\r\nFarhan juga menambahkan, pada kesempatan yang baik ini dirinya atas nama pribadi dan pemerintah Kabupaten Ketapang menyambut baik terselenggarakannya seminar kemahasiswaan ini. \r\n\r\n\"Untuk itu melalui seminar ini kader-kader PMII Kabupaten Ketapang harus terus berfikir kreatif , inovatif, dan adaptif membuka diri terhadap hal-hal yang baru namun tetap memegang teguh nilai-nilai keIslaman dalam Pancasila.\" tambahnya.\r\n\r\nHarapannya setelah dua tahun masa kepengurusan PMII Komisariat Politeknik Negeri Ketapang, para pengurus dan semua anggota tetap semangat dalam membangun organisasi.\r\n\r\n\"Banyak belajar berdiskusi baik membangun komunikasi dan relasi baik denan sesama kader PMII maupun dengan banom-banom Nahdlatul Ulama atau ormas lainnya. Selalu meminta arahan dan tentunya dari pengurus IKA PMII buat kegiatan-kegiatan yang kreatif dan menarik terus belajar dan mencari ilmu agar siap menjadi kader calon membimbing masa depan.\" harapnya.\r\n\r\nKegiatan dilanjutkan dengan pemotongan Tumpeng oleh Ketua PMII Komisariat POLITAP yang diserahkan langsung kepada Wakil Bupati Kabupaten Ketapang, Ketua Tanfidziah PCNU Kabupaten Ketapang, dan Ketua PC PMII Kabupaten Ketapang.\r\n\r\n\r\n\r\nPelantikan lima pengurus Rayon Komisariat Politeknik Negeri Ketapang yaitu Rayon Civil Engineering, Rayon Informatics Engineering, Rayon Eleltrical Engineering, Rayong Mining Engineering, dan Rayon Agriculture Engineering yang dibaiat langsung oleh Ketua PC PMII Kabupaten Ketapang, Sabtu (23/10/2021).', '2022-09-09 10:43:15', '2022-09-09 10:43:15');

-- --------------------------------------------------------

--
-- Table structure for table `komen`
--

CREATE TABLE `komen` (
  `id` int(11) NOT NULL,
  `id_artikel` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `isi` text,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `level` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `komen`
--

INSERT INTO `komen` (`id`, `id_artikel`, `nama`, `email`, `isi`, `created_at`, `updated_at`, `level`) VALUES
(22, 13, 'rifal', 'rifaldi@gmail.com', 'artikelnya bagus', '2022-09-09 10:41:34', '2022-09-09 10:41:34', 1),
(23, 13, 'IFAN RIFALDI', 'ifanrifaldi4703@gmail.com', 'terimakasih :)', '2022-09-09 10:42:05', '2022-09-09 10:42:05', 2);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `remember_token` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `username`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'IFAN RIFALDI', 'ifanrifaldi14@gmail.com', 'ifanrifaldi47', '$2y$10$6aztCm3RF3NtxafXyfnzIuSYJZpJfXZCF5lm4CmpiAL3OUCHlsR9u', NULL, '2022-08-27 01:01:49', '2022-09-05 06:59:26'),
(2, 'IFAN RIFALDI', 'ifanrifaldi4703@gmail.com', 'ifanrifaldi47', '$2y$10$XEqlKy2vsxpl2p2MK7Ui2.uCrHTWcDUdOV5lJLajfN3H.2RO4r5T2', NULL, '2022-09-09 07:28:00', '2022-09-09 16:47:33'),
(3, 'Auliya', 'auliya@gmail.com', 'auliya', '$2y$10$ZhXRXBoRawTPQ6kMRhfRSOy7XkDKBi10F//9Nl/9Z/bS8m9KTGVV.', NULL, '2022-09-09 10:18:36', '2022-09-09 10:18:36');

-- --------------------------------------------------------

--
-- Table structure for table `user_detail`
--

CREATE TABLE `user_detail` (
  `id` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `no_handphone` varchar(15) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_detail`
--

INSERT INTO `user_detail` (`id`, `id_user`, `no_handphone`, `created_at`, `updated_at`) VALUES
(1, 4, '+62089512581105', '2022-08-27 01:13:52', '2022-08-27 01:13:52'),
(2, 2, '+6289512581105', '2022-09-09 07:28:00', '2022-09-09 07:28:00'),
(3, 3, '+6289512581105', '2022-09-09 10:18:37', '2022-09-09 10:18:37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `komen`
--
ALTER TABLE `komen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_detail`
--
ALTER TABLE `user_detail`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `komen`
--
ALTER TABLE `komen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_detail`
--
ALTER TABLE `user_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
