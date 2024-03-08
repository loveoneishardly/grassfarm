<?php
    include_once('./config/db.php');

    class AppController {

        public function FDanhSachVungTrong($madonvi, $manhanvien){
            $pdo = ConnectDb::getInstance()->getConnection();
            $stmt = $pdo->prepare("call p_load_list_vungtrong(:madonvi,:manhanvien);");
            $stmt -> bindParam(':madonvi', $madonvi, PDO::PARAM_STR);
            $stmt -> bindParam(':manhanvien', $manhanvien, PDO::PARAM_STR);
            $stmt -> execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }

        public function FGetInfoDetail_Vungtrong($madonvi, $idvungtrong, $manongho, $manhanvien){
            $pdo = ConnectDb::getInstance()->getConnection();
            $stmt = $pdo->prepare("call p_get_info_vungtrong(:madonvi,:idvungtrong,:manongho,:manhanvien);");
            $stmt -> bindParam(':madonvi', $madonvi, PDO::PARAM_STR);
            $stmt -> bindParam(':idvungtrong', $idvungtrong, PDO::PARAM_STR);
            $stmt -> bindParam(':manongho', $manongho, PDO::PARAM_STR);
            $stmt -> bindParam(':manhanvien', $manhanvien, PDO::PARAM_STR);
            $stmt -> execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }

        public function FGetInfoNongho($madonvi, $manongho){
            $pdo = ConnectDb::getInstance()->getConnection();
            $stmt = $pdo->prepare("call p_get_info_nongho(:madonvi,:manongho);");
            $stmt -> bindParam(':madonvi', $madonvi, PDO::PARAM_STR);
            $stmt -> bindParam(':manongho', $manongho, PDO::PARAM_STR);
            $stmt -> execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }

        public function FSaveInfoNongho($madonvi, $mavungtrong_id, $manongho, $tennongho, $tuoi, $diachi, $hocvan, $dientichdat, $thannvien, $thannvienlaodong, $gioitinh, $dantoc, $sudungdt, $sodienthoai,
                $usezalo, $kinhnghiem, $tuoicaytrong, $doituongtrong, $loaidat, $sacaudat, $datkhac, $dodaytang, $doph, $mucnuocngam, $nuocngapt1, $nuocngapt2, $nuocngapt3, $nuocngapt4,
                $nuocngapt5, $nuocngapt6, $nuocngapt7, $nuocngapt8, $nuocngapt9, $nuocngapt10, $nuocngapt11, $nuocngapt12, $nuocphent1, $nuocphent2, $nuocphent3, $nuocphent4,
                $nuocphent5, $nuocphent6, $nuocphent7, $nuocphent8, $nuocphent9, $nuocphent10, $nuocphent11, $nuocphent12, $nuocmant1, $nuocmant2, $nuocmant3, $nuocmant4, $nuocmant5,
                $nuocmant6, $nuocmant7, $nuocmant8, $nuocmant9, $nuocmant10, $nuocmant11, $nuocmant12, $thoigianbatdautrong, $gionggannhat, $xacnhangiong, $chephamxuly,
                $nguongocgiong, $xulycaygiong, $mucdichxuly, $matdo, $khoangcach, $timedauthuhoach, $solanthuhoach, $trongluongtrai, $cachxulythuhoach, $nsmuathuan, $slmuathuan, 
                $dacdiem, $phanloaityle, $xulydongloat, $nsmuanghich, $slmuanghich, $giaban, $tennhanvien, $manhanvien, $sx_khuvuc, $sx_kehoach,$sx_thoigianbatdau,
                $sx_muavu, $sx_tenvung, $sx_ngaysanxuat, $sx_thoigiankethuc, $sx_ghichu, $ngaythuhoach, $sanluongdukien){
            $pdo = ConnectDb::getInstance()->getConnection();
            $stmt = $pdo->prepare("call p_luu_info_vungtrong(:madonvi,:mavungtrong_id,:manongho,:tennongho,:tuoi,:diachi,:hocvan,:dientichdat,:thannvien,:thannvienlaodong,:gioitinh,:dantoc,:sudungdt,:sodienthoai,
                :usezalo,:kinhnghiem,:tuoicaytrong,:doituongtrong,:loaidat,:sacaudat,:datkhac,:dodaytang,:doph,:mucnuocngam,:nuocngapt1,:nuocngapt2,:nuocngapt3,:nuocngapt4,
                :nuocngapt5,:nuocngapt6,:nuocngapt7,:nuocngapt8,:nuocngapt9,:nuocngapt10,:nuocngapt11,:nuocngapt12,:nuocphent1,:nuocphent2,:nuocphent3,:nuocphent4,
                :nuocphent5,:nuocphent6,:nuocphent7,:nuocphent8,:nuocphent9,:nuocphent10,:nuocphent11,:nuocphent12,:nuocmant1,:nuocmant2,:nuocmant3,:nuocmant4,:nuocmant5,
                :nuocmant6,:nuocmant7,:nuocmant8,:nuocmant9,:nuocmant10,:nuocmant11,:nuocmant12,:thoigianbatdautrong,:gionggannhat,:xacnhangiong,:chephamxuly,
                :nguongocgiong,:xulycaygiong,:mucdichxuly,:matdo,:khoangcach,:timedauthuhoach,:solanthuhoach,:trongluongtrai,:cachxulythuhoach,:nsmuathuan,:slmuathuan, 
                :dacdiem,:phanloaityle,:xulydongloat,:nsmuanghich,:slmuanghich,:giaban,:tennhanvien,:manhanvien,:sx_khuvuc,:sx_kehoach,:sx_thoigianbatdau,:sx_muavu,:sx_tenvung,
                :sx_ngaysanxuat,:sx_thoigiankethuc,:sx_ghichu,:ngaythuhoach,:sanluongdukien);");
            $stmt -> bindParam(':madonvi', $madonvi, PDO::PARAM_STR);
            $stmt -> bindParam(':mavungtrong_id', $mavungtrong_id, PDO::PARAM_STR);
            $stmt -> bindParam(':manongho', $manongho, PDO::PARAM_STR);
            $stmt -> bindParam(':tennongho', $tennongho, PDO::PARAM_STR);
            $stmt -> bindParam(':tuoi', $tuoi, PDO::PARAM_STR);
            $stmt -> bindParam(':diachi', $diachi, PDO::PARAM_STR);
            $stmt -> bindParam(':hocvan', $hocvan, PDO::PARAM_STR);
            $stmt -> bindParam(':dientichdat', $dientichdat, PDO::PARAM_STR);
            $stmt -> bindParam(':thannvien', $thannvien, PDO::PARAM_STR);
            $stmt -> bindParam(':thannvienlaodong', $thannvienlaodong, PDO::PARAM_STR);
            $stmt -> bindParam(':gioitinh', $gioitinh, PDO::PARAM_STR);
            $stmt -> bindParam(':dantoc', $dantoc, PDO::PARAM_STR);
            $stmt -> bindParam(':sudungdt', $sudungdt, PDO::PARAM_STR);
            $stmt -> bindParam(':sodienthoai', $sodienthoai, PDO::PARAM_STR);
            $stmt -> bindParam(':usezalo', $usezalo, PDO::PARAM_STR);
            $stmt -> bindParam(':kinhnghiem', $kinhnghiem, PDO::PARAM_STR);
            $stmt -> bindParam(':tuoicaytrong', $tuoicaytrong, PDO::PARAM_STR);
            $stmt -> bindParam(':doituongtrong', $doituongtrong, PDO::PARAM_STR);
            $stmt -> bindParam(':loaidat', $loaidat, PDO::PARAM_STR);
            $stmt -> bindParam(':sacaudat', $sacaudat, PDO::PARAM_STR);
            $stmt -> bindParam(':datkhac', $datkhac, PDO::PARAM_STR);
            $stmt -> bindParam(':dodaytang', $dodaytang, PDO::PARAM_STR);
            $stmt -> bindParam(':doph', $doph, PDO::PARAM_STR);
            $stmt -> bindParam(':mucnuocngam', $mucnuocngam, PDO::PARAM_STR);
            $stmt -> bindParam(':nuocngapt1', $nuocngapt1, PDO::PARAM_STR);
            $stmt -> bindParam(':nuocngapt2', $nuocngapt2, PDO::PARAM_STR);
            $stmt -> bindParam(':nuocngapt3', $nuocngapt3, PDO::PARAM_STR);
            $stmt -> bindParam(':nuocngapt4', $nuocngapt4, PDO::PARAM_STR);
            $stmt -> bindParam(':nuocngapt5', $nuocngapt5, PDO::PARAM_STR);
            $stmt -> bindParam(':nuocngapt6', $nuocngapt6, PDO::PARAM_STR);
            $stmt -> bindParam(':nuocngapt7', $nuocngapt7, PDO::PARAM_STR);
            $stmt -> bindParam(':nuocngapt8', $nuocngapt8, PDO::PARAM_STR);
            $stmt -> bindParam(':nuocngapt9', $nuocngapt9, PDO::PARAM_STR);
            $stmt -> bindParam(':nuocngapt10', $nuocngapt10, PDO::PARAM_STR);
            $stmt -> bindParam(':nuocngapt11', $nuocngapt11, PDO::PARAM_STR);
            $stmt -> bindParam(':nuocngapt12', $nuocngapt12, PDO::PARAM_STR);
            $stmt -> bindParam(':nuocphent1', $nuocphent1, PDO::PARAM_STR);
            $stmt -> bindParam(':nuocphent2', $nuocphent2, PDO::PARAM_STR);
            $stmt -> bindParam(':nuocphent3', $nuocphent3, PDO::PARAM_STR);
            $stmt -> bindParam(':nuocphent4', $nuocphent4, PDO::PARAM_STR);
            $stmt -> bindParam(':nuocphent5', $nuocphent5, PDO::PARAM_STR);
            $stmt -> bindParam(':nuocphent6', $nuocphent6, PDO::PARAM_STR);
            $stmt -> bindParam(':nuocphent7', $nuocphent7, PDO::PARAM_STR);
            $stmt -> bindParam(':nuocphent8', $nuocphent8, PDO::PARAM_STR);
            $stmt -> bindParam(':nuocphent9', $nuocphent9, PDO::PARAM_STR);
            $stmt -> bindParam(':nuocphent10', $nuocphent10, PDO::PARAM_STR);
            $stmt -> bindParam(':nuocphent11', $nuocphent11, PDO::PARAM_STR);
            $stmt -> bindParam(':nuocphent12', $nuocphent12, PDO::PARAM_STR);
            $stmt -> bindParam(':nuocmant1', $nuocmant1, PDO::PARAM_STR);
            $stmt -> bindParam(':nuocmant2', $nuocmant2, PDO::PARAM_STR);
            $stmt -> bindParam(':nuocmant3', $nuocmant3, PDO::PARAM_STR);
            $stmt -> bindParam(':nuocmant4', $nuocmant4, PDO::PARAM_STR);
            $stmt -> bindParam(':nuocmant5', $nuocmant5, PDO::PARAM_STR);
            $stmt -> bindParam(':nuocmant6', $nuocmant6, PDO::PARAM_STR);
            $stmt -> bindParam(':nuocmant7', $nuocmant7, PDO::PARAM_STR);
            $stmt -> bindParam(':nuocmant8', $nuocmant8, PDO::PARAM_STR);
            $stmt -> bindParam(':nuocmant9', $nuocmant9, PDO::PARAM_STR);
            $stmt -> bindParam(':nuocmant10', $nuocmant10, PDO::PARAM_STR);
            $stmt -> bindParam(':nuocmant11', $nuocmant11, PDO::PARAM_STR);
            $stmt -> bindParam(':nuocmant12', $nuocmant12, PDO::PARAM_STR);
            $stmt -> bindParam(':thoigianbatdautrong', $thoigianbatdautrong, PDO::PARAM_STR);
            $stmt -> bindParam(':gionggannhat', $gionggannhat, PDO::PARAM_STR);
            $stmt -> bindParam(':xacnhangiong', $xacnhangiong, PDO::PARAM_STR);
            $stmt -> bindParam(':chephamxuly', $chephamxuly, PDO::PARAM_STR);
            $stmt -> bindParam(':nguongocgiong', $nguongocgiong, PDO::PARAM_STR);
            $stmt -> bindParam(':xulycaygiong', $xulycaygiong, PDO::PARAM_STR);
            $stmt -> bindParam(':mucdichxuly', $mucdichxuly, PDO::PARAM_STR);
            $stmt -> bindParam(':matdo', $matdo, PDO::PARAM_STR);
            $stmt -> bindParam(':khoangcach', $khoangcach, PDO::PARAM_STR);
            $stmt -> bindParam(':timedauthuhoach', $timedauthuhoach, PDO::PARAM_STR);
            $stmt -> bindParam(':solanthuhoach', $solanthuhoach, PDO::PARAM_STR);
            $stmt -> bindParam(':trongluongtrai', $trongluongtrai, PDO::PARAM_STR);
            $stmt -> bindParam(':cachxulythuhoach', $cachxulythuhoach, PDO::PARAM_STR);
            $stmt -> bindParam(':nsmuathuan', $nsmuathuan, PDO::PARAM_STR);
            $stmt -> bindParam(':slmuathuan', $slmuathuan, PDO::PARAM_STR);
            $stmt -> bindParam(':dacdiem', $dacdiem, PDO::PARAM_STR);
            $stmt -> bindParam(':phanloaityle', $phanloaityle, PDO::PARAM_STR);
            $stmt -> bindParam(':xulydongloat', $xulydongloat, PDO::PARAM_STR);
            $stmt -> bindParam(':nsmuanghich', $nsmuanghich, PDO::PARAM_STR);
            $stmt -> bindParam(':slmuanghich', $slmuanghich, PDO::PARAM_STR);
            $stmt -> bindParam(':giaban', $giaban, PDO::PARAM_STR);
            $stmt -> bindParam(':tennhanvien', $tennhanvien, PDO::PARAM_STR);
            $stmt -> bindParam(':manhanvien', $manhanvien, PDO::PARAM_STR);
            $stmt -> bindParam(':sx_khuvuc', $sx_khuvuc, PDO::PARAM_STR);
            $stmt -> bindParam(':sx_kehoach', $sx_kehoach, PDO::PARAM_STR);
            $stmt -> bindParam(':sx_thoigianbatdau', $sx_thoigianbatdau, PDO::PARAM_STR);
            $stmt -> bindParam(':sx_muavu', $sx_muavu, PDO::PARAM_STR);
            $stmt -> bindParam(':sx_tenvung', $sx_tenvung, PDO::PARAM_STR);
            $stmt -> bindParam(':sx_ngaysanxuat', $sx_ngaysanxuat, PDO::PARAM_STR);
            $stmt -> bindParam(':sx_thoigiankethuc', $sx_thoigiankethuc, PDO::PARAM_STR);
            $stmt -> bindParam(':sx_ghichu', $sx_ghichu, PDO::PARAM_STR);
            $stmt -> bindParam(':ngaythuhoach', $ngaythuhoach, PDO::PARAM_STR);
            $stmt -> bindParam(':sanluongdukien', $sanluongdukien, PDO::PARAM_STR);
            $stmt -> execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }

        public function FLuuThongTinCanhTac($madonvi, $idvungtrong, $canhtac_manongho, $canhtac_bobaodebao, $canhtac_ongchieucao, $canhtac_ongchieurong, 
                $canhtac_ongsl, $canhtac_ongduongkinh, $canhtac_cachdat, $canhtac_liep_dai, $canhtac_liep_rong, $canhtac_liep_cao, $canhtac_muong_dai, $canhtac_muong_rong, 
                $canhtac_muong_cao, $canhtac_motrong, $canhtac_time_dap, $canhtac_mat_chieucao, $canhtac_duongkinh, $canhtac_xuly, $canhtac_xl_chepham, $canhtac_xl_mucdich, 
                $canhtac_caychangio, $canhtac_chieucao, $canhtac_donghieng, $canhtac_tugoc, $canhtac_tuoinuoc, $canhtac_caycon_sl, $canhtac_caycon_cachtuoi, 
                $canhtac_caycon_time, $canhtac_truongthanh_sl, $canhtac_truongthanh_cachtuoi, $canhtac_truongthanh_time, $canhtac_dautrai_sl, $canhtac_dautrai_cachtuoi, 
                $canhtac_dautrai_time, $canhtac_codai, $tennhanvien){
            $pdo = ConnectDb::getInstance()->getConnection();
            $stmt = $pdo->prepare("call p_luu_thongtin_canhtac(:madonvi, :idvungtrong, :canhtac_manongho, :canhtac_bobaodebao, :canhtac_ongchieucao, :canhtac_ongchieurong, 
                :canhtac_ongsl, :canhtac_ongduongkinh, :canhtac_cachdat, :canhtac_liep_dai, :canhtac_liep_rong, :canhtac_liep_cao, :canhtac_muong_dai, :canhtac_muong_rong, 
                :canhtac_muong_cao, :canhtac_motrong, :canhtac_time_dap, :canhtac_mat_chieucao, :canhtac_duongkinh, :canhtac_xuly, :canhtac_xl_chepham, :canhtac_xl_mucdich, 
                :canhtac_caychangio, :canhtac_chieucao, :canhtac_donghieng, :canhtac_tugoc, :canhtac_tuoinuoc, :canhtac_caycon_sl, :canhtac_caycon_cachtuoi, 
                :canhtac_caycon_time, :canhtac_truongthanh_sl, :canhtac_truongthanh_cachtuoi, :canhtac_truongthanh_time, :canhtac_dautrai_sl, :canhtac_dautrai_cachtuoi, 
                :canhtac_dautrai_time, :canhtac_codai, :tennhanvien);");
            $stmt -> bindParam(':madonvi', $madonvi, PDO::PARAM_STR);
            $stmt -> bindParam(':idvungtrong', $idvungtrong, PDO::PARAM_STR);
            $stmt -> bindParam(':canhtac_manongho', $canhtac_manongho, PDO::PARAM_STR);
            $stmt -> bindParam(':canhtac_bobaodebao', $canhtac_bobaodebao, PDO::PARAM_STR);
            $stmt -> bindParam(':canhtac_ongchieucao', $canhtac_ongchieucao, PDO::PARAM_STR);
            $stmt -> bindParam(':canhtac_ongchieurong', $canhtac_ongchieurong, PDO::PARAM_STR);
            $stmt -> bindParam(':canhtac_ongsl', $canhtac_ongsl, PDO::PARAM_STR);
            $stmt -> bindParam(':canhtac_ongduongkinh', $canhtac_ongduongkinh, PDO::PARAM_STR);
            $stmt -> bindParam(':canhtac_cachdat', $canhtac_cachdat, PDO::PARAM_STR);
            $stmt -> bindParam(':canhtac_liep_dai', $canhtac_liep_dai, PDO::PARAM_STR);
            $stmt -> bindParam(':canhtac_liep_rong', $canhtac_liep_rong, PDO::PARAM_STR);
            $stmt -> bindParam(':canhtac_liep_cao', $canhtac_liep_cao, PDO::PARAM_STR);
            $stmt -> bindParam(':canhtac_muong_dai', $canhtac_muong_dai, PDO::PARAM_STR);
            $stmt -> bindParam(':canhtac_muong_rong', $canhtac_muong_rong, PDO::PARAM_STR);
            $stmt -> bindParam(':canhtac_muong_cao', $canhtac_muong_cao, PDO::PARAM_STR);
            $stmt -> bindParam(':canhtac_motrong', $canhtac_motrong, PDO::PARAM_STR);
            $stmt -> bindParam(':canhtac_time_dap', $canhtac_time_dap, PDO::PARAM_STR);
            $stmt -> bindParam(':canhtac_mat_chieucao', $canhtac_mat_chieucao, PDO::PARAM_STR);
            $stmt -> bindParam(':canhtac_duongkinh', $canhtac_duongkinh, PDO::PARAM_STR);
            $stmt -> bindParam(':canhtac_xuly', $canhtac_xuly, PDO::PARAM_STR);
            $stmt -> bindParam(':canhtac_xl_chepham', $canhtac_xl_chepham, PDO::PARAM_STR);
            $stmt -> bindParam(':canhtac_xl_mucdich', $canhtac_xl_mucdich, PDO::PARAM_STR);
            $stmt -> bindParam(':canhtac_caychangio', $canhtac_caychangio, PDO::PARAM_STR);
            $stmt -> bindParam(':canhtac_chieucao', $canhtac_chieucao, PDO::PARAM_STR);
            $stmt -> bindParam(':canhtac_donghieng', $canhtac_donghieng, PDO::PARAM_STR);
            $stmt -> bindParam(':canhtac_tugoc', $canhtac_tugoc, PDO::PARAM_STR);
            $stmt -> bindParam(':canhtac_tuoinuoc', $canhtac_tuoinuoc, PDO::PARAM_STR);
            $stmt -> bindParam(':canhtac_caycon_sl', $canhtac_caycon_sl, PDO::PARAM_STR);
            $stmt -> bindParam(':canhtac_caycon_cachtuoi', $canhtac_caycon_cachtuoi, PDO::PARAM_STR);
            $stmt -> bindParam(':canhtac_caycon_time', $canhtac_caycon_time, PDO::PARAM_STR);
            $stmt -> bindParam(':canhtac_truongthanh_sl', $canhtac_truongthanh_sl, PDO::PARAM_STR);
            $stmt -> bindParam(':canhtac_truongthanh_cachtuoi', $canhtac_truongthanh_cachtuoi, PDO::PARAM_STR);
            $stmt -> bindParam(':canhtac_truongthanh_time', $canhtac_truongthanh_time, PDO::PARAM_STR);
            $stmt -> bindParam(':canhtac_dautrai_sl', $canhtac_dautrai_sl, PDO::PARAM_STR);
            $stmt -> bindParam(':canhtac_dautrai_cachtuoi', $canhtac_dautrai_cachtuoi, PDO::PARAM_STR);
            $stmt -> bindParam(':canhtac_dautrai_time', $canhtac_dautrai_time, PDO::PARAM_STR);
            $stmt -> bindParam(':canhtac_codai', $canhtac_codai, PDO::PARAM_STR);
            $stmt -> bindParam(':tennhanvien', $tennhanvien, PDO::PARAM_STR);
            $stmt -> execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }

        public function FGetThongTinCanhTac($madonvi, $manongho, $idvungtrong){
            $pdo = ConnectDb::getInstance()->getConnection();
            $stmt = $pdo->prepare("call p_get_thongtin_canhtac(:madonvi,:manongho,:idvungtrong);");
            $stmt -> bindParam(':madonvi', $madonvi, PDO::PARAM_STR);
            $stmt -> bindParam(':manongho', $manongho, PDO::PARAM_STR);
            $stmt -> bindParam(':idvungtrong', $idvungtrong, PDO::PARAM_STR);
            $stmt -> execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }

        public function FLuuThongTinPhanBon($madonvi, $idvungtrong, $phanbon_manongho, $idct_phanbon, $phanbon_dvt, $phanbon_thoikycay, $phanbon_loaiphan, $phanbon_cachbon, $phanbon_thoidiembon, 
                $phanbon_lieuluong, $phanbon_hieuqua, $tennhanvien){
            $pdo = ConnectDb::getInstance()->getConnection();
            $stmt = $pdo->prepare("call p_luu_thongtin_phanbon(:madonvi,:idvungtrong,:phanbon_manongho,:idct_phanbon,:phanbon_dvt,:phanbon_thoikycay,:phanbon_loaiphan,:phanbon_cachbon,:phanbon_thoidiembon,
                :phanbon_lieuluong,:phanbon_hieuqua,:tennhanvien);");
            $stmt -> bindParam(':madonvi', $madonvi, PDO::PARAM_STR);
            $stmt -> bindParam(':idvungtrong', $idvungtrong, PDO::PARAM_STR);
            $stmt -> bindParam(':phanbon_manongho', $phanbon_manongho, PDO::PARAM_STR);
            $stmt -> bindParam(':idct_phanbon', $idct_phanbon, PDO::PARAM_STR);
            $stmt -> bindParam(':phanbon_dvt', $phanbon_dvt, PDO::PARAM_STR);
            $stmt -> bindParam(':phanbon_thoikycay', $phanbon_thoikycay, PDO::PARAM_STR);
            $stmt -> bindParam(':phanbon_loaiphan', $phanbon_loaiphan, PDO::PARAM_STR);
            $stmt -> bindParam(':phanbon_cachbon', $phanbon_cachbon, PDO::PARAM_STR);
            $stmt -> bindParam(':phanbon_thoidiembon', $phanbon_thoidiembon, PDO::PARAM_STR);
            $stmt -> bindParam(':phanbon_lieuluong', $phanbon_lieuluong, PDO::PARAM_STR);
            $stmt -> bindParam(':phanbon_hieuqua', $phanbon_hieuqua, PDO::PARAM_STR);
            $stmt -> bindParam(':tennhanvien', $tennhanvien, PDO::PARAM_STR);
            $stmt -> execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }

        public function FGetListThongTinPhanBon($madonvi, $idvungtrong, $manongho){
            $pdo = ConnectDb::getInstance()->getConnection();
            $stmt = $pdo->prepare("call p_load_list_phanbon(:madonvi,:idvungtrong,:manongho);");
            $stmt -> bindParam(':madonvi', $madonvi, PDO::PARAM_STR);
            $stmt -> bindParam(':manongho', $manongho, PDO::PARAM_STR);
            $stmt -> bindParam(':idvungtrong', $idvungtrong, PDO::PARAM_STR);
            $stmt -> execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }



        public function FGetPhoneNumber($madinhdanh){
            $pdo = ConnectDb::getInstance()->getConnection();
            $stmt = $pdo->prepare("call p_get_phonenumber(:madinhdanh);");
            $stmt -> bindParam(':madinhdanh', $madinhdanh, PDO::PARAM_STR);
            $stmt -> execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
    }
?>