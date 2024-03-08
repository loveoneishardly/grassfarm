<?php
    session_start();
    include_once('controllers/AppController.php');
    include_once('controllers/TaiKhoanController.php');
    include_once('controllers/DanhMucController.php');
    include_once('controllers/QrCode.php');

    if(isset($_GET['check'])) {
        $check_session = 0;
		if(!isset($_SESSION["sansang"])){
            $check_session = "";
        } else {
            if($_SESSION["sansang"] != "1"){
                $check_session = $_SESSION["sansang"];
            }
        }

        ob_start();

        switch ($_GET['check']) {
            case "_home":
                include("pages/index.php");
            break;
            case "_index":
                include("pages/login.php");
            break;
            default:
                include("pages/ferror.php");
            break;
        }
        echo ob_get_clean();
    }

    if(isset($_POST['for'])) {
        switch ($_POST['for']) {
            case "login":
                $md5pass = md5($_POST['matkhau']);
                $trangthai = (new TaiKhoanController())->FLogin($_POST['taikhoan'], $md5pass);
                echo json_encode($trangthai);
            break;
            case "get_thongtin_vungtrong_ct":
                if(isset($_SESSION["madv"])){
                    $madonvi = $_POST['madonvi'];
                    $idvungtrong = $_POST['idvungtrong'];
                    $manongho = $_POST['manongho'];
                    $manhanvien = $_POST['manhanvien'];
                    $res = (new AppController())->FGetInfoDetail_Vungtrong($madonvi, $idvungtrong, $manongho, $manhanvien);
                    echo json_encode($res);
                }
            break;
            case "get_thongtin_nongho":
                if(isset($_SESSION["madv"])){
                    $madonvi = $_POST['madonvi'];
                    $manongho = $_POST['manongho'];
                    $res = (new AppController())->FGetInfoNongho($madonvi, $manongho);
                    echo json_encode($res);
                }
            break;
            case "luu_thongtin_vungtrong":
                if(isset($_SESSION["madv"])){
                    $mavungtrong_id = $_POST['mavungtrong_id'];
                    $madonvi = $_POST['madonvi'];
                    $manongho = $_POST['manongho'];
                    $tennongho = $_POST['tennongho'];
                    $tuoi = $_POST['tuoi'];
                    $diachi = $_POST['diachi'];
                    $hocvan = $_POST['hocvan'];
                    $dientichdat = $_POST['dientichdat'];
                    $thannvien = $_POST['thannvien'];
                    $thannvienlaodong = $_POST['thannvienlaodong'];
                    $gioitinh = $_POST['gioitinh'];
                    $dantoc = $_POST['dantoc'];
                    $sudungdt = $_POST['sudungdt'];
                    $sodienthoai = $_POST['sodienthoai'];
                    $usezalo = $_POST['usezalo'];
                    $kinhnghiem = $_POST['kinhnghiem'];
                    $tuoicaytrong = $_POST['tuoicaytrong'];
                    $doituongtrong = $_POST['doituongtrong'];
                    $loaidat = $_POST['loaidat'];
                    $sacaudat = $_POST['sacaudat'];
                    $datkhac = $_POST['datkhac'];
                    $dodaytang = $_POST['dodaytang'];
                    $doph = $_POST['doph'];
                    $mucnuocngam = $_POST['mucnuocngam'];
                    $nuocngapt1 = $_POST['nuocngapt1'];
                    $nuocngapt2 = $_POST['nuocngapt2'];
                    $nuocngapt3 = $_POST['nuocngapt3'];
                    $nuocngapt4 = $_POST['nuocngapt4'];
                    $nuocngapt5 = $_POST['nuocngapt5'];
                    $nuocngapt6 = $_POST['nuocngapt6'];
                    $nuocngapt7 = $_POST['nuocngapt7'];
                    $nuocngapt8 = $_POST['nuocngapt8'];
                    $nuocngapt9 = $_POST['nuocngapt9'];
                    $nuocngapt10 = $_POST['nuocngapt10'];
                    $nuocngapt11 = $_POST['nuocngapt11'];
                    $nuocngapt12 = $_POST['nuocngapt12'];
                    $nuocphent1 = $_POST['nuocphent1'];
                    $nuocphent2 = $_POST['nuocphent2'];
                    $nuocphent3 = $_POST['nuocphent3'];
                    $nuocphent4 = $_POST['nuocphent4'];
                    $nuocphent5 = $_POST['nuocphent5'];
                    $nuocphent6 = $_POST['nuocphent6'];
                    $nuocphent7 = $_POST['nuocphent7'];
                    $nuocphent8 = $_POST['nuocphent8'];
                    $nuocphent9 = $_POST['nuocphent9'];
                    $nuocphent10 = $_POST['nuocphent10'];
                    $nuocphent11 = $_POST['nuocphent11'];
                    $nuocphent12 = $_POST['nuocphent12'];
                    $nuocmant1 = $_POST['nuocmant1'];
                    $nuocmant2 = $_POST['nuocmant2'];
                    $nuocmant3 = $_POST['nuocmant3'];
                    $nuocmant4 = $_POST['nuocmant4'];
                    $nuocmant5 = $_POST['nuocmant5'];
                    $nuocmant6 = $_POST['nuocmant6'];
                    $nuocmant7 = $_POST['nuocmant7'];
                    $nuocmant8 = $_POST['nuocmant8'];
                    $nuocmant9 = $_POST['nuocmant9'];
                    $nuocmant10 = $_POST['nuocmant10'];
                    $nuocmant11 = $_POST['nuocmant11'];
                    $nuocmant12 = $_POST['nuocmant12'];
                    $thoigianbatdautrong = $_POST['thoigianbatdautrong'];
                    $gionggannhat = $_POST['gionggannhat'];
                    $xacnhangiong = $_POST['xacnhangiong'];
                    $chephamxuly = $_POST['chephamxuly'];
                    $nguongocgiong = $_POST['nguongocgiong'];
                    $xulycaygiong = $_POST['xulycaygiong'];
                    $mucdichxuly = $_POST['mucdichxuly'];
                    $matdo = $_POST['matdo'];
                    $khoangcach = $_POST['khoangcach'];
                    $timedauthuhoach = $_POST['timedauthuhoach'];
                    $solanthuhoach = $_POST['solanthuhoach'];
                    $trongluongtrai = $_POST['trongluongtrai'];
                    $cachxulythuhoach = $_POST['cachxulythuhoach'];
                    $nsmuathuan = $_POST['nsmuathuan'];
                    $slmuathuan = $_POST['slmuathuan'];
                    $dacdiem = $_POST['dacdiem'];
                    $phanloaityle = $_POST['phanloaityle'];
                    $xulydongloat = $_POST['xulydongloat'];
                    $nsmuanghich = $_POST['nsmuanghich'];
                    $slmuanghich = $_POST['slmuanghich'];
                    $giaban = $_POST['giaban'];
                    $manhanvien = $_POST['manhanvien'];
                    $tennhanvien = $_SESSION['tennv'];
                    $sx_khuvuc = $_POST['sx_khuvuc'];
                    $sx_kehoach = $_POST['sx_kehoach'];
                    $sx_thoigianbatdau = $_POST['sx_thoigianbatdau'];
                    $sx_muavu = $_POST['sx_muavu'];
                    $sx_tenvung = $_POST['sx_tenvung'];
                    $sx_ngaysanxuat = $_POST['sx_ngaysanxuat'];
                    $sx_thoigiankethuc = $_POST['sx_thoigiankethuc'];
                    $sx_ghichu = $_POST['sx_ghichu'];
                    $ngaythuhoach = $_POST['ngaythuhoach'];
                    $sanluongdukien = $_POST['sanluongdukien'];
                    $res = (new AppController())->FSaveInfoNongho($madonvi, $mavungtrong_id, $manongho, $tennongho, $tuoi, $diachi, $hocvan, $dientichdat, $thannvien, $thannvienlaodong, $gioitinh, $dantoc,
                        $sudungdt, $sodienthoai, $usezalo, $kinhnghiem, $tuoicaytrong, $doituongtrong, $loaidat, $sacaudat, $datkhac, $dodaytang, $doph, $mucnuocngam, $nuocngapt1, $nuocngapt2,
                        $nuocngapt3, $nuocngapt4, $nuocngapt5, $nuocngapt6, $nuocngapt7, $nuocngapt8, $nuocngapt9, $nuocngapt10, $nuocngapt11, $nuocngapt12, $nuocphent1, $nuocphent2,
                        $nuocphent3, $nuocphent4, $nuocphent5, $nuocphent6, $nuocphent7, $nuocphent8, $nuocphent9, $nuocphent10, $nuocphent11, $nuocphent12, $nuocmant1, $nuocmant2,
                        $nuocmant3, $nuocmant4, $nuocmant5, $nuocmant6, $nuocmant7, $nuocmant8, $nuocmant9, $nuocmant10, $nuocmant11, $nuocmant12, $thoigianbatdautrong, $gionggannhat,
                        $xacnhangiong, $chephamxuly, $nguongocgiong, $xulycaygiong, $mucdichxuly, $matdo, $khoangcach, $timedauthuhoach, $solanthuhoach, $trongluongtrai, $cachxulythuhoach,
                        $nsmuathuan, $slmuathuan, $dacdiem, $phanloaityle, $xulydongloat, $nsmuanghich, $slmuanghich, $giaban, $tennhanvien, $manhanvien, $sx_khuvuc, $sx_kehoach,$sx_thoigianbatdau,
                        $sx_muavu, $sx_tenvung, $sx_ngaysanxuat, $sx_thoigiankethuc, $sx_ghichu, $ngaythuhoach, $sanluongdukien);
                    echo json_encode($res);
                }
            break;
            case "get_list_vungtrong_nongho":
                if(isset($_SESSION["madv"])){
                    $madonvi = $_POST['madonvi'];
                    $manongho = $_POST['manongho'];
                    $res = (new AppController())->FDanhSachVungTrong($madonvi, $manongho);
                    echo json_encode($res);
                }
            break;
            case "luu_thongtin_canhtac":
                if(isset($_SESSION["madv"])){
                    $madonvi = $_POST['madonvi'];
                    $idvungtrong = $_POST['idvungtrong'];
                    $canhtac_manongho = $_POST['canhtac_manongho'];
                    $canhtac_bobaodebao = $_POST['canhtac_bobaodebao'];
                    $canhtac_ongchieucao = $_POST['canhtac_ong_chieucao'];
                    $canhtac_ongchieurong = $_POST['canhtac_ong_chieurong'];
                    $canhtac_ongsl = $_POST['canhtac_ong_sl'];
                    $canhtac_ongduongkinh = $_POST['canhtac_ong_duongkinh'];
                    $canhtac_cachdat = $_POST['canhtac_cachdat'];
                    $canhtac_liep_dai = $_POST['canhtac_liep_dai'];
                    $canhtac_liep_rong = $_POST['canhtac_liep_rong'];
                    $canhtac_liep_cao = $_POST['canhtac_liep_cao'];
                    $canhtac_muong_dai = $_POST['canhtac_muong_dai'];
                    $canhtac_muong_rong = $_POST['canhtac_muong_rong'];
                    $canhtac_muong_cao = $_POST['canhtac_muong_cao'];
                    $canhtac_motrong = $_POST['canhtac_motrong'];
                    $canhtac_time_dap = $_POST['canhtac_time_dap'];
                    $canhtac_mat_chieucao = $_POST['canhtac_mat_chieucao'];
                    $canhtac_duongkinh = $_POST['canhtac_duongkinh'];
                    $canhtac_xuly = $_POST['canhtac_xuly'];
                    $canhtac_xl_chepham = $_POST['canhtac_xl_chepham'];
                    $canhtac_xl_mucdich = $_POST['canhtac_xl_mucdich'];
                    $canhtac_caychangio = $_POST['canhtac_caychangio'];
                    $canhtac_chieucao = $_POST['canhtac_chieucao'];
                    $canhtac_donghieng = $_POST['canhtac_donghieng'];
                    $canhtac_tugoc = $_POST['canhtac_tugoc'];
                    $canhtac_tuoinuoc = $_POST['canhtac_tuoinuoc'];
                    $canhtac_caycon_sl = $_POST['canhtac_caycon_sl'];
                    $canhtac_caycon_cachtuoi = $_POST['canhtac_caycon_cachtuoi'];
                    $canhtac_caycon_time = $_POST['canhtac_caycon_time'];
                    $canhtac_truongthanh_sl = $_POST['canhtac_truongthanh_sl'];
                    $canhtac_truongthanh_cachtuoi = $_POST['canhtac_truongthanh_cachtuoi'];
                    $canhtac_truongthanh_time = $_POST['canhtac_truongthanh_time'];
                    $canhtac_dautrai_sl = $_POST['canhtac_dautrai_sl'];
                    $canhtac_dautrai_cachtuoi = $_POST['canhtac_dautrai_cachtuoi'];
                    $canhtac_dautrai_time = $_POST['canhtac_dautrai_time'];
                    $canhtac_codai = $_POST['canhtac_codai'];
                    $tennhanvien = $_POST['tennhanvien'];
                    $res = (new AppController())->FLuuThongTinCanhTac($madonvi, $idvungtrong, $canhtac_manongho, $canhtac_bobaodebao, $canhtac_ongchieucao, $canhtac_ongchieurong, 
                        $canhtac_ongsl, $canhtac_ongduongkinh, $canhtac_cachdat, $canhtac_liep_dai, $canhtac_liep_rong, $canhtac_liep_cao, $canhtac_muong_dai, $canhtac_muong_rong, 
                        $canhtac_muong_cao, $canhtac_motrong, $canhtac_time_dap, $canhtac_mat_chieucao, $canhtac_duongkinh, $canhtac_xuly, $canhtac_xl_chepham, $canhtac_xl_mucdich, 
                        $canhtac_caychangio, $canhtac_chieucao, $canhtac_donghieng, $canhtac_tugoc, $canhtac_tuoinuoc, $canhtac_caycon_sl, $canhtac_caycon_cachtuoi, 
                        $canhtac_caycon_time, $canhtac_truongthanh_sl, $canhtac_truongthanh_cachtuoi, $canhtac_truongthanh_time, $canhtac_dautrai_sl, $canhtac_dautrai_cachtuoi, 
                        $canhtac_dautrai_time, $canhtac_codai, $tennhanvien);
                    echo json_encode($res);
                }
            break;
            case "luu_thongtin_phanbon":
                if(isset($_SESSION["madv"])){
                    $madonvi = $_POST['madonvi'];
                    $idvungtrong = $_POST['idvungtrong'];
                    $phanbon_manongho = $_POST['phanbon_manongho'];
                    $phanbon_dvt = $_POST['phanbon_dvt'];
                    $phanbon_thoikycay = $_POST['phanbon_thoikycay'];
                    $phanbon_loaiphan = $_POST['phanbon_loaiphan'];
                    $phanbon_cachbon = $_POST['phanbon_cachbon'];
                    $phanbon_thoidiembon = $_POST['phanbon_thoidiembon'];
                    $phanbon_lieuluong = $_POST['phanbon_lieuluong'];
                    $phanbon_hieuqua = $_POST['phanbon_hieuqua'];
                    $idct_phanbon = $_POST['idct_phanbon'];
                    $tennhanvien = $_POST['tennhanvien'];
                    $res = (new AppController())->FLuuThongTinPhanBon($madonvi, $idvungtrong, $phanbon_manongho, $idct_phanbon, $phanbon_dvt, $phanbon_thoikycay, $phanbon_loaiphan, $phanbon_cachbon, $phanbon_thoidiembon, 
                        $phanbon_lieuluong, $phanbon_hieuqua, $tennhanvien);
                    echo json_encode($res);
                }
            break;
            case "get_thongtin_canhtac":
                if(isset($_SESSION["madv"])){
                    $madonvi = $_POST['madonvi'];
                    $manongho = $_POST['manongho'];
                    $idvungtrong = $_POST['idvungtrong'];
                    $res = (new AppController())->FGetThongTinCanhTac($madonvi, $manongho, $idvungtrong);
                    echo json_encode($res);
                }
            break;
            case "logout":
                echo (new TaikhoanController())->FLogout_web();
            break;
            case "check_captcha":
                if (isset($_POST['captcha'])){
                    if (strtolower($_SESSION['captcha']) != strtolower(trim($_POST['captcha']))){
                        echo json_encode(array("trangthai" => 'false', "cap" => $_SESSION['captcha']));
                    } else {
                        echo json_encode(array("trangthai" => 'true', "cap" => $_SESSION['captcha']));
                    }
                }
            break;
            case "_taomaqrcode":
                $ID = $_POST['mavungtrong'];
                $res = (new CreateQRCode())->CreateQRcodeVungTrong($ID);
                echo $res;
            break;
            default:
                echo "Chức năng không tồn tại";
            break;
        }
    }

    if(isset($_GET['for'])) {
        switch ($_GET['for']) {
            case "load_list_nongho":
                $madonvi = $_GET['madonvi'];
                $res = (new DanhMucController())->FDanhSachNongHo($madonvi);
                echo json_encode($res);
            break;
            case "load_list_loaisp":
                $madonvi = $_GET['madonvi'];
                $res = (new DanhMucController())->FDanhSachLoaiSanPham($madonvi);
                echo json_encode($res);
            break;
            case "load_list_vungtrong":
                $madonvi = $_GET['madonvi'];
                $manhanvien = $_GET['manhanvien'];
                $res = (new AppController())->FDanhSachVungTrong($madonvi, $manhanvien);
                echo json_encode($res);
            break;
            case "load_list_kythuatbonphan":
                if(isset($_SESSION["madv"])){
                    $madonvi = $_GET['madonvi'];
                    $idvungtrong = $_GET['idvungtrong'];
                    $manongho = $_GET['manongho'];
                    $res = (new AppController())->FGetListThongTinPhanBon($madonvi, $idvungtrong, $manongho);
                    echo json_encode($res);
                }
            break;
            case "check_captcha":
                if (isset($_POST['captcha'])){
                    if (strtolower($_SESSION['captcha']) != strtolower(trim($_POST['captcha']))){
                        echo json_encode(array("trangthai" => 'false', "cap" => $_SESSION['captcha']));
                    } else {
                        echo json_encode(array("trangthai" => 'true', "cap" => $_SESSION['captcha']));
                    }
                }
            break;
            case "loadlistvungtrong":
                $iddonvi = $_GET['iddonvi'];
                $res = (new AppController())->LoadListVungTrong($iddonvi);
                echo json_encode($res);
            break;
            default:
                echo "Chức năng không tồn tại";
            break;
        }
    }

    if(isset($_GET['page'])) {
        
        if(!isset($_SESSION["sansang"])){
                header("Location: go?check=_home");
        } else {
            if($_SESSION["sansang"] != "1"){
                header("Location: go?check=_home");
            }
        }
        
        ob_start();

        switch ($_GET['page']) {
            case "_home":
                include("pages/index.php");
            break;
            case "_main":
                $danhsach_nongho = (new DanhMucController())->FDanhSachNongHo($_SESSION['madv']);
                // $danhsach_vuntrong = (new AppController())->FDanhSachVungTrong($_SESSION["madv"], $_SESSION["manv"]);
                include("pages/manage.php");
            break;
            default:
                include("pages/ferror.php");
            break;
        }
        echo ob_get_clean();
    }
?>