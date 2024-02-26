<?php
    include_once('./config/db.php');

    class DanhMucController {

        public function FDanhSachNongHo($madonvi){
            $pdo = ConnectDb::getInstance()->getConnection();
            $stmt = $pdo->prepare("call p_load_list_nongho(:madonvi);");
            $stmt -> bindParam(':madonvi', $madonvi, PDO::PARAM_STR);
            $stmt -> execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }

        public function FDanhSachLoaiSanPham($madonvi){
            $pdo = ConnectDb::getInstance()->getConnection();
            $stmt = $pdo->prepare("call p_load_list_loaisp(:madonvi);");
            $stmt -> bindParam(':madonvi', $madonvi, PDO::PARAM_STR);
            $stmt -> execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }




    }
?>