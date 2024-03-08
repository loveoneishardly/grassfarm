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
  `MA_LOAI_SP` int(11) NOT NULL AUTO_INCREMENT,
  `TEN_LOAI_SP` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `TIME_CREATE` datetime DEFAULT NULL,
  `TIME_LOCK` datetime DEFAULT NULL,
  `GHI_CHU` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `TRANG_THAI` int(11) DEFAULT '1',
  PRIMARY KEY (`MA_LOAI_SP`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `dm_loaisanpham` */

insert  into `dm_loaisanpham`(`MA_LOAI_SP`,`TEN_LOAI_SP`,`TIME_CREATE`,`TIME_LOCK`,`GHI_CHU`,`TRANG_THAI`) values 
(1,'Vú sữa','2024-02-27 08:02:12',NULL,NULL,1),
(2,'Lúa','2024-02-27 08:03:43',NULL,NULL,1),
(3,'Mãng cầu xiêm','2024-02-27 08:03:45',NULL,NULL,1);

/*Table structure for table `dm_nongho` */

DROP TABLE IF EXISTS `dm_nongho`;

CREATE TABLE `dm_nongho` (
  `MA_NONG_HO` int(11) NOT NULL AUTO_INCREMENT,
  `MA_DON_VI` int(11) DEFAULT NULL,
  `TEN_NONG_HO` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `DAN_TOC` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'lấy theo danh mục dân tộc',
  `NGAY_SINH` date DEFAULT NULL,
  `TUOI` int(11) DEFAULT NULL,
  `GIOI_TINH` int(2) DEFAULT NULL,
  `SO_CCCD` int(11) DEFAULT NULL,
  `DIA_CHI` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `SU_DUNG_DT` int(1) DEFAULT NULL COMMENT '1: có, 0: không',
  `SO_DIEN_THOAI` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `USE_ZALO` int(1) DEFAULT NULL COMMENT '1: có, 0: không',
  `EMP_PASSWORD` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `AVATAR` longblob,
  `GHI_CHU` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `TRINH_DO` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `THANH_VIEN_GIA_DINH` int(11) DEFAULT NULL,
  `TRONG_TUOI_LAO_DONG` int(11) DEFAULT NULL,
  `ADMIN` int(2) DEFAULT '0',
  `MENU` longtext COLLATE utf8mb4_unicode_ci,
  `TIME_CREATE` datetime DEFAULT NULL,
  `TIME_LOCK` datetime DEFAULT NULL,
  `TRANGTHAI` int(11) DEFAULT '1',
  PRIMARY KEY (`MA_NONG_HO`,`SO_DIEN_THOAI`),
  KEY `MA_DON_VI` (`MA_DON_VI`),
  CONSTRAINT `dm_nongho_ibfk_2` FOREIGN KEY (`MA_DON_VI`) REFERENCES `dm_donvi` (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `dm_nongho` */

insert  into `dm_nongho`(`MA_NONG_HO`,`MA_DON_VI`,`TEN_NONG_HO`,`DAN_TOC`,`NGAY_SINH`,`TUOI`,`GIOI_TINH`,`SO_CCCD`,`DIA_CHI`,`SU_DUNG_DT`,`SO_DIEN_THOAI`,`USE_ZALO`,`EMP_PASSWORD`,`AVATAR`,`GHI_CHU`,`TRINH_DO`,`THANH_VIEN_GIA_DINH`,`TRONG_TUOI_LAO_DONG`,`ADMIN`,`MENU`,`TIME_CREATE`,`TIME_LOCK`,`TRANGTHAI`) values 
(1,1,'Admin','1','2024-02-22',45,1,2147483647,'thành phố Sóc Trăng, tỉnh Sóc Trăng',1,'admin',1,'85d617c7e82c1ec51ee00bec5dca17e4',NULL,'','12/12',7,7,9,NULL,'2024-02-23 14:50:52',NULL,1);

/*Table structure for table `nksx_phanbon` */

DROP TABLE IF EXISTS `nksx_phanbon`;

CREATE TABLE `nksx_phanbon` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `MA_DON_VI` int(11) DEFAULT NULL,
  `MA_NONG_HO` int(11) DEFAULT NULL,
  `ID_VUNG_TRONG` int(11) DEFAULT NULL,
  `THOI_KY_CAY` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `THOI_DIEM_BON` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `LOAI_PHAN` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `LIEU_LUONG` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CACH_BON` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `HIEU_QUA` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `NGUOI_TAO` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `TIME_CREATE` datetime DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `MA_DON_VI` (`MA_DON_VI`),
  KEY `MA_NONG_HO` (`MA_NONG_HO`),
  KEY `ID_VUNG_TRONG` (`ID_VUNG_TRONG`),
  CONSTRAINT `nksx_phanbon_ibfk_1` FOREIGN KEY (`MA_DON_VI`) REFERENCES `dm_donvi` (`ID`),
  CONSTRAINT `nksx_phanbon_ibfk_2` FOREIGN KEY (`MA_NONG_HO`) REFERENCES `dm_nongho` (`MA_NONG_HO`),
  CONSTRAINT `nksx_phanbon_ibfk_3` FOREIGN KEY (`ID_VUNG_TRONG`) REFERENCES `thongtinvungtrong` (`ID_VUNG_TRONG`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `nksx_phanbon` */

insert  into `nksx_phanbon`(`ID`,`MA_DON_VI`,`MA_NONG_HO`,`ID_VUNG_TRONG`,`THOI_KY_CAY`,`THOI_DIEM_BON`,`LOAI_PHAN`,`LIEU_LUONG`,`CACH_BON`,`HIEU_QUA`,`NGUOI_TAO`,`TIME_CREATE`) values 
(1,1,1,1,'1','2','3','4','5','6','Admin','2024-03-08 15:16:42'),
(2,1,1,1,'11','22','33','44','55','77','Admin','2024-03-08 15:46:33'),
(3,1,1,1,'1','2','3','4','5','6','Admin','2024-03-08 15:50:13'),
(4,1,1,1,'111','222','333','444','555','666','Admin','2024-03-08 16:56:53');

/*Table structure for table `nksx_thuocbvtv` */

DROP TABLE IF EXISTS `nksx_thuocbvtv`;

CREATE TABLE `nksx_thuocbvtv` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `MA_DON_VI` int(11) DEFAULT NULL,
  `MA_NONG_HO` int(11) DEFAULT NULL,
  `ID_VUNGTRONG` int(11) DEFAULT NULL,
  `THOI_KY_CAY` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `THOI_DIEM_BON` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `LOAI_SAU_BENH` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `LOAI_THUOC` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `LIEU_LUONG` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `HIEU_QUA` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `NGUOI_TAO` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `TIME_CREATE` datetime DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `IDVUNGTRONG` (`MA_DON_VI`),
  KEY `LOAINHATKY` (`MA_NONG_HO`),
  KEY `ID_VUNGTRONG` (`ID_VUNGTRONG`),
  CONSTRAINT `nksx_thuocbvtv_ibfk_1` FOREIGN KEY (`MA_DON_VI`) REFERENCES `dm_donvi` (`ID`),
  CONSTRAINT `nksx_thuocbvtv_ibfk_2` FOREIGN KEY (`MA_NONG_HO`) REFERENCES `dm_nongho` (`MA_NONG_HO`),
  CONSTRAINT `nksx_thuocbvtv_ibfk_3` FOREIGN KEY (`ID_VUNGTRONG`) REFERENCES `thongtinvungtrong` (`ID_VUNG_TRONG`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `nksx_thuocbvtv` */

/*Table structure for table `nksx_xulyrahoa_dautrai` */

DROP TABLE IF EXISTS `nksx_xulyrahoa_dautrai`;

CREATE TABLE `nksx_xulyrahoa_dautrai` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `MA_DON_VI` int(11) DEFAULT NULL,
  `MA_NONG_HO` int(11) DEFAULT NULL,
  `ID_VUNGTRONG` int(11) DEFAULT NULL,
  `TYPE` int(2) DEFAULT NULL COMMENT '1:phânbón_tựnhiên, 2:thuốc_tựnhiên; 3:phânbón_tậptrung, 4:thuốc_tập trung; 5:tạomầmhoa, 6:phânbón_tạomầm; 7:đậutrai, 8:phânbón_đậutrái, 9:thuốc_đậutrái; 10:phânbón_pháttriển, 11:thuốc_pháttriển',
  `PB_THOIDIEM` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `PB_LOAIPHAN` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `PB_LIEULUONG` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `PB_CACHBON` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `THUOC_THOIDIEM` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `THUOC_LOAISAUBENH` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `THUOC_LOAITHUOC` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `THUOC_LIEULUONG` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `THUOC_HIEUQUA` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `KHAC_CHAT_SD` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `KHAC_THOIDIEM` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `KHAC_LIEULUONG` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `KHAC_CACHDUNG` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `KHAC_KETQUA` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `BIENPHAP` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `NONGDO` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `THOIDIEM` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CACHLAM` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `NGUOI_TAO` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `TIME_CREATE` datetime DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `MA_DON_VI` (`MA_DON_VI`),
  KEY `MA_NONG_HO` (`MA_NONG_HO`),
  KEY `ID_VUNGTRONG` (`ID_VUNGTRONG`),
  CONSTRAINT `nksx_xulyrahoa_dautrai_ibfk_1` FOREIGN KEY (`MA_DON_VI`) REFERENCES `dm_donvi` (`ID`),
  CONSTRAINT `nksx_xulyrahoa_dautrai_ibfk_2` FOREIGN KEY (`MA_NONG_HO`) REFERENCES `dm_nongho` (`MA_NONG_HO`),
  CONSTRAINT `nksx_xulyrahoa_dautrai_ibfk_3` FOREIGN KEY (`ID_VUNGTRONG`) REFERENCES `thongtinvungtrong` (`ID_VUNG_TRONG`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `nksx_xulyrahoa_dautrai` */

/*Table structure for table `thongtinvungtrong` */

DROP TABLE IF EXISTS `thongtinvungtrong`;

CREATE TABLE `thongtinvungtrong` (
  `ID_VUNG_TRONG` int(11) NOT NULL AUTO_INCREMENT,
  `MA_DON_VI` int(11) DEFAULT NULL,
  `MA_NONG_HO` int(11) DEFAULT NULL,
  `TEN_VUNG_TRONG` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `KINH_NGHIEM` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'số năm kinh nghiệm canh tác',
  `KEY_CODE` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `LOAI_SAN_PHAM` int(1) DEFAULT NULL,
  `TUOI_CAY_TRONG` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'tuổi cây canh tác',
  `TEN_KHU_VUC` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `TEN_KE_HOACH` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `NGAY_SAN_XUAT` date DEFAULT NULL,
  `MUA_VU` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `THOI_GIAN_BAT_DAU` date DEFAULT NULL,
  `THOI_GIAN_KET_THUC` date DEFAULT NULL,
  `DIEN_TICH_DAT` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `LOAI_DAT` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '1: phù sa, 2: mặn, 3: phèn',
  `SA_CAU_DAT` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '1: thịt, 2: sét, 3: cát, 4: thịt pha cát',
  `DO_PH_DAT` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `DO_DAY` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'độ dày tầng canh tác',
  `KHAC_DAT` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'ghi chú đất khác',
  `MUC_NUOC_NGAM` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'nước ngầm',
  `NUOC_NGAP_T1` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `NUOC_NGAP_T2` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `NUOC_NGAP_T3` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `NUOC_NGAP_T4` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `NUOC_NGAP_T5` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `NUOC_NGAP_T6` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `NUOC_NGAP_T7` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `NUOC_NGAP_T8` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `NUOC_NGAP_T9` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `NUOC_NGAP_T10` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `NUOC_NGAP_T11` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `NUOC_NGAP_T12` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `NUOC_PHEN_T1` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `NUOC_PHEN_T2` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `NUOC_PHEN_T3` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `NUOC_PHEN_T4` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `NUOC_PHEN_T5` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `NUOC_PHEN_T6` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `NUOC_PHEN_T7` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `NUOC_PHEN_T8` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `NUOC_PHEN_T9` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `NUOC_PHEN_T10` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `NUOC_PHEN_T11` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `NUOC_PHEN_T12` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `NUOC_MAN_T1` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `NUOC_MAN_T2` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `NUOC_MAN_T3` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `NUOC_MAN_T4` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `NUOC_MAN_T5` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `NUOC_MAN_T6` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `NUOC_MAN_T7` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `NUOC_MAN_T8` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `NUOC_MAN_T9` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `NUOC_MAN_T10` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `NUOC_MAN_T11` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `NUOC_MAN_T12` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `TIME_BATDAT_TRONG` date DEFAULT NULL COMMENT 'Vườn cây hiện tại bắt đầu trồng từ khoảng thời gian nào',
  `GIONG_GAN_NHAT` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'giống sử dụng gần nhất',
  `NGUON_GOC` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '1: Tự sản xuất, 2: Mua trong tỉnh, 3: Mua ngoài tỉnh',
  `GIAY_XAC_NHAN` int(1) DEFAULT NULL COMMENT '1: có, 0: không',
  `XU_LY_GIONG` int(1) DEFAULT NULL COMMENT '1: có, 0: không',
  `CHE_PHAM_XU_LY` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `MUC_DICH` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'mục đích xử lý giống',
  `MAT_DO_CAY_TRONG` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'mật độ cây trồng',
  `KHOANG_CACH_CAY_TRONG` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'khoảng cách cây trồng',
  `NGAY_THU_HOACH` date DEFAULT NULL,
  `SAN_LUONG` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `TIME_DAU_TRAI_DEN_THU_HOACH` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Thời gian từ khi đậu trái đến khi thu hoạch( ngày hay tháng)',
  `DAC_DIEM_TRAI` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Đặc điểm nhận biết trái có thể thu hoạch được',
  `SO_LAN_THU_HOACH` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `PHAN_LOAI_TY_LE` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Phân loại và tỷ lệ trái của từng loại',
  `TRONG_LUONG` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Trọng lượng trái bao nhiêu thì đạt tiêu chuẩn',
  `XU_LY_CHINH_DONG_LOAT` int(1) DEFAULT NULL COMMENT '1: có, 0: không',
  `CAH_XU_LY` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `NS_MUA_THUAN` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'năng suất',
  `NS_MUA_NGHICH` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'năng suất',
  `SL_MUA_THUAN` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'sản lượng',
  `SL_MUA_NGHICH` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'sản lượng',
  `GIA_BAN` float DEFAULT NULL COMMENT 'giá bán',
  `MA_NGUOI_LAP` int(11) DEFAULT NULL,
  `TEN_NGUOI_LAP` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `TIME_CREATE` datetime DEFAULT NULL,
  `TIME_LOCK` datetime DEFAULT NULL,
  `GHICHU` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `TRANG_THAI` int(11) DEFAULT '1',
  `KTCT_BOBAO_DEBAO` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '1: Chung, 2: Riêng, 3: Cả hai',
  `KTCT_CHIEUCAO` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `KTCT_CHIEURONG` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `KTCT_ONGBONG_SL` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `KTCT_ONGBONG_DK` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `KTCT_CACHDAT` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `KTCT_MUONG_DAI` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `KTCT_MUONG_RONG` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `KTCT_MUONG_CAO` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `KTCT_LIEP_DAI` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `KTCT_LIEP_RONG` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `KTCT_LIEP_CAO` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `KTCT_MOTRONG` int(1) DEFAULT NULL COMMENT '1: có, 0: không',
  `KTCT_TIME_DAP` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `KTCT_MAT_CHIEUCAO` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `KTCT_MAT_DUONGKINH` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `KTCT_XL_DAT` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `KTCT_XL_CHEPHAM` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `KTCT_XL_MUCDICH` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `KTCT_CAYCHAN_GIO` int(1) DEFAULT NULL COMMENT '1: có, 0: không',
  `KTCT_CHIEUCAO_CAY` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `KTCT_DONGHIENG_CAY` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `KTCT_TUGOC` int(1) DEFAULT NULL COMMENT '1: có, 0: không',
  `KTCT_TUOINUOC` int(1) DEFAULT NULL COMMENT '1: có, 0: không',
  `KTCT_CAYCON_SOLAN` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `KTCT_CAYCON_CACHTUOI` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `KTCT_CAYCON_TIME` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `KTCT_TRUONGTHANH_SOLAN` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `KTCT_TRUONGTHANH_CACHTUOI` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `KTCT_TRUONGTHANH_TIME` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `KTCT_RAHOA_SOLAN` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `KTCT_RAHOA_CACHTUOI` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `KTCT_RAHOA_TIME` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `KTCT_QL_CODAI` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `PHANBON_DVT` int(1) DEFAULT NULL COMMENT '1: kg/ha, 2: kg/công, 3: kg/1000m2, 4: kg/1300m2',
  `LOAI_CAY_XEN_CANH` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CSC_TAOTAN` int(1) DEFAULT NULL COMMENT '1: có, 0: không',
  `CSC_TIACANH` int(1) DEFAULT NULL COMMENT '1: có, 0: không',
  `CSC_CANH_LOAIBO` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CSC_KS_CHIEUCAO` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `XLRH_TN_LYDO` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `XLRH_TN_SOLAN` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `XLRH_TN_TIME` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `XLRH_TN_TIME_THEODOT` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `XLRH_TN_PHANBON` int(1) DEFAULT NULL COMMENT '1: có, 0: không',
  `XLRH_TN_PHAN_DVT` int(1) DEFAULT NULL COMMENT '1: kg/1000 m2, 2: kg/gốc',
  `XLRH_TN_QLNUOC` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `XLRH_TN_QLCODAI` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `XLRH_TT_LYDO` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `XLRH_TT_THOIVU` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `XLRH_TT_LYDO_CHON` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `XLRH_TT_TIACANH` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `XLRH_TT_CACHLAM` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `XLRH_TT_PHANBON` int(1) DEFAULT NULL COMMENT '1: có, 0: không',
  `XLRH_TT_PHAN_DVT` int(1) DEFAULT NULL COMMENT '1: kg/1000 m2, 2: kg/gốc',
  `XLRH_TT_QLNUOC` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `XLRH_TT_QLCODAI` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `XLRH_TT_KICHTHICH_RADOT` int(1) DEFAULT NULL COMMENT '1: có, 0: không',
  `XLRH_TT_PHUONGPHAP` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `XLRH_TT_THOIDIEM` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `XLRH_TT_TYLE` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `XLRH_TT_SL` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `XLRH_TM_PHUONGPHAP` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `XLRH_TM_TUOINUOC` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `XLRH_TM_PHANBON` int(1) DEFAULT NULL COMMENT '1: có, 0: không',
  `XLRH_TM_PHAN_DVT` int(1) DEFAULT NULL COMMENT '1: kg/1000 m2, 2: kg/gốc',
  `XLRH_TUOINUOC` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `XLRH_PHANBON` int(1) DEFAULT NULL COMMENT '1: có, 0: không',
  `XLRH_PHAN_DVT` int(1) DEFAULT NULL COMMENT '1: kg/1000 m2, 2: kg/gốc',
  `XLRH_DT_BIENPHAP` int(1) DEFAULT NULL COMMENT '1: có, 0: không',
  `XLRH_DT_TUOINUOC` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `XLRH_DT_THOIDIEM_RUNG` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `XLRH_DT_HANCHE_RUNG` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `XLRH_DT_TYLE_RUNG` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `XLRH_DT_PHANBON` int(11) DEFAULT NULL COMMENT '1: có, 0: không',
  `XLRH_DT_PHAN_DVT` int(11) DEFAULT NULL COMMENT '1: kg/1000 m2, 2: kg/gốc',
  `XLRH_PT_TUOINUOC` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `XLRH_PT_PHANBON` int(1) DEFAULT NULL COMMENT '1: có, 0: không',
  `XLRH_PT_PHAN_DVT` int(1) DEFAULT NULL COMMENT '1: kg/1000 m2, 2: kg/gốc',
  PRIMARY KEY (`ID_VUNG_TRONG`,`KEY_CODE`),
  KEY `IDVUNGTRONG` (`MA_NONG_HO`),
  KEY `MA_DON_VI` (`MA_DON_VI`),
  KEY `LOAI_SAN_PHAM` (`LOAI_SAN_PHAM`),
  CONSTRAINT `thongtinvungtrong_ibfk_1` FOREIGN KEY (`MA_DON_VI`) REFERENCES `dm_donvi` (`ID`),
  CONSTRAINT `thongtinvungtrong_ibfk_2` FOREIGN KEY (`MA_NONG_HO`) REFERENCES `dm_nongho` (`MA_NONG_HO`),
  CONSTRAINT `thongtinvungtrong_ibfk_3` FOREIGN KEY (`LOAI_SAN_PHAM`) REFERENCES `dm_loaisanpham` (`MA_LOAI_SP`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `thongtinvungtrong` */

insert  into `thongtinvungtrong`(`ID_VUNG_TRONG`,`MA_DON_VI`,`MA_NONG_HO`,`TEN_VUNG_TRONG`,`KINH_NGHIEM`,`KEY_CODE`,`LOAI_SAN_PHAM`,`TUOI_CAY_TRONG`,`TEN_KHU_VUC`,`TEN_KE_HOACH`,`NGAY_SAN_XUAT`,`MUA_VU`,`THOI_GIAN_BAT_DAU`,`THOI_GIAN_KET_THUC`,`DIEN_TICH_DAT`,`LOAI_DAT`,`SA_CAU_DAT`,`DO_PH_DAT`,`DO_DAY`,`KHAC_DAT`,`MUC_NUOC_NGAM`,`NUOC_NGAP_T1`,`NUOC_NGAP_T2`,`NUOC_NGAP_T3`,`NUOC_NGAP_T4`,`NUOC_NGAP_T5`,`NUOC_NGAP_T6`,`NUOC_NGAP_T7`,`NUOC_NGAP_T8`,`NUOC_NGAP_T9`,`NUOC_NGAP_T10`,`NUOC_NGAP_T11`,`NUOC_NGAP_T12`,`NUOC_PHEN_T1`,`NUOC_PHEN_T2`,`NUOC_PHEN_T3`,`NUOC_PHEN_T4`,`NUOC_PHEN_T5`,`NUOC_PHEN_T6`,`NUOC_PHEN_T7`,`NUOC_PHEN_T8`,`NUOC_PHEN_T9`,`NUOC_PHEN_T10`,`NUOC_PHEN_T11`,`NUOC_PHEN_T12`,`NUOC_MAN_T1`,`NUOC_MAN_T2`,`NUOC_MAN_T3`,`NUOC_MAN_T4`,`NUOC_MAN_T5`,`NUOC_MAN_T6`,`NUOC_MAN_T7`,`NUOC_MAN_T8`,`NUOC_MAN_T9`,`NUOC_MAN_T10`,`NUOC_MAN_T11`,`NUOC_MAN_T12`,`TIME_BATDAT_TRONG`,`GIONG_GAN_NHAT`,`NGUON_GOC`,`GIAY_XAC_NHAN`,`XU_LY_GIONG`,`CHE_PHAM_XU_LY`,`MUC_DICH`,`MAT_DO_CAY_TRONG`,`KHOANG_CACH_CAY_TRONG`,`NGAY_THU_HOACH`,`SAN_LUONG`,`TIME_DAU_TRAI_DEN_THU_HOACH`,`DAC_DIEM_TRAI`,`SO_LAN_THU_HOACH`,`PHAN_LOAI_TY_LE`,`TRONG_LUONG`,`XU_LY_CHINH_DONG_LOAT`,`CAH_XU_LY`,`NS_MUA_THUAN`,`NS_MUA_NGHICH`,`SL_MUA_THUAN`,`SL_MUA_NGHICH`,`GIA_BAN`,`MA_NGUOI_LAP`,`TEN_NGUOI_LAP`,`TIME_CREATE`,`TIME_LOCK`,`GHICHU`,`TRANG_THAI`,`KTCT_BOBAO_DEBAO`,`KTCT_CHIEUCAO`,`KTCT_CHIEURONG`,`KTCT_ONGBONG_SL`,`KTCT_ONGBONG_DK`,`KTCT_CACHDAT`,`KTCT_MUONG_DAI`,`KTCT_MUONG_RONG`,`KTCT_MUONG_CAO`,`KTCT_LIEP_DAI`,`KTCT_LIEP_RONG`,`KTCT_LIEP_CAO`,`KTCT_MOTRONG`,`KTCT_TIME_DAP`,`KTCT_MAT_CHIEUCAO`,`KTCT_MAT_DUONGKINH`,`KTCT_XL_DAT`,`KTCT_XL_CHEPHAM`,`KTCT_XL_MUCDICH`,`KTCT_CAYCHAN_GIO`,`KTCT_CHIEUCAO_CAY`,`KTCT_DONGHIENG_CAY`,`KTCT_TUGOC`,`KTCT_TUOINUOC`,`KTCT_CAYCON_SOLAN`,`KTCT_CAYCON_CACHTUOI`,`KTCT_CAYCON_TIME`,`KTCT_TRUONGTHANH_SOLAN`,`KTCT_TRUONGTHANH_CACHTUOI`,`KTCT_TRUONGTHANH_TIME`,`KTCT_RAHOA_SOLAN`,`KTCT_RAHOA_CACHTUOI`,`KTCT_RAHOA_TIME`,`KTCT_QL_CODAI`,`PHANBON_DVT`,`LOAI_CAY_XEN_CANH`,`CSC_TAOTAN`,`CSC_TIACANH`,`CSC_CANH_LOAIBO`,`CSC_KS_CHIEUCAO`,`XLRH_TN_LYDO`,`XLRH_TN_SOLAN`,`XLRH_TN_TIME`,`XLRH_TN_TIME_THEODOT`,`XLRH_TN_PHANBON`,`XLRH_TN_PHAN_DVT`,`XLRH_TN_QLNUOC`,`XLRH_TN_QLCODAI`,`XLRH_TT_LYDO`,`XLRH_TT_THOIVU`,`XLRH_TT_LYDO_CHON`,`XLRH_TT_TIACANH`,`XLRH_TT_CACHLAM`,`XLRH_TT_PHANBON`,`XLRH_TT_PHAN_DVT`,`XLRH_TT_QLNUOC`,`XLRH_TT_QLCODAI`,`XLRH_TT_KICHTHICH_RADOT`,`XLRH_TT_PHUONGPHAP`,`XLRH_TT_THOIDIEM`,`XLRH_TT_TYLE`,`XLRH_TT_SL`,`XLRH_TM_PHUONGPHAP`,`XLRH_TM_TUOINUOC`,`XLRH_TM_PHANBON`,`XLRH_TM_PHAN_DVT`,`XLRH_TUOINUOC`,`XLRH_PHANBON`,`XLRH_PHAN_DVT`,`XLRH_DT_BIENPHAP`,`XLRH_DT_TUOINUOC`,`XLRH_DT_THOIDIEM_RUNG`,`XLRH_DT_HANCHE_RUNG`,`XLRH_DT_TYLE_RUNG`,`XLRH_DT_PHANBON`,`XLRH_DT_PHAN_DVT`,`XLRH_PT_TUOINUOC`,`XLRH_PT_PHANBON`,`XLRH_PT_PHAN_DVT`) values 
(1,1,1,'Vùng trồng vú sữa','2015','',1,'8 năm','Khu vực A','Kế hoạch trồng vú sữa','2024-02-27','mùa thuận','2024-02-27',NULL,'4 ha','1','1','5','0.7 m','khác','80 m','0.1','0.3',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Vú sữa lò rèn','1',1,1,'Comcat 150WP ','kích thích rễ','50','4','2024-02-27','30','90 ngày','to','2','tỷ lệ','0.5 kg',1,'phun thuốc','10','30','2','3',15000,1,'Admin','2024-02-27 08:26:52',NULL,NULL,1,'2','1','2','3','4','5','9','10','11','6','7','8',1,'12','13','14','1','15','16',1,'17','18',1,1,'19','20','21','22','23','24','25','26','27','28',1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(12,1,1,'6','2','',1,'3','4','5','2024-02-29','1','2024-02-29','2024-02-29','1','^^1^^2^^','^^3^^4^^','10','9','8','11','12','13','14','15','16','17','18','19','20','21','22','23','24','25','25','26','27','28','29','30','31','33','34','35','36','37','38','39','40','41','42','43','44','45','46','47','2024-02-29','48','^^1^^3^^',0,0,'49','50','51','52','2024-02-29','53','2024-02-29','60','55','62','61',0,'63','57','56','58','59',64,1,'Admin','2024-02-29 10:00:49',NULL,NULL,1,'1',NULL,NULL,NULL,NULL,'','','','','','','',0,'','','','0','','',0,'','',0,0,'','','','','','','','','','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(13,1,1,'6','2','',1,'3','4','5','2024-02-29','1','2024-02-29','2024-02-29','1','^^1^^2^^','^^3^^4^^','10','9','8','11','12','13','14','15','16','17','18','19','20','21','22','23','24','25','25','25','26','27','28','29','30','33','34','35','36','37','38','39','40','41','42','43','44','45','46','47','2024-02-29','48','^^1^^3^^',0,0,'49','50','51','52','2024-02-29','53','54','60','55','62','61',0,'63','57','56','58','59',64,1,'Admin','2024-02-29 11:03:13',NULL,'',1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(14,1,1,'Vùng trông vú sữa','','',1,'','','','0000-00-00','','0000-00-00','0000-00-00','','^^','^^','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','0000-00-00','','^^',0,0,'','','','','0000-00-00','','','','','','',0,'','','','','',0,1,'Admin','2024-02-29 15:05:16',NULL,'',1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);

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

/* Procedure structure for procedure `p_get_info_nongho` */

/*!50003 DROP PROCEDURE IF EXISTS  `p_get_info_nongho` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `p_get_info_nongho`(
	p_madonvi varchar(100),
	p_manongho varchar(100)
)
BEGIN
	select * 
	from dm_nongho
	where ma_don_vi = p_madonvi and ma_nong_ho = p_manongho;
	
    END */$$
DELIMITER ;

/* Procedure structure for procedure `p_load_list_loaisp` */

/*!50003 DROP PROCEDURE IF EXISTS  `p_load_list_loaisp` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `p_load_list_loaisp`(
	p_madonvi varchar(100)
)
BEGIN
	select MA_LOAI_SP, TEN_LOAI_SP, TIME_CREATE, TIME_LOCK, GHI_CHU, TRANG_THAI
	from dm_loaisanpham
	order by MA_LOAI_SP;
    END */$$
DELIMITER ;

/* Procedure structure for procedure `p_load_list_nongho` */

/*!50003 DROP PROCEDURE IF EXISTS  `p_load_list_nongho` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `p_load_list_nongho`(
	p_madonvi varchar(100)
)
BEGIN
	SELECT t.MA_NONG_HO, t.MA_DON_VI, t.TEN_NONG_HO, t.ADMIN, t.TRANGTHAI, t.SO_DIEN_THOAI, t.MENU, t.TUOI, t.DIA_CHI, t.GIOI_TINH, DATE_FORMAT(t.NGAY_SINH,'%d/%m/%Y') AS NGAY_SINH, t.SO_CCCD, dv.TENDONVI, t.AVATAR, DATE_FORMAT(t.TIME_CREATE,'%d/%m/%Y %H:%i:%s') AS TIME_CREATE, DATE_FORMAT(t.TIME_LOCK,'%d/%m/%Y %H:%i:%s') AS TIME_LOCK
	FROM dm_nongho t, dm_donvi dv
	WHERE t.MA_DON_VI = p_madonvi AND t.MA_DON_VI = dv.ID and t.trangthai = 1
	order by t.MA_DON_VI, t.TEN_NONG_HO;
    END */$$
DELIMITER ;

/* Procedure structure for procedure `p_get_info_vungtrong` */

/*!50003 DROP PROCEDURE IF EXISTS  `p_get_info_vungtrong` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `p_get_info_vungtrong`(
	p_madonvi varchar(100),
	p_idvungtrong varchar(10),
	p_manongho varchar(10),
	p_manhanvien varchar(10)
)
BEGIN
	select 	vt.ID_VUNG_TRONG, vt.MA_DON_VI, vt.MA_NONG_HO, vt.TEN_VUNG_TRONG, vt.KINH_NGHIEM, vt.KEY_CODE, vt.LOAI_SAN_PHAM, vt.TUOI_CAY_TRONG, vt.TEN_KHU_VUC, vt.TEN_KE_HOACH, DATE_FORMAT(vt.NGAY_SAN_XUAT,'%d/%m/%Y') as NGAY_SAN_XUAT, vt.MUA_VU, DATE_FORMAT(vt.THOI_GIAN_BAT_DAU,'%d/%m/%Y') as THOI_GIAN_BAT_DAU, DATE_FORMAT(vt.THOI_GIAN_KET_THUC,'%d/%m/%Y') as THOI_GIAN_KET_THUC, vt.DIEN_TICH_DAT, vt.LOAI_DAT, vt.SA_CAU_DAT, vt.DO_PH_DAT, vt.DO_DAY, vt.KHAC_DAT, vt.MUC_NUOC_NGAM, vt.NUOC_NGAP_T1, vt.NUOC_NGAP_T2, vt.NUOC_NGAP_T3, vt.NUOC_NGAP_T4, vt.NUOC_NGAP_T5, vt.NUOC_NGAP_T6, vt.NUOC_NGAP_T7, vt.NUOC_NGAP_T8, vt.NUOC_NGAP_T9, 
		vt.NUOC_NGAP_T10, vt.NUOC_NGAP_T11, vt.NUOC_NGAP_T12, vt.NUOC_PHEN_T1, vt.NUOC_PHEN_T2, vt.NUOC_PHEN_T3, vt.NUOC_PHEN_T4, vt.NUOC_PHEN_T5, vt.NUOC_PHEN_T6, vt.NUOC_PHEN_T7, vt.NUOC_PHEN_T8, vt.NUOC_PHEN_T9, vt.NUOC_PHEN_T10, vt.NUOC_PHEN_T11, vt.NUOC_PHEN_T12, vt.NUOC_MAN_T1, vt.NUOC_MAN_T2, vt.NUOC_MAN_T3, vt.NUOC_MAN_T4, vt.NUOC_MAN_T5, vt.NUOC_MAN_T6, vt.NUOC_MAN_T7, vt.NUOC_MAN_T8, vt.NUOC_MAN_T9, vt.NUOC_MAN_T10, vt.NUOC_MAN_T11, vt.NUOC_MAN_T12, vt.GIONG_GAN_NHAT, vt.NGUON_GOC, vt.GIAY_XAC_NHAN, vt.XU_LY_GIONG, vt.CHE_PHAM_XU_LY, 
		vt.MUC_DICH, vt.MAT_DO_CAY_TRONG, vt.KHOANG_CACH_CAY_TRONG, DATE_FORMAT(vt.NGAY_THU_HOACH,'%d/%m/%Y') as NGAY_THU_HOACH, vt.SAN_LUONG, vt.TIME_DAU_TRAI_DEN_THU_HOACH, vt.DAC_DIEM_TRAI, vt.SO_LAN_THU_HOACH, vt.PHAN_LOAI_TY_LE, vt.TRONG_LUONG, vt.XU_LY_CHINH_DONG_LOAT, vt.CAH_XU_LY, vt.NS_MUA_THUAN, vt.NS_MUA_NGHICH, vt.SL_MUA_THUAN, vt.SL_MUA_NGHICH, vt.GIA_BAN, vt.TEN_NGUOI_LAP, vt.MA_NGUOI_LAP, vt.TIME_CREATE, vt.TIME_LOCK, vt.GHICHU, vt.TRANG_THAI, 
		sp.TEN_LOAI_SP, nh.TEN_NONG_HO, nh.DAN_TOC, nh.NGAY_SINH, nh.TUOI, nh.GIOI_TINH, nh.SO_CCCD, nh.DIA_CHI, nh.SU_DUNG_DT, nh.SO_DIEN_THOAI, nh.USE_ZALO, nh.TRINH_DO, nh.THANH_VIEN_GIA_DINH, nh.TRONG_TUOI_LAO_DONG
	from thongtinvungtrong vt, dm_nongho nh, dm_loaisanpham sp
	where vt.ma_don_vi = p_madonvi and vt.id_vung_trong = p_idvungtrong and vt.ma_nong_ho = p_manongho
		and nh.ma_nong_ho = vt.ma_nong_ho and vt.loai_san_pham = sp.ma_loai_sp;
    END */$$
DELIMITER ;

/* Procedure structure for procedure `p_get_thongtin_canhtac` */

/*!50003 DROP PROCEDURE IF EXISTS  `p_get_thongtin_canhtac` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `p_get_thongtin_canhtac`(
	p_madonvi varchar(150),
	p_manongho varchar(150),
	p_mavungtrong varchar(150)
)
BEGIN
	select 	KTCT_BOBAO_DEBAO, KTCT_CHIEUCAO, KTCT_CHIEURONG, KTCT_ONGBONG_SL, KTCT_ONGBONG_DK,
		KTCT_MUONG_DAI, KTCT_MUONG_RONG, KTCT_MUONG_CAO, KTCT_LIEP_DAI, KTCT_LIEP_RONG,
		KTCT_LIEP_CAO, KTCT_MOTRONG, KTCT_TIME_DAP, KTCT_MAT_CHIEUCAO, KTCT_MAT_DUONGKINH,
		KTCT_XL_DAT, KTCT_XL_CHEPHAM, KTCT_XL_MUCDICH, KTCT_CAYCHAN_GIO, KTCT_CHIEUCAO_CAY,
		KTCT_DONGHIENG_CAY, KTCT_TUGOC, KTCT_TUOINUOC, KTCT_CAYCON_SOLAN, KTCT_CAYCON_CACHTUOI,
		KTCT_CAYCON_TIME, KTCT_TRUONGTHANH_SOLAN, KTCT_TRUONGTHANH_CACHTUOI, KTCT_TRUONGTHANH_TIME, KTCT_RAHOA_SOLAN,
		KTCT_RAHOA_CACHTUOI, KTCT_RAHOA_TIME, KTCT_QL_CODAI, KTCT_CACHDAT
	from thongtinvungtrong vt
	WHERE vt.ma_don_vi = p_madonvi AND vt.id_vung_trong = p_mavungtrong AND vt.ma_nong_ho = p_manongho;
    END */$$
DELIMITER ;

/* Procedure structure for procedure `p_load_list_phanbon` */

/*!50003 DROP PROCEDURE IF EXISTS  `p_load_list_phanbon` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `p_load_list_phanbon`(
	p_madonvi VARCHAR(100),
	p_idvungtrong VARCHAR(100),
	p_manongho VARCHAR(100)
)
BEGIN
	DECLARE v_donvitinh int(1);
	DECLARE v_donvitinh_t VARCHAR(100);
	
	select PHANBON_DVT, case when PHANBON_DVT = 1 then 'kg/ha' when PHANBON_DVT = 2 then 'kg/công' when PHANBON_DVT = 3 then 'kg/1000m2' else 'kg/1300m2' end into v_donvitinh, v_donvitinh_t
	from thongtinvungtrong
	WHERE MA_DON_VI = p_madonvi AND p_manongho = p_manongho AND ID_VUNG_TRONG = p_idvungtrong;
	
	select ID, MA_DON_VI, MA_NONG_HO, ID_VUNG_TRONG, THOI_KY_CAY, THOI_DIEM_BON, LOAI_PHAN, LIEU_LUONG, CACH_BON, HIEU_QUA, NGUOI_TAO, TIME_CREATE, v_donvitinh as DON_VI_TINH, v_donvitinh_t as DON_VI_TINH_T 
	from nksx_phanbon pb
	where pb.MA_DON_VI = p_madonvi and MA_NONG_HO = p_manongho and ID_VUNG_TRONG = p_idvungtrong;
	
    END */$$
DELIMITER ;

/* Procedure structure for procedure `p_load_list_vungtrong` */

/*!50003 DROP PROCEDURE IF EXISTS  `p_load_list_vungtrong` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `p_load_list_vungtrong`(
	p_madonvi varchar(100),
	p_manongho varchar(100)
)
BEGIN
	if p_manongho = '-1' then
		SELECT  vt.ID_VUNG_TRONG, vt.MA_DON_VI, dv.TENDONVI, vt.MA_NONG_HO, nh.TEN_NONG_HO, vt.TEN_VUNG_TRONG, vt.KEY_CODE, vt.LOAI_SAN_PHAM, vt.TEN_KHU_VUC, vt.TEN_KE_HOACH, DATE_FORMAT(vt.NGAY_SAN_XUAT,'%d/%m/%Y') AS NGAY_SAN_XUAT, 
		vt.MUA_VU, DATE_FORMAT(vt.THOI_GIAN_BAT_DAU,'%d/%m/%Y %H:%i:%s') AS THOI_GIAN_BAT_DAU, DATE_FORMAT(vt.THOI_GIAN_KET_THUC,'%d/%m/%Y %H:%i:%s') AS THOI_GIAN_KET_THUC, vt.DIEN_TICH_DAT, vt.LOAI_DAT, vt.DO_PH_DAT, DATE_FORMAT(vt.NGAY_THU_HOACH,'%d/%m/%Y') AS NGAY_THU_HOACH, vt.SAN_LUONG, vt.GHICHU, 
		vt.TEN_NGUOI_LAP, DATE_FORMAT(vt.TIME_CREATE,'%d/%m/%Y %H:%i:%s') AS TIME_CREATE, DATE_FORMAT(vt.TIME_LOCK,'%d/%m/%Y %H:%i:%s') AS TIME_LOCK, vt.TRANG_THAI, sp.TEN_LOAI_SP
		FROM thongtinvungtrong vt, dm_donvi dv, dm_nongho nh, dm_loaisanpham sp
		WHERE vt.MA_DON_VI = p_madonvi -- AND vt.MA_NONG_HO = p_manongho
			AND vt.MA_DON_VI = dv.ID AND dv.ID = p_madonvi
			AND vt.MA_NONG_HO = nh.MA_NONG_HO AND nh.MA_DON_VI = dv.ID
			AND dv.ID = p_madonvi AND vt.loai_san_pham = sp.ma_loai_sp
		ORDER BY dv.TENDONVI, vt.ID_VUNG_TRONG, nh.TEN_NONG_HO;
	else
		SELECT  vt.ID_VUNG_TRONG, vt.MA_DON_VI, dv.TENDONVI, vt.MA_NONG_HO, nh.TEN_NONG_HO, vt.TEN_VUNG_TRONG, vt.KEY_CODE, vt.LOAI_SAN_PHAM, vt.TEN_KHU_VUC, vt.TEN_KE_HOACH, DATE_FORMAT(vt.NGAY_SAN_XUAT,'%d/%m/%Y') AS NGAY_SAN_XUAT, 
		vt.MUA_VU, DATE_FORMAT(vt.THOI_GIAN_BAT_DAU,'%d/%m/%Y %H:%i:%s') AS THOI_GIAN_BAT_DAU, DATE_FORMAT(vt.THOI_GIAN_KET_THUC,'%d/%m/%Y %H:%i:%s') AS THOI_GIAN_KET_THUC, vt.DIEN_TICH_DAT, vt.LOAI_DAT, vt.DO_PH_DAT, DATE_FORMAT(vt.NGAY_THU_HOACH,'%d/%m/%Y') AS NGAY_THU_HOACH, vt.SAN_LUONG, vt.GHICHU, 
		vt.TEN_NGUOI_LAP, DATE_FORMAT(vt.TIME_CREATE,'%d/%m/%Y %H:%i:%s') AS TIME_CREATE, DATE_FORMAT(vt.TIME_LOCK,'%d/%m/%Y %H:%i:%s') AS TIME_LOCK, vt.TRANG_THAI, sp.TEN_LOAI_SP
		FROM thongtinvungtrong vt, dm_donvi dv, dm_nongho nh, dm_loaisanpham sp
		WHERE vt.MA_DON_VI = p_madonvi AND vt.MA_NONG_HO = p_manongho
			AND vt.MA_DON_VI = dv.ID AND dv.ID = p_madonvi
			AND vt.MA_NONG_HO = nh.MA_NONG_HO AND nh.MA_DON_VI = dv.ID
			AND dv.ID = p_madonvi AND vt.loai_san_pham = sp.ma_loai_sp
		ORDER BY dv.TENDONVI, vt.ID_VUNG_TRONG, nh.TEN_NONG_HO;
	end if;
	
    END */$$
DELIMITER ;

/* Procedure structure for procedure `p_luu_info_vungtrong` */

/*!50003 DROP PROCEDURE IF EXISTS  `p_luu_info_vungtrong` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `p_luu_info_vungtrong`(
	p_madonvi varchar(100),
	p_mavungtrong varchar(100),
	p_manongho varchar(100),
	p_tennongho varchar(150),
	p_tuoi varchar(150),
	p_diachi varchar(150),
	p_hocvan varchar(150),
	p_dientichdat varchar(150),
	p_thannvien varchar(150),
	p_thannvienlaodong varchar(150),
	p_gioitinh varchar(150),
	p_dantoc varchar(150),
	p_sudungdt varchar(150),
	p_sodienthoai varchar(150),
	p_usezalo varchar(150),
	p_kinhnghiem varchar(150),
	p_tuoicaytrong varchar(150),
	p_doituongtrong varchar(150),
	p_loaidat varchar(150),
	p_sacaudat varchar(150),
	p_datkhac varchar(150),
	p_dodaytang varchar(150),
	p_doph varchar(150),
	p_mucnuocngam varchar(150),
	p_nuocngapt1 varchar(150),
	p_nuocngapt2 varchar(150),
	p_nuocngapt3 varchar(150),
	p_nuocngapt4 varchar(150),
	p_nuocngapt5 varchar(150),
	p_nuocngapt6 varchar(150),
	p_nuocngapt7 varchar(150),
	p_nuocngapt8 varchar(150),
	p_nuocngapt9 varchar(150),
	p_nuocngapt10 varchar(150),
	p_nuocngapt11 varchar(150),
	p_nuocngapt12 varchar(150),
	p_nuocphent1 varchar(150),
	p_nuocphent2 varchar(150),
	p_nuocphent3 varchar(150),
	p_nuocphent4 varchar(150),
	p_nuocphent5 varchar(150),
	p_nuocphent6 varchar(150),
	p_nuocphent7 varchar(150),
	p_nuocphent8 varchar(150),
	p_nuocphent9 varchar(150),
	p_nuocphent10 varchar(150),
	p_nuocphent11 varchar(150),
	p_nuocphent12 varchar(150),
	p_nuocmant1 varchar(150),
	p_nuocmant2 varchar(150),
	p_nuocmant3 varchar(150),
	p_nuocmant4 varchar(150),
	p_nuocmant5 varchar(150),
	p_nuocmant6 varchar(150),
	p_nuocmant7 varchar(150),
	p_nuocmant8 varchar(150),
	p_nuocmant9 varchar(150),
	p_nuocmant10 varchar(150),
	p_nuocmant11 varchar(150),
	p_nuocmant12 varchar(150),
	p_thoigianbatdautrong varchar(150),
	p_gionggannhat varchar(150),
	p_xacnhangiong varchar(150),
	p_chephamxuly varchar(150),
	p_nguongocgiong varchar(150),
	p_xulycaygiong varchar(150),
	p_mucdichxuly varchar(150),
	p_matdo varchar(150),
	p_khoangcach varchar(150),
	p_timedauthuhoach varchar(150),
	p_solanthuhoach varchar(150),
	p_trongluongtrai varchar(150),
	p_cachxulythuhoach varchar(150),
	p_nsmuathuan varchar(150),
	p_slmuathuan varchar(150),
	p_dacdiem varchar(150),
	p_phanloaityle varchar(150),
	p_xulydongloat varchar(150),
	p_nsmuanghich varchar(150),
	p_slmuanghich varchar(150),
	p_giaban varchar(150),
	p_tennhanvien VARCHAR(150),
	p_manhanvien varchar(100),
	p_sxkhuvuc VARCHAR(150),
	p_sxkehoach VARCHAR(150),
	p_sxthoigianbatdau VARCHAR(150),
	p_sxmuavu VARCHAR(150),
	p_sxtenvung VARCHAR(150),
	p_sxngaysanxuat VARCHAR(150),
	p_sxthoigiankethuc VARCHAR(150),
	p_sxghichu VARCHAR(150),
	p_ngaythuhoach varchar(100),
	p_sanluongdukien varchar(100)
)
BEGIN
	declare v_result varchar(10);
	
	if p_mavungtrong = '' then
		insert into thongtinvungtrong (MA_DON_VI, MA_NONG_HO, TEN_VUNG_TRONG, KINH_NGHIEM, KEY_CODE, LOAI_SAN_PHAM, TUOI_CAY_TRONG, TEN_KHU_VUC, TEN_KE_HOACH, 
				NGAY_SAN_XUAT, MUA_VU, THOI_GIAN_BAT_DAU, THOI_GIAN_KET_THUC, DIEN_TICH_DAT, LOAI_DAT, SA_CAU_DAT, DO_PH_DAT, DO_DAY, KHAC_DAT, 
				MUC_NUOC_NGAM, NUOC_NGAP_T1, NUOC_NGAP_T2, NUOC_NGAP_T3, NUOC_NGAP_T4, NUOC_NGAP_T5, NUOC_NGAP_T6, NUOC_NGAP_T7, NUOC_NGAP_T8, NUOC_NGAP_T9, 
				NUOC_NGAP_T10, NUOC_NGAP_T11, NUOC_NGAP_T12, NUOC_PHEN_T1, NUOC_PHEN_T2, NUOC_PHEN_T3, NUOC_PHEN_T4, NUOC_PHEN_T5, NUOC_PHEN_T6, NUOC_PHEN_T7, 
				NUOC_PHEN_T8, NUOC_PHEN_T9, NUOC_PHEN_T10, NUOC_PHEN_T11, NUOC_PHEN_T12, NUOC_MAN_T1, NUOC_MAN_T2, NUOC_MAN_T3, NUOC_MAN_T4, NUOC_MAN_T5, 
				NUOC_MAN_T6, NUOC_MAN_T7, NUOC_MAN_T8, NUOC_MAN_T9, NUOC_MAN_T10, NUOC_MAN_T11, NUOC_MAN_T12, GIONG_GAN_NHAT, NGUON_GOC, GIAY_XAC_NHAN, 
				XU_LY_GIONG, CHE_PHAM_XU_LY, MUC_DICH, MAT_DO_CAY_TRONG, KHOANG_CACH_CAY_TRONG, NGAY_THU_HOACH, SAN_LUONG, TIME_DAU_TRAI_DEN_THU_HOACH, DAC_DIEM_TRAI, SO_LAN_THU_HOACH, 
				PHAN_LOAI_TY_LE, TRONG_LUONG, XU_LY_CHINH_DONG_LOAT, CAH_XU_LY, NS_MUA_THUAN, NS_MUA_NGHICH, SL_MUA_THUAN, SL_MUA_NGHICH, GIA_BAN, MA_NGUOI_LAP,
				TEN_NGUOI_LAP, TIME_CREATE, TIME_BATDAT_TRONG, GHICHU)
		values (p_madonvi, p_manongho, p_sxtenvung, p_kinhnghiem, '', p_doituongtrong, p_tuoicaytrong, p_sxkhuvuc, p_sxkehoach,
			p_sxngaysanxuat, p_sxmuavu, p_sxthoigianbatdau, p_sxthoigiankethuc, p_dientichdat, p_loaidat, p_sacaudat, p_doph, p_dodaytang, p_datkhac,
			p_mucnuocngam, p_nuocngapt1, p_nuocngapt2, p_nuocngapt3, p_nuocngapt4, p_nuocngapt5, p_nuocngapt6, p_nuocngapt7, p_nuocngapt8, p_nuocngapt9,
			p_nuocngapt10, p_nuocngapt11, p_nuocngapt12, p_nuocphent1, p_nuocphent2, p_nuocphent3, p_nuocphent4, p_nuocphent5, p_nuocphent6, p_nuocphent7,
			p_nuocphent8, p_nuocphent9, p_nuocphent10, p_nuocphent11, p_nuocphent12, p_nuocmant1, p_nuocmant2, p_nuocmant3, p_nuocmant4, p_nuocmant5,
			p_nuocmant6, p_nuocmant7, p_nuocmant8, p_nuocmant9, p_nuocmant10, p_nuocmant11, p_nuocmant12, p_gionggannhat, p_nguongocgiong, p_xacnhangiong,
			p_xulycaygiong, p_chephamxuly, p_mucdichxuly, p_matdo, p_khoangcach, p_ngaythuhoach, p_sanluongdukien, p_timedauthuhoach, p_dacdiem, p_solanthuhoach,
			p_phanloaityle, p_trongluongtrai, p_xulydongloat, p_cachxulythuhoach, p_nsmuathuan, p_nsmuanghich, p_slmuathuan, p_slmuanghich, p_giaban, p_manhanvien,
			p_tennhanvien, CURRENT_TIMESTAMP(), p_thoigianbatdautrong, p_sxghichu
			);
		SELECT ROW_COUNT() INTO v_result;
		
		
	else
		update thongtinvungtrong
		set 	TEN_VUNG_TRONG = p_sxtenvung, KINH_NGHIEM = p_kinhnghiem, LOAI_SAN_PHAM = p_doituongtrong, TUOI_CAY_TRONG = p_dientichdat, TEN_KHU_VUC = p_sxkhuvuc,
			TEN_KE_HOACH = p_sxkehoach, NGAY_SAN_XUAT = p_sxngaysanxuat, MUA_VU = p_sxmuavu, THOI_GIAN_BAT_DAU = p_sxthoigianbatdau, THOI_GIAN_KET_THUC = p_sxthoigiankethuc,
			DIEN_TICH_DAT = p_dientichdat, LOAI_DAT = p_loaidat, SA_CAU_DAT = p_sacaudat, DO_PH_DAT = p_doph, DO_DAY = p_dodaytang,
			KHAC_DAT = p_datkhac, MUC_NUOC_NGAM = p_mucnuocngam, NUOC_NGAP_T1 = p_nuocngapt1, NUOC_NGAP_T2 = p_nuocngapt2, NUOC_NGAP_T3 = p_nuocngapt3,
			NUOC_NGAP_T4 = p_nuocngapt4, NUOC_NGAP_T5 = p_nuocngapt5, NUOC_NGAP_T6 = p_nuocngapt6, NUOC_NGAP_T7 = p_nuocngapt7, NUOC_NGAP_T8 = p_nuocngapt8,
			NUOC_NGAP_T9 = p_nuocngapt9, NUOC_NGAP_T10 = p_nuocngapt10, NUOC_NGAP_T11 = p_nuocngapt11, NUOC_NGAP_T12 = p_nuocngapt12, NUOC_PHEN_T1 = p_nuocphent1,
			NUOC_PHEN_T2 = p_nuocphent2, NUOC_PHEN_T3 = p_nuocphent3, NUOC_PHEN_T4 = p_nuocphent4, NUOC_PHEN_T5 = p_nuocphent5, NUOC_PHEN_T6 = p_nuocphent6,
			NUOC_PHEN_T7 = p_nuocphent7, NUOC_PHEN_T8 = p_nuocphent8, NUOC_PHEN_T9 = p_nuocphent9, NUOC_PHEN_T10 = p_nuocphent10, NUOC_PHEN_T11 = p_nuocphent11,
			NUOC_PHEN_T12 = p_nuocphent12, NUOC_MAN_T1 = p_nuocmant1, NUOC_MAN_T2 = p_nuocmant2, NUOC_MAN_T3 = p_nuocmant3, NUOC_MAN_T4 = p_nuocmant4,
			NUOC_MAN_T5 = p_nuocmant5, NUOC_MAN_T6 = p_nuocmant6, NUOC_MAN_T7 = p_nuocmant7, NUOC_MAN_T8 = p_nuocmant8, NUOC_MAN_T9 = p_nuocmant9,
			NUOC_MAN_T10 = p_nuocmant10, NUOC_MAN_T11 = p_nuocmant11, NUOC_MAN_T12 = p_nuocmant12, GIONG_GAN_NHAT = p_gionggannhat, NGUON_GOC = p_nguongocgiong,
			GIAY_XAC_NHAN = p_xacnhangiong, XU_LY_GIONG = p_xulycaygiong, CHE_PHAM_XU_LY = p_chephamxuly, MUC_DICH = p_mucdichxuly, MAT_DO_CAY_TRONG = p_matdo,
			KHOANG_CACH_CAY_TRONG = p_khoangcach, NGAY_THU_HOACH = p_ngaythuhoach, SAN_LUONG = p_sanluongdukien, TIME_DAU_TRAI_DEN_THU_HOACH = p_timedauthuhoach, DAC_DIEM_TRAI = p_dacdiem,
			SO_LAN_THU_HOACH = p_solanthuhoach, PHAN_LOAI_TY_LE = p_phanloaityle, TRONG_LUONG = p_trongluongtrai, XU_LY_CHINH_DONG_LOAT = p_xulydongloat, CAH_XU_LY = p_cachxulythuhoach,
			NS_MUA_THUAN = p_nsmuathuan, NS_MUA_NGHICH = p_slmuanghich, SL_MUA_THUAN = p_slmuathuan, SL_MUA_NGHICH = p_slmuanghich, GIA_BAN = p_giaban,
			TIME_BATDAT_TRONG = p_thoigianbatdautrong, GHICHU = p_sxghichu
		where MA_DON_VI = p_madonvi and MA_NONG_HO = p_manongho and ID_VUNG_TRONG = p_mavungtrong;
		SELECT ROW_COUNT() INTO v_result;
	end if;
	
	SELECT v_result AS ketqua FROM DUAL;
    END */$$
DELIMITER ;

/* Procedure structure for procedure `p_luu_thongtin_canhtac` */

/*!50003 DROP PROCEDURE IF EXISTS  `p_luu_thongtin_canhtac` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `p_luu_thongtin_canhtac`(
	p_madonvi varchar(100),
	p_idvungtrong varchar(100),
	p_manongho varchar(100),
	p_canhtac_bobaodebao varchar(150),
	p_canhtac_ongchieucao varchar(150), 
	p_canhtac_ongchieurong varchar(150), 
	p_canhtac_ongsl varchar(150),
	p_canhtac_ongduongkinh varchar(150), 
	p_canhtac_cachdat varchar(150),
	p_canhtac_liep_dai varchar(150), 
	p_canhtac_liep_rong varchar(150), 
	p_canhtac_liep_cao varchar(150),
	p_canhtac_muong_dai varchar(150), 
	p_canhtac_muong_rong varchar(150), 
	p_canhtac_muong_cao varchar(150),
	p_canhtac_motrong varchar(150),
	p_canhtac_time_dap varchar(150), 
	p_canhtac_mat_chieucao varchar(150),
	p_canhtac_duongkinh varchar(150),
	p_canhtac_xuly varchar(150),
	p_canhtac_xl_chepham varchar(150), 
	p_canhtac_xl_mucdich varchar(150),
	p_canhtac_caychangio varchar(150),
	p_canhtac_chieucao varchar(150),
	p_canhtac_donghieng varchar(150), 
	p_canhtac_tugoc varchar(150),
	p_canhtac_tuoinuoc varchar(150), 
	p_canhtac_caycon_sl varchar(150), 
	p_canhtac_caycon_cachtuoi varchar(150),
	p_canhtac_caycon_time varchar(150),
	p_canhtac_truongthanh_sl varchar(150),
	p_canhtac_truongthanh_cachtuoi varchar(150),
	p_canhtac_truongthanh_time varchar(150),
	p_canhtac_dautrai_sl varchar(150),
	p_canhtac_dautrai_cachtuoi varchar(150),
	p_canhtac_dautrai_time varchar(150),
	p_canhtac_codai varchar(150),
	p_nhanvien varchar(150)
)
BEGIN
    
	DECLARE v_result VARCHAR(10);
    
	UPDATE thongtinvungtrong
	set 	KTCT_BOBAO_DEBAO = p_canhtac_bobaodebao, KTCT_CHIEUCAO = p_canhtac_ongchieucao, KTCT_CHIEURONG = p_canhtac_ongchieurong, KTCT_ONGBONG_SL = p_canhtac_ongsl, KTCT_ONGBONG_DK = p_canhtac_ongduongkinh, 
		KTCT_CACHDAT = p_canhtac_cachdat, KTCT_LIEP_DAI = p_canhtac_liep_dai, KTCT_LIEP_RONG = p_canhtac_liep_rong, KTCT_LIEP_CAO = p_canhtac_liep_cao, KTCT_MUONG_DAI = p_canhtac_muong_dai, 
		KTCT_MUONG_RONG = p_canhtac_muong_rong, KTCT_MUONG_CAO = p_canhtac_muong_cao, KTCT_MOTRONG = p_canhtac_motrong, KTCT_TIME_DAP = p_canhtac_time_dap, KTCT_MAT_CHIEUCAO = p_canhtac_mat_chieucao, 
		KTCT_MAT_DUONGKINH = p_canhtac_duongkinh, KTCT_XL_DAT = p_canhtac_xuly, KTCT_XL_CHEPHAM = p_canhtac_xl_chepham, KTCT_XL_MUCDICH = p_canhtac_xl_mucdich, KTCT_CAYCHAN_GIO = p_canhtac_caychangio, 
		KTCT_CHIEUCAO_CAY = p_canhtac_chieucao, KTCT_DONGHIENG_CAY = p_canhtac_donghieng, KTCT_TUGOC = p_canhtac_tugoc, KTCT_TUOINUOC = p_canhtac_tuoinuoc, KTCT_CAYCON_SOLAN = p_canhtac_caycon_sl, 
		KTCT_CAYCON_CACHTUOI = p_canhtac_caycon_cachtuoi, KTCT_CAYCON_TIME = p_canhtac_caycon_time, KTCT_TRUONGTHANH_SOLAN = p_canhtac_truongthanh_sl, KTCT_TRUONGTHANH_CACHTUOI = p_canhtac_truongthanh_cachtuoi, 
		KTCT_TRUONGTHANH_TIME = p_canhtac_truongthanh_time, KTCT_RAHOA_SOLAN = p_canhtac_dautrai_sl, KTCT_RAHOA_CACHTUOI = p_canhtac_dautrai_cachtuoi, KTCT_RAHOA_TIME = p_canhtac_dautrai_time, KTCT_QL_CODAI = p_canhtac_codai
	WHERE MA_DON_VI = p_madonvi AND p_manongho = p_manongho AND ID_VUNG_TRONG = p_idvungtrong;
	
	SELECT ROW_COUNT() INTO v_result;
	
	sELECT v_result AS ketqua FROM DUAL;
    END */$$
DELIMITER ;

/* Procedure structure for procedure `p_luu_thongtin_phanbon` */

/*!50003 DROP PROCEDURE IF EXISTS  `p_luu_thongtin_phanbon` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `p_luu_thongtin_phanbon`(
	p_madonvi VARCHAR(100),
	p_idvungtrong VARCHAR(100),
	p_manongho VARCHAR(100),
	p_idct_phanbon varchar(10),
	p_phanbon_dvt VARCHAR(150),
	p_phanbon_thoikycay VARCHAR(150),
	p_phanbon_loaiphan VARCHAR(150),
	p_phanbon_cachbon VARCHAR(150),
	p_phanbon_thoidiembon VARCHAR(150),
	p_phanbon_lieuluong VARCHAR(150),
	p_phanbon_hieuqua VARCHAR(150),
	p_nhanvien VARCHAR(150)
)
BEGIN
    
	DECLARE v_result VARCHAR(10);
	
	UPDATE thongtinvungtrong
	SET 	PHANBON_DVT = p_phanbon_dvt
	WHERE MA_DON_VI = p_madonvi AND p_manongho = p_manongho AND ID_VUNG_TRONG = p_idvungtrong;
	
	if p_idct_phanbon = '' then
	
		insert into nksx_phanbon(MA_DON_VI, MA_NONG_HO, ID_VUNG_TRONG, THOI_KY_CAY, THOI_DIEM_BON, LOAI_PHAN, LIEU_LUONG, CACH_BON, HIEU_QUA, NGUOI_TAO, TIME_CREATE)
		values(p_madonvi, p_manongho, p_idvungtrong, p_phanbon_thoikycay, p_phanbon_thoidiembon, p_phanbon_loaiphan, p_phanbon_lieuluong, p_phanbon_cachbon, p_phanbon_hieuqua, p_nhanvien, CURRENT_TIMESTAMP());
	
		sELECT ROW_COUNT() INTO v_result;
	else
		update nksx_phanbon
		set	THOI_KY_CAY = p_phanbon_thoikycay, 
			THOI_DIEM_BON = p_phanbon_thoidiembon, 
			LOAI_PHAN = p_phanbon_loaiphan, 
			LIEU_LUONG = p_phanbon_lieuluong, 
			CACH_BON = p_phanbon_cachbon, 
			HIEU_QUA = p_phanbon_hieuqua
		where MA_DON_VI = p_madonvi AND MA_NONG_HO = p_manongho AND ID_VUNG_TRONG = p_idvungtrong and ID = p_idct_phanbon;
		
		SELECT ROW_COUNT() INTO v_result;
	end if;
	
	SELECT v_result AS ketqua FROM DUAL;
    END */$$
DELIMITER ;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
