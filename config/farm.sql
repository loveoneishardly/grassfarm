/*
SQLyog Community
MySQL - 10.1.37-MariaDB : Database - grassfarm
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`grassfarm` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci */;

USE `grassfarm`;

/*Table structure for table `dm_donvi` */

DROP TABLE IF EXISTS `dm_donvi`;

CREATE TABLE `dm_donvi` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `TENDONVI` varbinary(250) DEFAULT NULL,
  `DIACHI` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `SODIENTHOAI` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `EMAIL` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `GHICHU` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `TRANGTHAI` int(11) DEFAULT '1',
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `dm_donvi` */

insert  into `dm_donvi`(`ID`,`TENDONVI`,`DIACHI`,`SODIENTHOAI`,`EMAIL`,`GHICHU`,`TRANGTHAI`) values 
(1,'VNPT',NULL,NULL,NULL,NULL,1);

/*Table structure for table `dm_loaisanpham` */

DROP TABLE IF EXISTS `dm_loaisanpham`;

CREATE TABLE `dm_loaisanpham` (
  `MA_LOAI_SP` int(11) NOT NULL,
  `TEN_LOAI_SP` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CREATE` datetime DEFAULT NULL,
  `TIME_LOCK` datetime DEFAULT NULL,
  `GHI_CHU` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `TRANG_THAI` int(11) DEFAULT '1',
  PRIMARY KEY (`MA_LOAI_SP`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `dm_loaisanpham` */

/*Table structure for table `dm_nongho` */

DROP TABLE IF EXISTS `dm_nongho`;

CREATE TABLE `dm_nongho` (
  `MA_NONG_HO` int(11) NOT NULL AUTO_INCREMENT,
  `MA_DON_VI` int(11) DEFAULT NULL,
  `TEN_NONG_HO` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `NGAY_SINH` date DEFAULT NULL,
  `TUOI` int(11) DEFAULT NULL,
  `GIOI_TINH` int(2) DEFAULT NULL,
  `SO_CCCD` int(11) DEFAULT NULL,
  `DIA_CHI` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `SO_DIEN_THOAI` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `EMP_PASSWORD` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `AVATAR` longblob,
  `GHI_CHU` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ADMIN` int(2) DEFAULT '0',
  `MENU` longtext COLLATE utf8mb4_unicode_ci,
  `CREATE` datetime DEFAULT NULL,
  `TIME_LOCK` datetime DEFAULT NULL,
  `TRANGTHAI` int(11) DEFAULT '1',
  PRIMARY KEY (`MA_NONG_HO`,`SO_DIEN_THOAI`),
  KEY `MA_DON_VI` (`MA_DON_VI`),
  CONSTRAINT `dm_nongho_ibfk_2` FOREIGN KEY (`MA_DON_VI`) REFERENCES `dm_donvi` (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `dm_nongho` */

insert  into `dm_nongho`(`MA_NONG_HO`,`MA_DON_VI`,`TEN_NONG_HO`,`NGAY_SINH`,`TUOI`,`GIOI_TINH`,`SO_CCCD`,`DIA_CHI`,`SO_DIEN_THOAI`,`EMP_PASSWORD`,`AVATAR`,`GHI_CHU`,`ADMIN`,`MENU`,`CREATE`,`TIME_LOCK`,`TRANGTHAI`) values 
(1,1,'Admin','2024-02-22',NULL,NULL,NULL,NULL,'admin','85d617c7e82c1ec51ee00bec5dca17e4',NULL,NULL,9,NULL,'2024-02-23 14:50:52',NULL,1);

/*Table structure for table `loainhatky` */

DROP TABLE IF EXISTS `loainhatky`;

CREATE TABLE `loainhatky` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `TENLOAI` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `GHICHU` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `SAPXEP` int(11) DEFAULT NULL,
  `TRANGTHAI` int(11) DEFAULT '1',
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `loainhatky` */

insert  into `loainhatky`(`ID`,`TENLOAI`,`GHICHU`,`SAPXEP`,`TRANGTHAI`) values 
(1,'Bước 1',NULL,1,1),
(2,'Bước 2',NULL,2,1),
(3,'Bước 3',NULL,3,1),
(4,'Bước 4',NULL,4,1),
(5,'Bước 5',NULL,5,1),
(6,'Bước 6',NULL,6,1),
(7,'Bước 7',NULL,7,1),
(8,'Bước 8',NULL,8,1),
(9,'Bước 9',NULL,9,1),
(10,'Bước 10',NULL,10,1);

/*Table structure for table `nhatkysanxuat` */

DROP TABLE IF EXISTS `nhatkysanxuat`;

CREATE TABLE `nhatkysanxuat` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `IDVUNGTRONG` int(11) DEFAULT NULL,
  `LOAINHATKY` int(11) DEFAULT NULL COMMENT '1: Bước 1, 2: Bước 2...',
  `TENNHATKY` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `BONPHAN` int(11) DEFAULT '0',
  `THUOCBVTV` int(11) DEFAULT '0',
  `GHICHU` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `IDVUNGTRONG` (`IDVUNGTRONG`),
  KEY `LOAINHATKY` (`LOAINHATKY`)
) ENGINE=InnoDB AUTO_INCREMENT=56 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `nhatkysanxuat` */

/*Table structure for table `thongtinvungtrong` */

DROP TABLE IF EXISTS `thongtinvungtrong`;

CREATE TABLE `thongtinvungtrong` (
  `ID_VUNG_TRONG` int(11) NOT NULL AUTO_INCREMENT,
  `MA_DON_VI` int(11) DEFAULT NULL,
  `MA_NONG_HO` int(11) DEFAULT NULL,
  `TEN_VUNG_TRONG` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `KEY_CODE` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `LOAI_SAN_PHAM` int(1) DEFAULT NULL,
  `TEN_KHU_VUC` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `TEN_KE_HOACH` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `NGAY_SAN_XUAT` date DEFAULT NULL,
  `DIEN_TICH_DAT` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `LOAI_DAT` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `DO_PH_DAT` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `NGAY_THU_HOACH` date DEFAULT NULL,
  `SAN_LUONG` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `GHICHU` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CREATE` datetime DEFAULT NULL,
  `TIME_LOCK` datetime DEFAULT NULL,
  `TRANG_THAI` int(11) DEFAULT '1',
  PRIMARY KEY (`ID_VUNG_TRONG`,`KEY_CODE`),
  KEY `IDVUNGTRONG` (`MA_NONG_HO`),
  KEY `MA_DON_VI` (`MA_DON_VI`),
  KEY `LOAI_SAN_PHAM` (`LOAI_SAN_PHAM`),
  CONSTRAINT `thongtinvungtrong_ibfk_1` FOREIGN KEY (`MA_DON_VI`) REFERENCES `dm_donvi` (`ID`),
  CONSTRAINT `thongtinvungtrong_ibfk_2` FOREIGN KEY (`MA_NONG_HO`) REFERENCES `dm_nongho` (`MA_NONG_HO`),
  CONSTRAINT `thongtinvungtrong_ibfk_3` FOREIGN KEY (`LOAI_SAN_PHAM`) REFERENCES `dm_loaisanpham` (`MA_LOAI_SP`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `thongtinvungtrong` */

/* Function  structure for function  `f_solannhatky` */

/*!50003 DROP FUNCTION IF EXISTS `f_solannhatky` */;
DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` FUNCTION `f_solannhatky`(p_idvungtrong varchar(100),
	p_type varchar(100)
) RETURNS varchar(1024) CHARSET utf8
BEGIN
	DECLARE v_number int(11) DEFAULT 0;
	
	if p_type = 1 then
		select count(ID) into v_number
		from kythuatbonphan
		where p_idvungtrong = IDVUNGTRONG
		group by IDNHATKY;
	else
		SELECT COUNT(ID) INTO v_number
		FROM sudungthuoc
		WHERE p_idvungtrong = IDVUNGTRONG
		GROUP BY IDNHATKY;
	end if;
	
	return concat(v_number, '');
    END */$$
DELIMITER ;

/* Procedure structure for procedure `p_dangnhap` */

/*!50003 DROP PROCEDURE IF EXISTS  `p_dangnhap` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `p_dangnhap`(p_taikhoan VARCHAR(1024), p_matkhau VARCHAR(2048))
BEGIN
	DECLARE v_kt INT(10) DEFAULT 0;
	
	SELECT COUNT(*) INTO v_kt FROM dm_nongho WHERE p_taikhoan = SO_DIEN_THOAI AND p_matkhau = EMP_PASSWORD;
	
	IF v_kt = 0 THEN
		SELECT '-1' AS MA_NONG_HO,'-1' AS MA_DON_VI,'Tài khoản không tồn tại' AS TEN_NONG_HO,'-1' AS ADMIN,
		'-1' AS TRANGTHAI,'-1' AS SO_DIEN_THOAI, '-1' AS MENU, '' AS TUOI, '' AS DIA_CHI, '' AS GIOI_TINH, '' AS NGAY_SINH, '' AS SO_CCCD, '' AS TENDONVI, '' as AVATAR FROM DUAL;
	ELSE
		SELECT t.MA_NONG_HO, t.MA_DON_VI, t.TEN_NONG_HO, t.ADMIN, t.TRANGTHAI, t.SO_DIEN_THOAI, t.MENU, t.TUOI, t.DIA_CHI, t.GIOI_TINH, t.NGAY_SINH, t.SO_CCCD, dv.TENDONVI, t.AVATAR
		FROM dm_nongho t, dm_donvi dv
		WHERE p_taikhoan = t.SO_DIEN_THOAI AND p_matkhau = t.EMP_PASSWORD AND t.MA_DON_VI = dv.ID;
	END IF;
END */$$
DELIMITER ;

/* Procedure structure for procedure `p_load_list_nongho` */

/*!50003 DROP PROCEDURE IF EXISTS  `p_load_list_nongho` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `p_load_list_nongho`(
	p_madonvi varchar(100)
)
BEGIN
	SELECT t.MA_NONG_HO, t.MA_DON_VI, t.TEN_NONG_HO, t.ADMIN, t.TRANGTHAI, t.SO_DIEN_THOAI, t.MENU, t.TUOI, t.DIA_CHI, t.GIOI_TINH, DATE_FORMAT(t.NGAY_SINH,'%d/%m/%Y') AS NGAY_SINH, t.SO_CCCD, dv.TENDONVI, t.AVATAR, DATE_FORMAT(t.CREATE,'%d/%m/%Y %H:%i:%s') AS TIME_CREATE, DATE_FORMAT(t.TIME_LOCK,'%d/%m/%Y %H:%i:%s') AS TIME_LOCK
	FROM dm_nongho t, dm_donvi dv
	WHERE t.MA_DON_VI = p_madonvi AND t.MA_DON_VI = dv.ID;
    END */$$
DELIMITER ;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
