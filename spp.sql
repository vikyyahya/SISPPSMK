/*
SQLyog Community v12.4.3 (32 bit)
MySQL - 10.1.30-MariaDB : Database - spp
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`spp` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `spp`;

/*Table structure for table `jurusan` */

DROP TABLE IF EXISTS `jurusan`;

CREATE TABLE `jurusan` (
  `id_jurusan` varchar(10) NOT NULL,
  `nama_jurusan` varchar(30) DEFAULT NULL,
  `biaya` double DEFAULT NULL,
  PRIMARY KEY (`id_jurusan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `jurusan` */

insert  into `jurusan`(`id_jurusan`,`nama_jurusan`,`biaya`) values 
('M001','Multimedia',200000),
('M002','TKJ',190000);

/*Table structure for table `kelas` */

DROP TABLE IF EXISTS `kelas`;

CREATE TABLE `kelas` (
  `id_kelas` varchar(11) NOT NULL,
  `kelas` varchar(20) NOT NULL,
  `id_jurusan` varchar(30) NOT NULL,
  PRIMARY KEY (`id_kelas`),
  KEY `FK_Jurusan` (`id_jurusan`),
  CONSTRAINT `FK_Jurusan` FOREIGN KEY (`id_jurusan`) REFERENCES `jurusan` (`id_jurusan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `kelas` */

insert  into `kelas`(`id_kelas`,`kelas`,`id_jurusan`) values 
('K001','X','M001'),
('K002','x','M002');

/*Table structure for table `level` */

DROP TABLE IF EXISTS `level`;

CREATE TABLE `level` (
  `id_level` varchar(11) NOT NULL,
  `level` varchar(30) NOT NULL,
  PRIMARY KEY (`id_level`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `level` */

insert  into `level`(`id_level`,`level`) values 
('P001','Petugas TU'),
('P002','Kepala sekolah'),
('P003','Admin');

/*Table structure for table `pembayaran` */

DROP TABLE IF EXISTS `pembayaran`;

CREATE TABLE `pembayaran` (
  `id_pembayarn` varchar(30) NOT NULL,
  `tgl_pembayaran` date NOT NULL,
  `id_siswa` varchar(30) NOT NULL,
  `jml_bayar` int(50) NOT NULL,
  `ket` varchar(50) NOT NULL,
  PRIMARY KEY (`id_pembayarn`),
  KEY `FK_Siswa` (`id_siswa`),
  CONSTRAINT `FK_Siswa` FOREIGN KEY (`id_siswa`) REFERENCES `siswa` (`nis`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `pembayaran` */

insert  into `pembayaran`(`id_pembayarn`,`tgl_pembayaran`,`id_siswa`,`jml_bayar`,`ket`) values 
('P002','2019-07-23','1555201',200000,'lunas');

/*Table structure for table `siswa` */

DROP TABLE IF EXISTS `siswa`;

CREATE TABLE `siswa` (
  `nis` varchar(30) NOT NULL,
  `nama_siswa` varchar(50) NOT NULL,
  `id_kelas` varchar(25) NOT NULL,
  `jk` enum('pria','wanita') NOT NULL,
  `ttl` varchar(25) NOT NULL,
  `no_telp` varchar(14) DEFAULT NULL,
  `id_t_ajaran` varchar(11) DEFAULT NULL,
  PRIMARY KEY (`nis`),
  KEY `FK_Id_Kelas` (`id_kelas`),
  KEY `FK_Tahun_Ajaran` (`id_t_ajaran`),
  CONSTRAINT `FK_Id_Kelas` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id_kelas`),
  CONSTRAINT `FK_Tahun_Ajaran` FOREIGN KEY (`id_t_ajaran`) REFERENCES `thn_ajaran` (`id_t_ajaran`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `siswa` */

insert  into `siswa`(`nis`,`nama_siswa`,`id_kelas`,`jk`,`ttl`,`no_telp`,`id_t_ajaran`) values 
('1555201','Fulan','K002','pria','Tangerang, 1-1-2000','089645447','T002');

/*Table structure for table `thn_ajaran` */

DROP TABLE IF EXISTS `thn_ajaran`;

CREATE TABLE `thn_ajaran` (
  `id_t_ajaran` varchar(11) NOT NULL,
  `t_ajaran` varchar(30) NOT NULL,
  PRIMARY KEY (`id_t_ajaran`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `thn_ajaran` */

insert  into `thn_ajaran`(`id_t_ajaran`,`t_ajaran`) values 
('T001','2018-2019'),
('T002','2019-2020');

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `iduser` int(11) NOT NULL AUTO_INCREMENT,
  `nama_user` varchar(45) NOT NULL,
  `username` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `id_level` varchar(11) DEFAULT NULL,
  PRIMARY KEY (`iduser`),
  KEY `Fk_Level` (`id_level`),
  CONSTRAINT `Fk_Level` FOREIGN KEY (`id_level`) REFERENCES `level` (`id_level`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `user` */

insert  into `user`(`iduser`,`nama_user`,`username`,`password`,`id_level`) values 
(2,'wina','admin','admin','P001'),
(3,'admin','admin','1234','P002'),
(4,'admin','admin','1234','P002'),
(5,'aaa','aaa','aaa','P001');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
