-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 07, 2016 at 12:02 PM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id_admin` int(5) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`) VALUES
(1, 'admin', 'admin'),
(2, 'ad', 'ad');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `cat_id` int(5) NOT NULL,
  `cat_title` varchar(32) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`) VALUES
(1, 'Pendalaman Iman'),
(2, 'Acara Gereja'),
(3, 'Kesaksian');

-- --------------------------------------------------------

--
-- Table structure for table `isi_berita`
--

CREATE TABLE IF NOT EXISTS `isi_berita` (
  `id_berita` int(5) NOT NULL,
  `id_kategori` int(5) NOT NULL,
  `judul` varchar(32) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `gambar` longtext,
  `isi` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `isi_berita`
--

INSERT INTO `isi_berita` (`id_berita`, `id_kategori`, `judul`, `tanggal`, `gambar`, `isi`) VALUES
(1, 2, 'Pastor Message 1', '2016-01-01', 'img/1.jpg', 'kesaksian anak yang lahir di keluarga bermasalah dalam berumah tangga'),
(2, 1, 'kesaksian adri', '2016-01-05', 'img/1.jpg', 'kesaksian anak yang lahir di keluarga bermasalah dalam berumah tangga'),
(3, 1, 'kesaksian kosi', '2016-01-19', 'img/1.jpg', 'kesaksian anak yang lahir di keluarga bermasalah dalam berumah tangga\r\nkesaksian anak yang lahir di keluarga bermasalah dalam berumah tangga\r\nkesaksian anak yang lahir di keluarga bermasalah dalam berumah tangga\r\nkesaksian anak yang lahir di keluarga bermasalah dalam berumah tangga\r\nkesaksian anak yang lahir di keluarga bermasalah dalam berumah tangga\r\nkesaksian anak yang lahir di keluarga bermasalah dalam berumah tangga\r\nkesaksian anak yang lahir di keluarga bermasalah dalam berumah tangga\r\nkesaksian anak yang lahir di keluarga bermasalah dalam berumah tangga\r\nkesaksian anak yang lahir di keluarga bermasalah dalam berumah tangga\r\nkesaksian anak yang lahir di keluarga bermasalah dalam berumah tangga\r\nkesaksian anak yang lahir di keluarga bermasalah dalam berumah tangga\r\nkesaksian anak yang lahir di keluarga bermasalah dalam berumah tangga\r\nkesaksian anak yang lahir di keluarga bermasalah dalam berumah tangga\r\nkesaksian anak yang lahir di keluarga bermasalah dalam berumah tangga\r\nkesaksian anak yang lahir di keluarga bermasalah dalam berumah tangga\r\nkesaksian anak yang lahir di keluarga bermasalah dalam berumah tangga\r\nkesaksian anak yang lahir di keluarga bermasalah dalam berumah tangga\r\nkesaksian anak yang lahir di keluarga bermasalah dalam berumah tangga\r\nkesaksian anak yang lahir di keluarga bermasalah dalam berumah tangga\r\nkesaksian anak yang lahir di keluarga bermasalah dalam berumah tangga\r\nkesaksian anak yang lahir di keluarga bermasalah dalam berumah tangga\r\nkesaksian anak yang lahir di keluarga bermasalah dalam berumah tangga\r\nkesaksian anak yang lahir di keluarga bermasalah dalam berumah tangga\r\nkesaksian anak yang lahir di keluarga bermasalah dalam berumah tangga'),
(4, 1, 'kesaksian feli', '2016-01-10', 'img/1.jpg', 'kesaksian anak yang lahir di keluarga bermasalah dalam berumah tangga'),
(5, 1, 'kesaksian yuli', '2016-01-27', 'img/1.jpg', 'kesaksian anak yang lahir di keluarga bermasalah dalam berumah tangga'),
(6, 1, 'kesaksian rudi', '2016-05-12', 'img/1.jpg', 'asdfsdfasdfasfdas dsafasfd																'),
(7, 2, 'pesan pastor rani', '2016-03-02', 'img/1.jpg', 'ajkhdlkasjhf jkdslahd fjsadhkf ljashdk jfhaljhfljash flkjah sfjahkjfhsjkfh kjsahf jshkjla hfaslj hfjkahsl jfasj.\r\najslfjh sadlj hfj hljash fjlh alkjh askjfhaskjf haskjl fhjas hffkja shfkljhjalfhaljd hfj halfasf 				'),
(8, 2, 'pesan pastor steven', '2016-03-02', 'img/1.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce id quam urna. Cras eleifend tortor at bibendum consectetur. Donec vestibulum libero nec velit fringilla, quis luctus lorem interdum. Donec vel euismod libero. Aenean sagittis commodo est, mattis ultrices mi scelerisque a. In rhoncus lacus et ligula fringilla pretium. Suspendisse eu sem egestas, viverra tortor ac, euismod arcu. Nullam velit orci, bibendum sodales nisl id, egestas tristique libero. Vestibulum faucibus eleifend libero non convallis. In placerat euismod nibh ac commodo. Suspendisse tincidunt volutpat turpis, sed tincidunt mi suscipit eu. Praesent sapien felis, sagittis vitae metus at, facilisis tincidunt elit.\r\n\r\nDonec et ligula purus. Nam sed tempor ligula, sed bibendum ante. Phasellus odio eros, ultricies vestibulum tempor nec, efficitur non nisi. Pellentesque orci nulla, convallis in mi id, vehicula porta magna. Sed et pulvinar tortor. Nullam ac sem non orci aliquet scelerisque. Fusce mollis at nulla sit amet dapibus. Fusce et sagittis turpis.\r\n\r\nVivamus posuere tincidunt sollicitudin. Donec consectetur cursus nisl, non dignissim lorem sodales semper. Proin vestibulum gravida massa, vel euismod magna placerat at. Nulla eget sapien sit amet nisl dignissim consequat in eget ligula. Phasellus facilisis neque eget euismod consectetur. Fusce interdum commodo tortor non ornare. Phasellus dapibus erat eget diam consequat, eget dictum velit ultrices. Curabitur mattis blandit mi, sed feugiat ante feugiat quis.\r\n\r\nQuisque nec leo suscipit, fermentum urna eu, efficitur odio. Donec facilisis commodo facilisis. Aliquam vel erat in elit sodales semper. In hac habitasse platea dictumst. Sed elementum luctus dignissim. Phasellus ultrices augue nunc. Maecenas eu mattis erat, quis faucibus tortor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed egestas ligula non neque feugiat, sed finibus justo accumsan. Duis vitae venenatis sem, vitae cursus lacus. Vivamus ultrices lectus orci, non mattis justo finibus ac. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.\r\n\r\nNullam non vestibulum ligula, sit amet efficitur turpis. Phasellus et placerat neque. Nullam ullamcorper elit vel volutpat commodo. Vestibulum semper, lacus eget feugiat malesuada, augue risus aliquet arcu, et laoreet mauris mi at nibh. Vestibulum neque neque, eleifend quis laoreet eu, pretium pulvinar erat. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vivamus ac efficitur ante. In iaculis et nunc vel accumsan.					'),
(9, 3, 'Tabrakan maut', '2016-05-04', 'img/blue-abstract-background.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In pellentesque tellus in odio vulputate tristique. In non neque vehicula, gravida odio eget, maximus nisl. In hac habitasse platea dictumst. Nulla at dictum sapien. Phasellus molestie eget sem et pharetra. Quisque ut velit ac leo vulputate tempor eget et leo. Cras ultrices magna sem, vitae eleifend lorem sagittis quis.\r\n\r\nIn finibus augue sed augue pharetra dignissim. Pellentesque laoreet tellus quis dolor accumsan, ac scelerisque leo interdum. Nam sed dapibus sapien. Maecenas purus tortor, tristique in massa a, fermentum vehicula eros. Fusce sodales erat quis libero iaculis luctus. Nulla facilisi. Aliquam feugiat in ligula ut venenatis. Nam auctor justo et nibh ultrices, quis laoreet libero pharetra. Integer malesuada pharetra risus, vitae vehicula felis iaculis sit amet. In hac habitasse platea dictumst. Fusce auctor condimentum porttitor. Maecenas vitae lectus gravida, porta ex eu, elementum nunc. Fusce tincidunt consequat lacinia. Cras turpis lacus, tincidunt sed massa eu, molestie lobortis risus. Nunc porttitor vestibulum sagittis.\r\n\r\nPhasellus pellentesque sagittis consequat. Sed sodales, metus ac fermentum cursus, purus velit consectetur ligula, sit amet ornare nibh dolor sed nunc. Praesent quis purus vel leo malesuada pulvinar. Proin eu ex vitae sapien placerat maximus. Vivamus pretium faucibus lectus eget volutpat. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nulla neque lorem, volutpat ut rutrum quis, rutrum non ante. Curabitur blandit non enim in aliquet. Aliquam faucibus ante ac magna lobortis dignissim. Nunc id diam massa. Praesent elementum nisl in facilisis auctor. Vivamus vestibulum, risus imperdiet tempor bibendum, odio felis bibendum est, at tempus nulla sem ut erat. Sed tincidunt quam eu ante viverra, quis elementum dolor dignissim. Cras erat quam, posuere vitae magna et, molestie hendrerit urna. Proin id tempus enim. Aliquam id lorem dolor.\r\n\r\nVestibulum dapibus mi ut elit sollicitudin, vitae volutpat justo laoreet. In hac habitasse platea dictumst. Mauris lacus ipsum, hendrerit a nibh a, commodo vulputate ipsum. Quisque vel facilisis nulla. Pellentesque rutrum leo erat, sed congue mi consequat ut. Sed lacus libero, accumsan at fermentum vitae, lacinia at neque. Proin molestie nibh vitae tempor elementum. Duis vitae erat non augue feugiat porttitor. Aenean sagittis ante a eleifend mattis. Etiam sed nibh purus. Pellentesque laoreet accumsan rhoncus.\r\n\r\nAenean consequat venenatis finibus. Etiam ut velit congue, convallis massa quis, hendrerit mauris. Pellentesque varius nisl at facilisis blandit. Pellentesque varius laoreet elit a bibendum. Duis lacinia neque ut aliquam accumsan. Nullam ac feugiat ipsum. Pellentesque feugiat, tellus id condimentum finibus, diam risus vehicula lectus, ac laoreet eros velit aliquam sem. Integer ultrices augue sit amet consectetur tincidunt. Mauris hendrerit eros at erat sodales lacinia. Proin sit amet sem vitae arcu euismod molestie posuere nec nunc. Phasellus vel gravida libero, vel tempus leo. Phasellus ut felis pretium, volutpat tellus in, mattis arcu. Morbi a leo id enim maximus elementum interdum eu nisl. Pellentesque rhoncus tempor quam vitae viverra.'),
(10, 3, 'Tabrak lari', '2016-05-04', 'img/0cd84c7c73701a237e88813971b2ff10.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In pellentesque tellus in odio vulputate tristique. In non neque vehicula, gravida odio eget, maximus nisl. In hac habitasse platea dictumst. Nulla at dictum sapien. Phasellus molestie eget sem et pharetra. Quisque ut velit ac leo vulputate tempor eget et leo. Cras ultrices magna sem, vitae eleifend lorem sagittis quis.\r\n\r\nIn finibus augue sed augue pharetra dignissim. Pellentesque laoreet tellus quis dolor accumsan, ac scelerisque leo interdum. Nam sed dapibus sapien. Maecenas purus tortor, tristique in massa a, fermentum vehicula eros. Fusce sodales erat quis libero iaculis luctus. Nulla facilisi. Aliquam feugiat in ligula ut venenatis. Nam auctor justo et nibh ultrices, quis laoreet libero pharetra. Integer malesuada pharetra risus, vitae vehicula felis iaculis sit amet. In hac habitasse platea dictumst. Fusce auctor condimentum porttitor. Maecenas vitae lectus gravida, porta ex eu, elementum nunc. Fusce tincidunt consequat lacinia. Cras turpis lacus, tincidunt sed massa eu, molestie lobortis risus. Nunc porttitor vestibulum sagittis.\r\n\r\nPhasellus pellentesque sagittis consequat. Sed sodales, metus ac fermentum cursus, purus velit consectetur ligula, sit amet ornare nibh dolor sed nunc. Praesent quis purus vel leo malesuada pulvinar. Proin eu ex vitae sapien placerat maximus. Vivamus pretium faucibus lectus eget volutpat. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nulla neque lorem, volutpat ut rutrum quis, rutrum non ante. Curabitur blandit non enim in aliquet. Aliquam faucibus ante ac magna lobortis dignissim. Nunc id diam massa. Praesent elementum nisl in facilisis auctor. Vivamus vestibulum, risus imperdiet tempor bibendum, odio felis bibendum est, at tempus nulla sem ut erat. Sed tincidunt quam eu ante viverra, quis elementum dolor dignissim. Cras erat quam, posuere vitae magna et, molestie hendrerit urna. Proin id tempus enim. Aliquam id lorem dolor.\r\n\r\nVestibulum dapibus mi ut elit sollicitudin, vitae volutpat justo laoreet. In hac habitasse platea dictumst. Mauris lacus ipsum, hendrerit a nibh a, commodo vulputate ipsum. Quisque vel facilisis nulla. Pellentesque rutrum leo erat, sed congue mi consequat ut. Sed lacus libero, accumsan at fermentum vitae, lacinia at neque. Proin molestie nibh vitae tempor elementum. Duis vitae erat non augue feugiat porttitor. Aenean sagittis ante a eleifend mattis. Etiam sed nibh purus. Pellentesque laoreet accumsan rhoncus.\r\n\r\nAenean consequat venenatis finibus. Etiam ut velit congue, convallis massa quis, hendrerit mauris. Pellentesque varius nisl at facilisis blandit. Pellentesque varius laoreet elit a bibendum. Duis lacinia neque ut aliquam accumsan. Nullam ac feugiat ipsum. Pellentesque feugiat, tellus id condimentum finibus, diam risus vehicula lectus, ac laoreet eros velit aliquam sem. Integer ultrices augue sit amet consectetur tincidunt. Mauris hendrerit eros at erat sodales lacinia. Proin sit amet sem vitae arcu euismod molestie posuere nec nunc. Phasellus vel gravida libero, vel tempus leo. Phasellus ut felis pretium, volutpat tellus in, mattis arcu. Morbi a leo id enim maximus elementum interdum eu nisl. Pellentesque rhoncus tempor quam vitae viverra.'),
(11, 3, 'Pertumbuhan Ekonomi Tahun 2016', '2016-05-04', 'img/abstract_white_background_1__by_fudskit-d6ajtq8.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In pellentesque tellus in odio vulputate tristique. In non neque vehicula, gravida odio eget, maximus nisl. In hac habitasse platea dictumst. Nulla at dictum sapien. Phasellus molestie eget sem et pharetra. Quisque ut velit ac leo vulputate tempor eget et leo. Cras ultrices magna sem, vitae eleifend lorem sagittis quis.\r\n\r\nIn finibus augue sed augue pharetra dignissim. Pellentesque laoreet tellus quis dolor accumsan, ac scelerisque leo interdum. Nam sed dapibus sapien. Maecenas purus tortor, tristique in massa a, fermentum vehicula eros. Fusce sodales erat quis libero iaculis luctus. Nulla facilisi. Aliquam feugiat in ligula ut venenatis. Nam auctor justo et nibh ultrices, quis laoreet libero pharetra. Integer malesuada pharetra risus, vitae vehicula felis iaculis sit amet. In hac habitasse platea dictumst. Fusce auctor condimentum porttitor. Maecenas vitae lectus gravida, porta ex eu, elementum nunc. Fusce tincidunt consequat lacinia. Cras turpis lacus, tincidunt sed massa eu, molestie lobortis risus. Nunc porttitor vestibulum sagittis.\r\n\r\nPhasellus pellentesque sagittis consequat. Sed sodales, metus ac fermentum cursus, purus velit consectetur ligula, sit amet ornare nibh dolor sed nunc. Praesent quis purus vel leo malesuada pulvinar. Proin eu ex vitae sapien placerat maximus. Vivamus pretium faucibus lectus eget volutpat. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nulla neque lorem, volutpat ut rutrum quis, rutrum non ante. Curabitur blandit non enim in aliquet. Aliquam faucibus ante ac magna lobortis dignissim. Nunc id diam massa. Praesent elementum nisl in facilisis auctor. Vivamus vestibulum, risus imperdiet tempor bibendum, odio felis bibendum est, at tempus nulla sem ut erat. Sed tincidunt quam eu ante viverra, quis elementum dolor dignissim. Cras erat quam, posuere vitae magna et, molestie hendrerit urna. Proin id tempus enim. Aliquam id lorem dolor.\r\n\r\nVestibulum dapibus mi ut elit sollicitudin, vitae volutpat justo laoreet. In hac habitasse platea dictumst. Mauris lacus ipsum, hendrerit a nibh a, commodo vulputate ipsum. Quisque vel facilisis nulla. Pellentesque rutrum leo erat, sed congue mi consequat ut. Sed lacus libero, accumsan at fermentum vitae, lacinia at neque. Proin molestie nibh vitae tempor elementum. Duis vitae erat non augue feugiat porttitor. Aenean sagittis ante a eleifend mattis. Etiam sed nibh purus. Pellentesque laoreet accumsan rhoncus.\r\n\r\nAenean consequat venenatis finibus. Etiam ut velit congue, convallis massa quis, hendrerit mauris. Pellentesque varius nisl at facilisis blandit. Pellentesque varius laoreet elit a bibendum. Duis lacinia neque ut aliquam accumsan. Nullam ac feugiat ipsum. Pellentesque feugiat, tellus id condimentum finibus, diam risus vehicula lectus, ac laoreet eros velit aliquam sem. Integer ultrices augue sit amet consectetur tincidunt. Mauris hendrerit eros at erat sodales lacinia. Proin sit amet sem vitae arcu euismod molestie posuere nec nunc. Phasellus vel gravida libero, vel tempus leo. Phasellus ut felis pretium, volutpat tellus in, mattis arcu. Morbi a leo id enim maximus elementum interdum eu nisl. Pellentesque rhoncus tempor quam vitae viverra.'),
(12, 3, 'Pencurian', '2016-05-04', 'img/selengkapnya.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In pellentesque tellus in odio vulputate tristique. In non neque vehicula, gravida odio eget, maximus nisl. In hac habitasse platea dictumst. Nulla at dictum sapien. Phasellus molestie eget sem et pharetra. Quisque ut velit ac leo vulputate tempor eget et leo. Cras ultrices magna sem, vitae eleifend lorem sagittis quis.\r\n\r\nIn finibus augue sed augue pharetra dignissim. Pellentesque laoreet tellus quis dolor accumsan, ac scelerisque leo interdum. Nam sed dapibus sapien. Maecenas purus tortor, tristique in massa a, fermentum vehicula eros. Fusce sodales erat quis libero iaculis luctus. Nulla facilisi. Aliquam feugiat in ligula ut venenatis. Nam auctor justo et nibh ultrices, quis laoreet libero pharetra. Integer malesuada pharetra risus, vitae vehicula felis iaculis sit amet. In hac habitasse platea dictumst. Fusce auctor condimentum porttitor. Maecenas vitae lectus gravida, porta ex eu, elementum nunc. Fusce tincidunt consequat lacinia. Cras turpis lacus, tincidunt sed massa eu, molestie lobortis risus. Nunc porttitor vestibulum sagittis.\r\n\r\nPhasellus pellentesque sagittis consequat. Sed sodales, metus ac fermentum cursus, purus velit consectetur ligula, sit amet ornare nibh dolor sed nunc. Praesent quis purus vel leo malesuada pulvinar. Proin eu ex vitae sapien placerat maximus. Vivamus pretium faucibus lectus eget volutpat. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nulla neque lorem, volutpat ut rutrum quis, rutrum non ante. Curabitur blandit non enim in aliquet. Aliquam faucibus ante ac magna lobortis dignissim. Nunc id diam massa. Praesent elementum nisl in facilisis auctor. Vivamus vestibulum, risus imperdiet tempor bibendum, odio felis bibendum est, at tempus nulla sem ut erat. Sed tincidunt quam eu ante viverra, quis elementum dolor dignissim. Cras erat quam, posuere vitae magna et, molestie hendrerit urna. Proin id tempus enim. Aliquam id lorem dolor.\r\n\r\nVestibulum dapibus mi ut elit sollicitudin, vitae volutpat justo laoreet. In hac habitasse platea dictumst. Mauris lacus ipsum, hendrerit a nibh a, commodo vulputate ipsum. Quisque vel facilisis nulla. Pellentesque rutrum leo erat, sed congue mi consequat ut. Sed lacus libero, accumsan at fermentum vitae, lacinia at neque. Proin molestie nibh vitae tempor elementum. Duis vitae erat non augue feugiat porttitor. Aenean sagittis ante a eleifend mattis. Etiam sed nibh purus. Pellentesque laoreet accumsan rhoncus.\r\n\r\nAenean consequat venenatis finibus. Etiam ut velit congue, convallis massa quis, hendrerit mauris. Pellentesque varius nisl at facilisis blandit. Pellentesque varius laoreet elit a bibendum. Duis lacinia neque ut aliquam accumsan. Nullam ac feugiat ipsum. Pellentesque feugiat, tellus id condimentum finibus, diam risus vehicula lectus, ac laoreet eros velit aliquam sem. Integer ultrices augue sit amet consectetur tincidunt. Mauris hendrerit eros at erat sodales lacinia. Proin sit amet sem vitae arcu euismod molestie posuere nec nunc. Phasellus vel gravida libero, vel tempus leo. Phasellus ut felis pretium, volutpat tellus in, mattis arcu. Morbi a leo id enim maximus elementum interdum eu nisl. Pellentesque rhoncus tempor quam vitae viverra.');

-- --------------------------------------------------------

--
-- Table structure for table `jabatan`
--

CREATE TABLE IF NOT EXISTS `jabatan` (
  `id_jabatan` int(5) NOT NULL,
  `nama_jabatan` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jabatan`
--

INSERT INTO `jabatan` (`id_jabatan`, `nama_jabatan`) VALUES
(1, 'Ketua Youth'),
(2, 'Ketua COOL'),
(3, 'Ketua WBI');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE IF NOT EXISTS `jadwal` (
  `id_jadwal` int(5) NOT NULL,
  `id_tempat` int(5) NOT NULL,
  `ibadah` varchar(32) NOT NULL,
  `hari` varchar(10) NOT NULL,
  `keterangan` text NOT NULL,
  `mulai` time(4) NOT NULL,
  `selesai` time(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` (`id_jadwal`, `id_tempat`, `ibadah`, `hari`, `keterangan`, `mulai`, `selesai`) VALUES
(1, 1, 'Kebaktian 1', 'Minggu', 'Disertai dengan sekolah minggu', '07:00:00.0000', '09:00:00.0000'),
(2, 1, 'Kebaktian 2', 'Minggu', 'Disertai dengan sekolah minggu', '09:00:00.0000', '11:00:00.0000'),
(3, 1, 'Kebaktian 3', 'Minggu', 'Disertai dengan sekolah minggu', '11:00:00.0000', '13:00:00.0000'),
(4, 1, 'Kebaktian 4', 'Minggu', 'Disertai dengan sekolah minggu', '14:30:00.0000', '16:30:00.0000'),
(5, 1, 'Kebaktian 5', 'Minggu', 'Disertai dengan sekolah minggu', '17:00:00.0000', '19:00:00.0000'),
(6, 1, 'Kebaktian 6', 'Minggu', 'Disertai dengan sekolah minggu', '19:00:00.0000', '21:00:00.0000'),
(7, 2, 'Kebaktian 1', 'Minggu', 'Disertai dengan sekolah minggu', '07:30:00.0000', '09:30:00.0000'),
(8, 2, 'Kebaktian 2', 'Minggu', 'Disertai dengan sekolah minggu', '10:00:00.0000', '12:00:00.0000'),
(16, 1, '1', 'kamis', 'ibadah minggu', '18:31:00.0000', '19:35:00.0000');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE IF NOT EXISTS `kategori` (
  `id_kategori` int(5) NOT NULL,
  `nama_kategori` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'kesaksian'),
(2, 'pesan_pastor'),
(3, 'Berita');

-- --------------------------------------------------------

--
-- Table structure for table `kegiatan_komunitas`
--

CREATE TABLE IF NOT EXISTS `kegiatan_komunitas` (
  `id_kegiatan` int(5) NOT NULL,
  `id_komunitas` int(5) NOT NULL,
  `id_tempat` int(5) NOT NULL,
  `id_pelayan` int(5) NOT NULL,
  `nama_kegiatan` varchar(32) NOT NULL,
  `hari` varchar(10) NOT NULL,
  `waktu` time(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kegiatan_komunitas`
--

INSERT INTO `kegiatan_komunitas` (`id_kegiatan`, `id_komunitas`, `id_tempat`, `id_pelayan`, `nama_kegiatan`, `hari`, `waktu`) VALUES
(1, 1, 3, 1, 'WBI HI', 'Selasa', '09:00:00.0000'),
(2, 1, 2, 2, 'WBI THB', 'Kamis', '09:00:00.0000'),
(3, 3, 3, 3, 'YOUC', 'Sabtu', '19:00:00.0000'),
(4, 2, 3, 3, 'Rumah Doa', 'Rabu', '19:00:00.0000'),
(5, 4, 3, 4, 'COOL YOUC HI', 'Jumat', '19:00:00.0000'),
(6, 4, 3, 5, 'COOL Ifolia', 'Jumat', '19:00:00.0000'),
(7, 4, 3, 6, 'COOL HI', 'Jumat', '19:00:00.0000'),
(8, 4, 3, 7, 'COOL Duta Bumi', 'Selasa', '19:00:00.0000');

-- --------------------------------------------------------

--
-- Table structure for table `komunitas`
--

CREATE TABLE IF NOT EXISTS `komunitas` (
  `id_komunitas` int(5) NOT NULL,
  `nama_komunitas` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `komunitas`
--

INSERT INTO `komunitas` (`id_komunitas`, `nama_komunitas`) VALUES
(1, 'Wanita Bethel Indonesia'),
(2, 'Rumah Doa'),
(3, 'Youth'),
(4, 'COOL');

-- --------------------------------------------------------

--
-- Table structure for table `pelayan`
--

CREATE TABLE IF NOT EXISTS `pelayan` (
  `id_pelayan` int(5) NOT NULL,
  `id_jabatan` int(5) NOT NULL,
  `nama_pelayan` varchar(32) NOT NULL,
  `kontak` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelayan`
--

INSERT INTO `pelayan` (`id_pelayan`, `id_jabatan`, `nama_pelayan`, `kontak`) VALUES
(1, 3, 'Diana', '085872017472'),
(2, 3, 'Sari', '08872017472'),
(3, 1, 'David', '085710951223'),
(4, 2, 'Jordy', '081281826865'),
(5, 2, 'Gideon Alisus', '085288208899'),
(6, 2, 'Simon', '08161411063'),
(7, 2, 'Winardi', '081296287776');

-- --------------------------------------------------------

--
-- Table structure for table `replies`
--

CREATE TABLE IF NOT EXISTS `replies` (
  `reply_id` int(5) unsigned NOT NULL,
  `cat_id` int(5) unsigned NOT NULL,
  `subcat_id` int(5) unsigned NOT NULL,
  `topic_id` int(5) unsigned NOT NULL,
  `author` varchar(32) NOT NULL,
  `comment` text NOT NULL,
  `date_posted` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `replies`
--

INSERT INTO `replies` (`reply_id`, `cat_id`, `subcat_id`, `topic_id`, `author`, `comment`, `date_posted`) VALUES
(5, 1, 1, 1, 'adi', 'this is test replies', '2016-03-30'),
(6, 1, 1, 1, 'adi', 'this is another test reply', '2016-03-30'),
(7, 1, 1, 1, 'rina', 'this is another test reply', '2016-03-30'),
(8, 1, 2, 13, 'adi', 'dsfgsdfg', '2016-05-01'),
(9, 1, 2, 13, 'adi', 'werert', '2016-05-01'),
(10, 1, 2, 18, 'adi', 'a', '2016-05-01'),
(11, 1, 2, 18, 'adi', 'b', '2016-05-01');

-- --------------------------------------------------------

--
-- Table structure for table `subcategories`
--

CREATE TABLE IF NOT EXISTS `subcategories` (
  `subcat_id` int(5) unsigned NOT NULL,
  `parent_id` int(5) unsigned NOT NULL,
  `subcat_title` varchar(32) NOT NULL,
  `subcat_desc` varchar(64) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subcategories`
--

INSERT INTO `subcategories` (`subcat_id`, `parent_id`, `subcat_title`, `subcat_desc`) VALUES
(1, 1, 'Petrus', 'Kehidupan Petrus'),
(2, 1, 'Rasul Paulus', 'Kehidupan Rasul Paulus'),
(3, 1, 'Yohanes', 'Kehidupan Yohanes'),
(4, 2, 'Jalan-jalan', 'Kegiatan jalan-jalan GBI SC'),
(5, 2, 'KKR', 'Kebaktian Kebangkitan Rohani'),
(6, 3, 'Bersaksi dan Berbagi', 'Tempat Bersaksi dan Berbagi Cerita'),
(7, 4, 'aaaa', 'aaaa');

-- --------------------------------------------------------

--
-- Table structure for table `tempat`
--

CREATE TABLE IF NOT EXISTS `tempat` (
  `id_tempat` int(5) NOT NULL,
  `nama_tempat` varchar(32) NOT NULL,
  `alamat` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tempat`
--

INSERT INTO `tempat` (`id_tempat`, `nama_tempat`, `alamat`) VALUES
(1, 'gbi_sc', 'ruang wasana'),
(2, 'gbi_thb', 'diatas superindo'),
(3, 'Sekretariat', 'Ruko Harapan Indah Blok EN 16&17');

-- --------------------------------------------------------

--
-- Table structure for table `topics`
--

CREATE TABLE IF NOT EXISTS `topics` (
  `topic_id` int(5) unsigned NOT NULL,
  `cat_id` int(5) unsigned NOT NULL,
  `subcat_id` int(5) unsigned NOT NULL,
  `author` varchar(32) NOT NULL,
  `title` varchar(32) NOT NULL,
  `content` text NOT NULL,
  `date_posted` date NOT NULL,
  `views` int(5) unsigned NOT NULL,
  `replies` int(5) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `topics`
--

INSERT INTO `topics` (`topic_id`, `cat_id`, `subcat_id`, `author`, `title`, `content`, `date_posted`, `views`, `replies`) VALUES
(1, 1, 1, 'adi', 'this is new topic', 'asdfsdaf sdafs adfasdfadsa', '2016-03-01', 135, 3),
(14, 1, 2, 'adi', 'a', ' abcd', '2016-05-01', 0, 0),
(15, 1, 2, 'adi', 'b', ' jlololol', '2016-05-01', 0, 0),
(16, 1, 2, 'adi', 'c', ' dddddd', '2016-05-01', 0, 0),
(17, 1, 2, 'adi', 'd', ' aburbarhuar', '2016-05-01', 0, 0),
(18, 1, 2, 'adi', 'e', ' hauahahahh', '2016-05-01', 26, 2),
(19, 1, 2, 'adi', 'f', ' f', '2016-05-01', 0, 0),
(20, 1, 2, 'adi', 'j', ' j', '2016-05-01', 0, 0),
(21, 1, 2, 'adi', 'k', ' k', '2016-05-01', 0, 0),
(23, 1, 2, 'adi', 'z', ' z', '2016-05-01', 0, 0),
(24, 1, 2, 'adi', 'x', ' x', '2016-05-01', 0, 0),
(25, 1, 2, 'adi', 'c', ' c', '2016-05-01', 0, 0),
(26, 1, 2, 'adi', 'v', ' v', '2016-05-01', 0, 0),
(27, 1, 2, 'adi', 'b', ' b', '2016-05-01', 0, 0),
(28, 1, 2, 'adi', 'n', ' n', '2016-05-01', 0, 0),
(29, 1, 2, 'adi', 'm', ' m', '2016-05-01', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(5) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`) VALUES
(1, 'adi', 'adi'),
(2, 'rizki', 'gita'),
(3, 'rani', 'rani'),
(4, 'radi', 'radi'),
(5, 'rina', 'rina'),
(6, 'a', 'a');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `isi_berita`
--
ALTER TABLE `isi_berita`
  ADD PRIMARY KEY (`id_berita`,`id_kategori`);

--
-- Indexes for table `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`id_jabatan`);

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id_jadwal`,`id_tempat`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `kegiatan_komunitas`
--
ALTER TABLE `kegiatan_komunitas`
  ADD PRIMARY KEY (`id_kegiatan`),
  ADD UNIQUE KEY `id_komunitas` (`id_komunitas`,`id_tempat`,`id_pelayan`);

--
-- Indexes for table `komunitas`
--
ALTER TABLE `komunitas`
  ADD PRIMARY KEY (`id_komunitas`);

--
-- Indexes for table `pelayan`
--
ALTER TABLE `pelayan`
  ADD PRIMARY KEY (`id_pelayan`);

--
-- Indexes for table `replies`
--
ALTER TABLE `replies`
  ADD PRIMARY KEY (`reply_id`);

--
-- Indexes for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD PRIMARY KEY (`subcat_id`);

--
-- Indexes for table `tempat`
--
ALTER TABLE `tempat`
  ADD PRIMARY KEY (`id_tempat`);

--
-- Indexes for table `topics`
--
ALTER TABLE `topics`
  ADD PRIMARY KEY (`topic_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `replies`
--
ALTER TABLE `replies`
  MODIFY `reply_id` int(5) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `subcategories`
--
ALTER TABLE `subcategories`
  MODIFY `subcat_id` int(5) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `topics`
--
ALTER TABLE `topics`
  MODIFY `topic_id` int(5) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
