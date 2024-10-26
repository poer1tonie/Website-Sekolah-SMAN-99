/*
SQLyog Professional v12.5.1 (64 bit)
MySQL - 10.4.24-MariaDB : Database - db_projek_akhir
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_projek_akhir` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `db_projek_akhir`;

/*Table structure for table `tbl_artikel` */

DROP TABLE IF EXISTS `tbl_artikel`;

CREATE TABLE `tbl_artikel` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(20) DEFAULT NULL,
  `judul` varchar(200) DEFAULT NULL,
  `isi_artikel` longtext DEFAULT NULL,
  `gambar` varchar(200) DEFAULT NULL,
  `tgl_buat` timestamp NULL DEFAULT current_timestamp(),
  `id_user` int(3) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbl_artikel` */

insert  into `tbl_artikel`(`id`,`category`,`judul`,`isi_artikel`,`gambar`,`tgl_buat`,`id_user`) values 
(4,'Prestasi','Artikel Pendidikan','<p><em>Reading&nbsp;</em>merupakan salah satu aspek yang dinilai dalam tes kemahiran bahasa Inggris seperti pada TOEFL atau pun IELTS.&nbsp;<em>Nah</em>, kalau berbicara tentang&nbsp;<em>reading&nbsp;</em>pasti tak lepas dari yang namanya kalimat dan teks bahasa Inggris.</p>\r\n<p>Pada umumnya, macam-macam teks yang akan kamu pelajari di artikel ini nggak jauh berbeda dengan jenis teks dalam bahasa Indonesia. Masing-masing teks tersebut memiliki tujuan/fungsi sosial masing-masing. Jadi,&nbsp;<em>yuk</em>&nbsp;kita cari tahu definisi, fungsi, struktur, dan contoh paragraf dari setiap teks-nya!</p>\r\n<p><strong>Pengertian Teks</strong></p>\r\n<p>Teks adalah sebuah tulisan yang disusun dengan kalimat yang memiliki konteks. Kalau dalam teori sastra, teks adalah segala benda yang dapat &ldquo;dibaca&rdquo;, baik benda tersebut berupa karya sastra, tanda jalan, atau gaya pakaian.</p>\r\n<p>Tapi, dalam hal ini, cakupannya hanya akan seputar &ldquo;tulisan&rdquo; saja ya,&nbsp;<em>guys</em>. Maka dari itu, setiap teks bahasa Inggris memiliki struktur dan kaidah kebahasaan (language feature) dalam penulisannya.</p>','66f243665bcd9.png','2024-09-24 11:43:18',1236),
(5,'Kegiatan','Camping atau Menginap di Sekolah','<p><em>For fun</em>&nbsp;dan untuk melatih kemandirian, pergi&nbsp;<em>camping</em>&nbsp;bersama kelompok pecinta alam atau pramuka bisa meninggalkan memori menyenangkan ketika sekolah. Jika lo malas untuk pergi jauh, tidak ada salahnya mencoba kegiatan seru di sekolah dengan menginap ketika kegiatan OSIS atau sekadar mengadakan kegiatan keakraban!&nbsp;</p>','66f243bfefc8d.png','2024-09-24 11:44:47',1236),
(6,'Kegiatan','Eksperimen Sains','<p>Tidak harus ketika belajar, melakukan eksperimen sains juga bisa dilakukan di luar jam pelajaran loh! Zaman sekarang, banyak toko yang menyediakan&nbsp;<em>science kit</em>&nbsp;sederhana dengan berbagai macam percobaan. Eksperimen sains menjadi kegiatan seru di sekolah yang tidak boleh lo lewatkan, ya!</p>','66f24400970ad.png','2024-09-24 11:45:52',1236),
(7,'Kegiatan','Go Green  ','<p>Lo bisa mencoba menanam pohon atau bibit tanaman lainnya di kebun sekolah yang telah disediakan sekolah. Selain belajar menyayangi alam dan udara sekitar akan lebih segar, merawat tumbuhan bisa menjadi&nbsp;<em>stress relief</em>&nbsp;lo ketika mumet belajar, loh! Tidak harus di kebun sekolah, kegiatan seru yang satu ini bisa lo mulai dengan merawat satu pot tanaman di kelas lo bersama teman-teman. Nantinya, satu kelas akan bertanggung jawab untuk merawat tumbuhan tersebut</p>','66f244378ad0b.png','2024-09-24 11:46:47',1236);

/*Table structure for table `tbl_chat` */

DROP TABLE IF EXISTS `tbl_chat`;

CREATE TABLE `tbl_chat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbl_chat` */

insert  into `tbl_chat`(`id`,`name`,`message`,`created_at`) values 
(3,'sss','afasfsa','2024-10-01 09:38:45'),
(15,'asdsad','asdasd','2024-10-01 10:45:32'),
(16,'sagala','cccc','2024-10-01 10:45:46'),
(17,'ddd','fasfas','2024-10-01 10:48:27'),
(18,'ddd','','2024-10-01 10:49:28'),
(19,'asdasd','asdsadsad','2024-10-01 10:49:45'),
(20,'velisx','dfgdfgfdg','2024-10-01 10:49:50'),
(21,'sdfdsf','sdfdsfds','2024-10-01 10:51:13'),
(22,'dgdfg','dfgfdg','2024-10-01 10:51:16'),
(23,'ddd','sdfdsf','2024-10-01 10:51:43'),
(24,'aku','sdfsdf','2024-10-01 10:53:19'),
(25,'aku','sdfsdfsfdsdfsd','2024-10-01 10:53:29'),
(26,'aku','asfsaf','2024-10-01 10:53:55'),
(27,'aku','dfgdfgfdg','2024-10-01 10:53:59'),
(28,'aku','dfgdfgfdg','2024-10-01 10:54:02'),
(29,'sagal','asdasdasd','2024-10-01 10:56:47'),
(30,'sagal','adssadasdfffff','2024-10-01 10:56:52');

/*Table structure for table `tbl_contacts` */

DROP TABLE IF EXISTS `tbl_contacts`;

CREATE TABLE `tbl_contacts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` text NOT NULL,
  `submitted_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbl_contacts` */

insert  into `tbl_contacts`(`id`,`name`,`email`,`message`,`submitted_at`) values 
(5,'admin','admin@gmail.com','eee','2024-09-22 16:42:24'),
(6,'admin','admin@gmail.com','zsadsa','2024-09-22 16:45:37');

/*Table structure for table `tbl_fasilitas` */

DROP TABLE IF EXISTS `tbl_fasilitas`;

CREATE TABLE `tbl_fasilitas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nm_fasilitas` varchar(200) DEFAULT NULL,
  `keterangan` text DEFAULT NULL,
  `gambar` varchar(200) DEFAULT NULL,
  `id_user` int(3) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbl_fasilitas` */

insert  into `tbl_fasilitas`(`id`,`nm_fasilitas`,`keterangan`,`gambar`,`id_user`) values 
(7,'Gedung Sekolah','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod..','66f194709f4f3.png',1234),
(8,'Lapangan Olah Raga','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod..','66f1948d6603f.png',1234),
(9,'Lab Komputer','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod..','66f194a4a427a.png',1234),
(10,'Mushola','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod..','66f194b993ca6.png',1234),
(11,'Lapangan Parkir','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod..','66f194de6dcc4.png',1234),
(12,'Ruang Serbaguna','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod..','66f194fc6fbc0.png',1234);

/*Table structure for table `tbl_guru` */

DROP TABLE IF EXISTS `tbl_guru`;

CREATE TABLE `tbl_guru` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama_guru` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `telepon` varchar(12) DEFAULT NULL,
  `gambar` varchar(100) DEFAULT NULL,
  `id_user` int(3) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbl_guru` */

insert  into `tbl_guru`(`id`,`nama_guru`,`email`,`alamat`,`telepon`,`gambar`,`id_user`) values 
(2,'Ariantonius Sagala','admin@gmail.com','Komplek Bumi Orange B2, No.16, Cimekar, CIleunyi','081322692568','66f16c69c5779.png',1234);

/*Table structure for table `tbl_pengunjung` */

DROP TABLE IF EXISTS `tbl_pengunjung`;

CREATE TABLE `tbl_pengunjung` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(50) NOT NULL,
  `tanggal_kunjungan` datetime NOT NULL,
  `user_agent` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbl_pengunjung` */

insert  into `tbl_pengunjung`(`id`,`ip_address`,`tanggal_kunjungan`,`user_agent`) values 
(3,'::1','2024-10-01 03:59:41','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36 Edg/129.0.0.0');

/*Table structure for table `tbl_profil` */

DROP TABLE IF EXISTS `tbl_profil`;

CREATE TABLE `tbl_profil` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(200) DEFAULT NULL,
  `isi_profil` text DEFAULT NULL,
  `jenis` varchar(100) DEFAULT NULL,
  `gambar` varchar(200) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbl_profil` */

insert  into `tbl_profil`(`id`,`judul`,`isi_profil`,`jenis`,`gambar`,`id_user`) values 
(13,'Sejarah berdirinya Sekolah SMK Maju terus','<p>Sebuah sekolah vokasi unggulan yang menyajikan warna dan nuansa yang berbeda sebagai sebuah model sekolah masa depan dengan paradigma baru &ldquo;pendidikan yang berorientasi kepada manfaat (<em>BENEFIT ORIENTATION</em>)&rdquo; ; berbasis kompetensi keahlian terapan yang berkualitas tinggi sesuai tuntutan kualifikasi dunia usaha dan industri ; Production Based Education : Kurikulum dirancang/didisain dengan melibatkan dunia usaha dan industri yang relevan dengan program keahlian sehingga &ldquo;lulusannya langsung kerja.&rdquo; ; Entrepreneurial thinking adalah juga merupakan bagian dalam proses pendidikan dan pelatihan di SMK Medikacom agar lulusannya mampu berwirausaha sesuai kompetensinya (promoting excellent diploma which satisfy industry qualification as well as having an entrepreneurship minset).</p><p>Memperhatikan peluang kebutuhan akan SDM dunia usaha dan industri, SMK XXX telah membuka dan mengembangkan berbagai program keahlian yang juga telah terakreditasi &ldquo;A&rdquo; antara lain :</p><p>-Farmasi<br>-Rekayasa Perangkat Lunak<br>-Teknik Komputer Jaringan<br>-Teknik Kendaraan Ringan<br>-Teknik Sepeda Motor<br>-Akuntasi.<br>-Teknik Pemesinanan.<br>-Tata Boga.<br>-Bisnis Retail.<br>-Unit Perjalanan Wisata.<br>-Manajemen Logistik.</p><p>Majulah Pendidikan indonesiaku Tercinta&hellip;.. !</p>','Sejarah','66f235a60bc22.png',NULL),
(14,'Visi & Misi','<h5>Visi</h5><p>Untuk mewujudkan peta peran SMK MedikaCom sebagai Pusat Keunggulan dengan pertumbuhan yang berkelanjutan (sustainable growth) di dalam lingkungan globalisasi, telah ditetapkan Visi, Misi, dan Tujuan Jangka Menengah dalam kurun waktu 5 tahun kedepan yaitu :</p><p>PADA TAHUN 2025 MENJADI PUSAT PENDIDIKAN VOKASI YANG UNGGUL DALAM MENGEMBANGKAN KETERAMPILAN BERBASIS INDUSTRI DAN KEMANDIRIAN YANG DILANDASI AKHLAK MULIA, BERKEPRIBADIAN KEBANGSAAN DAN BERWAWASAN LINGKUNGAN</p><h5>Misi</h5><div><ol><li>Menumbuhkan karakter, system nilai dan budaya kerja berbasis industri, untuk mewujudkan jiwa sekolah yang kreatif, berprestasi, inovatif dan demokratis.</li><li>Mengembangkan dan menerapkan pembelajaran berbasis project (<em>Learning Project Based</em>) dan berbasis digital (<em>School Digital Based</em>).</li><li>Menumbuhkan dan mendorong keunggulan dalam penerapan ilmu pengetahuan, teknologi dan seni.</li><li>Merevitalisasi infrastruktur sarana-prasarana pembelajaran,&nbsp;<em>workshop, laboratory</em>&nbsp;BERSTANDAR INDUSTRI dalam rangka pengembangan &ldquo;<em>advanced training &amp; certification centre</em>&nbsp;dan&nbsp;<em>teaching factory</em>&nbsp;sebagai&nbsp;<em>Centre Of Excellence</em>&rdquo;</li><li>Melaksanakan pengembangan dan perluasan jaringan kerjasama &ldquo;mitra industri DUDIKA&rdquo; dalam rangka mendukung program LULUSAN ZERO JOBLESS ; (&nbsp;<strong>B</strong>ekerja,&nbsp;<strong>M</strong>elanjutkan dan&nbsp;<strong>W</strong>irausaha )</li></ol></div>','Visi','66f235df6f2ab.png',NULL),
(15,'Sambutan Kepala Sekolah','<p><em>Assalamu&rsquo;alaikum Warahmatullahi Wabarakatuh,</em></p><p>Puji syukur kami panjatkan ke hadirat Allah SWT yang telah memberikan rahmat dan karunia-Nya, sehingga kami dapat menghadirkan website ini sebagai sarana informasi dan komunikasi antara sekolah, siswa, orang tua, serta masyarakat umum.</p><p>Selamat datang di website resmi <strong>SMK Maju Terus</strong>. Website ini merupakan wujud dari komitmen kami untuk terus mengikuti perkembangan teknologi informasi di era digital, serta menyediakan layanan informasi yang cepat, akurat, dan mudah diakses.</p><p>Dengan adanya website ini, kami berharap dapat mempermudah akses informasi mengenai program, kegiatan, serta pencapaian sekolah kepada seluruh warga sekolah dan masyarakat luas. Selain itu, kami juga ingin menjalin komunikasi yang lebih terbuka dengan orang tua siswa, sehingga bersama-sama kita dapat memberikan pendidikan yang terbaik untuk putra-putri kita tercinta.</p><p>Kami mengajak semua pihak untuk memanfaatkan website ini secara positif dan bijak. Semoga informasi yang tersaji di sini dapat memberikan manfaat bagi kita semua, dan semakin memperkuat sinergi dalam mewujudkan generasi yang unggul dan berakhlak mulia.</p><p>Terima kasih atas perhatian dan dukungannya.</p><p>Wassalamu&rsquo;alaikum Warahmatullahi Wabarakatuh.</p><p>Kepala Sekolah SMK Maju Terus</p>','Sambutan','66f236abb549f.png',NULL);

/*Table structure for table `tbl_sekolah` */

DROP TABLE IF EXISTS `tbl_sekolah`;

CREATE TABLE `tbl_sekolah` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_sekolah` varchar(200) DEFAULT NULL,
  `motto` varchar(200) DEFAULT NULL,
  `alamat` varchar(200) DEFAULT NULL,
  `telepon` varchar(200) DEFAULT NULL,
  `wa` varchar(200) DEFAULT NULL,
  `instagram` varchar(200) DEFAULT NULL,
  `facebook` varchar(200) DEFAULT NULL,
  `twitter` varchar(200) DEFAULT NULL,
  `youtube` varchar(200) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `gambar` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbl_sekolah` */

insert  into `tbl_sekolah`(`id`,`nama_sekolah`,`motto`,`alamat`,`telepon`,`wa`,`instagram`,`facebook`,`twitter`,`youtube`,`email`,`gambar`) values 
(1,'SMK Maju Terus','Enabling you to Industri','bandung x3','08122240721','081','https://instagram.com/kami','htttp://','twitter','http:/youtube.com','info@majuterus.sch.id','66f6ad6ad8ac8.png');

/*Table structure for table `tbl_slide` */

DROP TABLE IF EXISTS `tbl_slide`;

CREATE TABLE `tbl_slide` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(225) DEFAULT NULL,
  `teks` text NOT NULL,
  `gambar` varchar(200) DEFAULT NULL,
  `tgl_create` timestamp NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbl_slide` */

insert  into `tbl_slide`(`id`,`judul`,`teks`,`gambar`,`tgl_create`) values 
(7,'Temukan Masa depan Gemilang','Lorem ipsum dolor sit amet, consectetur adipiscing elit.','66f18e9eb5087.png','2024-09-23 22:51:58'),
(8,'Temukan Masa depan Gemilang 2','Lorem ipsum dolor sit amet, consectetur adipiscing elit.','66f18ebab5816.png','2024-09-23 22:52:26'),
(9,'Temukan Masa depan Gemilang 3','Lorem ipsum dolor sit amet, consectetur adipiscing elit.','66f18edb4fe55.png','2024-09-23 22:52:59');

/*Table structure for table `tbl_user` */

DROP TABLE IF EXISTS `tbl_user`;

CREATE TABLE `tbl_user` (
  `id_user` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(25) DEFAULT NULL,
  `passw` varchar(32) DEFAULT NULL,
  `nama_user` varchar(35) DEFAULT NULL,
  `level` enum('admin','Operator') DEFAULT NULL,
  `gambar` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=1238 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbl_user` */

insert  into `tbl_user`(`id_user`,`username`,`passw`,`nama_user`,`level`,`gambar`) values 
(1236,'admin','21232f297a57a5a743894a0e4a801fc3','Arianto sagala','admin','66f1833b13a2a.png'),
(1237,'operator','4b583376b2767b923c3e1da60d10de59','Operatorku','admin','66f1839b550f7.png');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
