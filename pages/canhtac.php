<div class="app-title">
    <div>
        <h1><i class="fa fa-briefcase"></i> Kỹ thuật canh tác</h1>
        <p>Kỹ thuật canh tác</p>
    </div>
    <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item"><a href="go?page=_main&subP=controlboard" style="color:black !important"><i class="fa fa-home fa-lg"></i></a></li>
        <li class="breadcrumb-item"><a href="javascript:void(0);">Nhật ký sản xuất</a></li>
        <li class="breadcrumb-item"><a href="go?page=_main&subP=kythuatcanhtac">Kỹ thuật canh tác</a></li>
    </ul>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="tile">
            <div class="tile mb-4">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="page-header">
                            <h3 class="mb-3" id="navs">Thông tin vùng trồng</h3>
                        </div>
                        <div class="form-group">
                            <select class="form-control" id="vungtrong_nongho" name="vungtrong_nongho">
                                <option value="---">-- Chọn nông hộ --</option>
                                <?php
                                    foreach ($danhsach_nongho as $key) {
                                        echo '<option value="'.$key['MA_NONG_HO'].'">'.$key['TEN_NONG_HO'].'</option>';
                                    }
                                ?>
                            </select >
                        </div>
                        <div class="form-group">
                            <select class="form-control" id="vungtrong_thongtinvungtrong" name="vungtrong_thongtinvungtrong">
                                <option value="---">-- Chọn vùng trồng --</option>
                                <!-- <?php
                                    foreach ($danhsach_vuntrong as $key) {
                                        echo '<option value="'.$key['ID_VUNG_TRONG'].'">'.$key['TEN_VUNG_TRONG'].' - '.$key['TEN_KHU_VUC'].' - '.$key['DIEN_TICH_DAT'].'</option>';
                                    }
                                ?> -->
                            </select >
                        </div>
                    </div>
                </div>
            </div>
            <div class="tile mb-4">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="page-header">
                            <h3 class="mb-3">Thông tin kỹ thuật canh tác</h3>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="page-header">
                            <h5 class="mb-3">Bờ bao, đê bao</h5>
                        </div>
                        <div class="form-group">
                            <select class="form-control" id="canhtac_bobaodebao" name="">
                                <option value="1">Chung</option>
                                <option value="2">Riêng</option>
                                <option value="3">Cả hai</option>
                            </select >
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="control-label">Chiều cao</label>
                            <input id="canhtac_ong_chieucao" name="" class="form-control" type="text" placeholder="">
                        </div>
                    </div>
                    <div class="col-lg-6 offset-lg-0">
                        <div class="form-group">
                            <label class="control-label">Chiều rộng</label>
                            <input id="canhtac_ong_chieurong" name="" class="form-control" type="text" placeholder="">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="page-header">
                            <h5 class="mb-3">Cống, bọng</h5>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Số lượng</label>
                            <input id="canhtac_ong_sl" name="" class="form-control" type="text" placeholder="">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Đường kính</label>
                            <input id="canhtac_ong_duongkinh" name="" class="form-control" type="text" placeholder="">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Cách đặt ống, bọng</label>
                            <input id="canhtac_cachdat" name="" class="form-control" type="text" placeholder="">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="page-header">
                            <h5 class="mb-3">Kích thước mương liếp</h5>
                        </div>
                        <div class="form-group">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>Dài (m)</th>
                                        <th>Rộng (m)</th>
                                        <th>Cao (m)</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Liếp</td>
                                        <td><input type="text" class="input-new" id="canhtac_liep_dai" name="canhtac_liep_dai"/></td>
                                        <td><input type="text" class="input-new" id="canhtac_liep_rong" name="canhtac_liep_rong"/></td>
                                        <td><input type="text" class="input-new" id="canhtac_liep_cao" name="canhtac_liep_cao"/></td>
                                    </tr>
                                    <tr>
                                        <td>Mương</td>
                                        <td><input type="text" class="input-new" id="canhtac_muong_dai" name="canhtac_muong_dai"/></td>
                                        <td><input type="text" class="input-new" id="canhtac_muong_rong" name="canhtac_muong_rong"/></td>
                                        <td><input type="text" class="input-new" id="canhtac_muong_cao" name="canhtac_muong_cao"/></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="page-header">
                            <h5 class="mb-3">Mô trồng</h5>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="control-label">&nbsp;</label>
                            <select class="form-control" id="canhtac_motrong" name="">
                                <option value="0">Không</option>
                                <option value="1">Có</option>
                            </select >
                        </div>
                    </div>
                    <div class="col-lg-6 offset-lg-0">
                        <div class="form-group">
                            <label class="control-label">Thời gian đắp mô trước khi trồng</label>
                            <input id="canhtac_time_dap" name="" class="form-control" type="text" placeholder="">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="page-header">
                            <h5 class="mb-3">Mặt mô</h5>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="control-label">Chiều cao</label>
                            <input id="canhtac_mat_chieucao" name="" class="form-control" type="text" placeholder="">
                        </div>
                    </div>
                    <div class="col-lg-6 offset-lg-0">
                        <div class="form-group">
                            <label class="control-label">Đường kính</label>
                            <input id="canhtac_duongkinh" name="" class="form-control" type="text" placeholder="">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="page-header">
                            <h5 class="mb-3">Xử lý đất trước khi trồng</h5>
                        </div>
                        <div class="form-group">
                            <select class="form-control" id="canhtac_xuly" name="">
                                <option value="0">Không</option>
                                <option value="1">Có</option>
                            </select >
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="control-label">Chế phẩm xử lý</label>
                            <input id="canhtac_xl_chepham" name="" class="form-control" type="text" placeholder="">
                        </div>
                    </div>
                    <div class="col-lg-6 offset-lg-0">
                        <div class="form-group">
                            <label class="control-label">Mục đích xử lý đất để làm gì?</label>
                            <input id="canhtac_xl_mucdich" name="" class="form-control" type="text" placeholder="">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="page-header">
                            <h5 class="mb-3">Cây chắn gió</h5>
                        </div>
                        <div class="form-group">
                            <select class="form-control" id="canhtac_caychangio" name="">
                                <option value="0">Không</option>
                                <option value="1">Có</option>
                            </select >
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="page-header">
                            <h5 class="mb-3">Chiều cao cây so với mặt mô</h5>
                        </div>
                        <div class="form-group">
                            <input id="canhtac_chieucao" name="" class="form-control" type="text" placeholder="">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="page-header">
                            <h5 class="mb-3">Độ nghiêng của cây</h5>
                        </div>
                        <div class="form-group">
                            <input id="canhtac_donghieng" name="" class="form-control" type="text" placeholder="">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="page-header">
                            <h5 class="mb-3">Tủ gốc giữ ẩm</h5>
                        </div>
                        <div class="form-group">
                            <select class="form-control" id="canhtac_tugoc" name="">
                                <option value="0">Không</option>
                                <option value="1">Có</option>
                            </select >
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="page-header">
                            <h5 class="mb-3">Tưới nước</h5>
                        </div>
                        <div class="form-group">
                            <select class="form-control" id="canhtac_tuoinuoc" name="">
                                <option value="0">Không</option>
                                <option value="1">Có</option>
                            </select >
                        </div>
                        <div class="form-group">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Giai đoạn</th>
                                        <th>Số lần/ ngày</th>
                                        <th>Cách tưới</th>
                                        <th>Thời gian tưới</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Cây con</td>
                                        <td><input type="text" class="input-new" id="canhtac_caycon_sl" name="canhtac_caycon_sl"/></td>
                                        <td><input type="text" class="input-new" id="canhtac_caycon_cachtuoi" name="canhtac_caycon_cachtuoi"/></td>
                                        <td><input type="text" class="input-new" id="canhtac_caycon_time" name="canhtac_caycon_time"/></td>
                                    </tr>
                                    <tr>
                                        <td>Cây trưởng thành</td>
                                        <td><input type="text" class="input-new" id="canhtac_truongthanh_sl" name=""/></td>
                                        <td><input type="text" class="input-new" id="canhtac_truongthanh_cachtuoi" name=""/></td>
                                        <td><input type="text" class="input-new" id="canhtac_truongthanh_time" name=""/></td>
                                    </tr>
                                    <tr>
                                        <td>Ra hoa đậu trái</td>
                                        <td><input type="text" class="input-new" id="canhtac_dautrai_sl" name=""/></td>
                                        <td><input type="text" class="input-new" id="canhtac_dautrai_cachtuoi" name=""/></td>
                                        <td><input type="text" class="input-new" id="canhtac_dautrai_time" name=""/></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="page-header">
                            <h5 class="mb-3">Quản lý cỏ dại</h5>
                        </div>
                        <div class="form-group">
                            <input id="canhtac_codai" name="canhtac_codai" class="form-control" type="text" placeholder="">
                        </div>
                        <div class="form-group">
                            <div class="bs-component" style="display: flex !important; justify-content: center !important;">
                                <button id="canhtac_luuthontin" name="canhtac_luuthontin" class="btn btn-primary" type="button" style="margin-bottom:2px !important"><i class="fa fa-fw fa-lg fa-check-circle"></i>LƯU THÔNG TIN</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    var admin = <?php echo $_SESSION["admin"]; ?>;
    var madonvi = <?php echo $_SESSION["madv"]; ?>;
    var manhanvien = <?php echo $_SESSION["manv"]; ?>;
    var tennhanvien = <?php echo "'".$_SESSION["tennv"]."'"; ?>;
    $(document).ready(function () {
        $("#vungtrong_nongho").val(manhanvien);
        load_vungtrong_nongho(madonvi, manhanvien)
        if (admin == "1"){
            $("#vungtrong_nongho").prop("disabled", true);
        }
        $("#vungtrong_nongho").change(function (evt) {
            var manhanvien = $("#vungtrong_nongho").val();
            load_vungtrong_nongho(madonvi, manhanvien);
        });
        $("#vungtrong_thongtinvungtrong").change(function (evt) {
            var idvungtrong = $("#vungtrong_thongtinvungtrong").val();
            var canhtac_manongho = $("#vungtrong_nongho").val();
            load_thongtin_canhtac_vungtrong(madonvi, canhtac_manongho, idvungtrong);
        });
        $("#canhtac_luuthontin").click(function(evt){
            var idvungtrong = $("#vungtrong_thongtinvungtrong").val();
            var canhtac_manongho = $("#vungtrong_nongho").val();
            luu_thongtin_canhtac_vungtrong(madonvi, canhtac_manongho, idvungtrong)

        });
    });
    function load_thongtin_canhtac_vungtrong(madonvi, manongho, idvungtrong){
        $.ajax({
            type: 'POST',
            url: 'go',
            data: {
                for: "get_thongtin_canhtac",
                madonvi: madonvi,
                manongho: manongho,
                idvungtrong: idvungtrong
            }
        }).done(function(data){
            var j_data = JSON.parse(data);
            if (j_data.length > 0) {
                $("#canhtac_bobaodebao").val(j_data[0].KTCT_BOBAO_DEBAO);
                $("#canhtac_ong_chieucao").val(j_data[0].KTCT_CHIEUCAO);
                $("#canhtac_ong_chieurong").val(j_data[0].KTCT_CHIEURONG);
                $("#canhtac_ong_sl").val(j_data[0].KTCT_ONGBONG_SL);
                $("#canhtac_ong_duongkinh").val(j_data[0].KTCT_ONGBONG_DK);
                $("#canhtac_cachdat").val(j_data[0].KTCT_CACHDAT);
                $("#canhtac_liep_dai").val(j_data[0].KTCT_LIEP_DAI);
                $("#canhtac_liep_rong").val(j_data[0].KTCT_LIEP_RONG);
                $("#canhtac_liep_cao").val(j_data[0].KTCT_LIEP_CAO);
                $("#canhtac_muong_dai").val(j_data[0].KTCT_MUONG_DAI);
                $("#canhtac_muong_rong").val(j_data[0].KTCT_MUONG_RONG);
                $("#canhtac_muong_cao").val(j_data[0].KTCT_MUONG_CAO);
                $("#canhtac_motrong").val(j_data[0].KTCT_MOTRONG);
                $("#canhtac_time_dap").val(j_data[0].KTCT_TIME_DAP);
                $("#canhtac_mat_chieucao").val(j_data[0].KTCT_MAT_CHIEUCAO);
                $("#canhtac_duongkinh").val(j_data[0].KTCT_MAT_DUONGKINH);
                $("#canhtac_xuly").val(j_data[0].KTCT_XL_DAT);
                $("#canhtac_xl_chepham").val(j_data[0].KTCT_XL_CHEPHAM);
                $("#canhtac_xl_mucdich").val(j_data[0].KTCT_XL_MUCDICH);
                $("#canhtac_caychangio").val(j_data[0].KTCT_CAYCHAN_GIO);
                $("#canhtac_chieucao").val(j_data[0].KTCT_CHIEUCAO_CAY);
                $("#canhtac_donghieng").val(j_data[0].KTCT_DONGHIENG_CAY);
                $("#canhtac_tugoc").val(j_data[0].KTCT_TUGOC);
                $("#canhtac_tuoinuoc").val(j_data[0].KTCT_TUOINUOC);
                $("#canhtac_caycon_sl").val(j_data[0].KTCT_CAYCON_SOLAN);
                $("#canhtac_caycon_cachtuoi").val(j_data[0].KTCT_CAYCON_CACHTUOI);
                $("#canhtac_caycon_time").val(j_data[0].KTCT_CAYCON_TIME);
                $("#canhtac_truongthanh_sl").val(j_data[0].KTCT_TRUONGTHANH_SOLAN);
                $("#canhtac_truongthanh_cachtuoi").val(j_data[0].KTCT_TRUONGTHANH_CACHTUOI);
                $("#canhtac_truongthanh_time").val(j_data[0].KTCT_TRUONGTHANH_TIME);
                $("#canhtac_dautrai_sl").val(j_data[0].KTCT_RAHOA_SOLAN);
                $("#canhtac_dautrai_cachtuoi").val(j_data[0].KTCT_RAHOA_CACHTUOI);
                $("#canhtac_dautrai_time").val(j_data[0].KTCT_RAHOA_TIME);
                $("#canhtac_codai").val(j_data[0].KTCT_QL_CODAI);
            } else {
                $("#canhtac_bobaodebao").val('-1');
                $("#canhtac_ong_chieucao").val('');
                $("#canhtac_ong_chieurong").val('');
                $("#canhtac_ong_sl").val('');
                $("#canhtac_ong_duongkinh").val('');
                $("#canhtac_cachdat").val('');
                $("#canhtac_liep_dai").val('');
                $("#canhtac_liep_rong").val('');
                $("#canhtac_liep_cao").val('');
                $("#canhtac_muong_dai").val('');
                $("#canhtac_muong_rong").val('');
                $("#canhtac_muong_cao").val('');
                $("#canhtac_motrong").val('-1');
                $("#canhtac_time_dap").val('');
                $("#canhtac_mat_chieucao").val('');
                $("#canhtac_duongkinh").val('');
                $("#canhtac_xuly").val('-1');
                $("#canhtac_xl_chepham").val('');
                $("#canhtac_xl_mucdich").val('');
                $("#canhtac_caychangio").val('-1');
                $("#canhtac_chieucao").val('');
                $("#canhtac_donghieng").val('');
                $("#canhtac_tugoc").val('-1');
                $("#canhtac_tuoinuoc").val('-1');
                $("#canhtac_caycon_sl").val('');
                $("#canhtac_caycon_cachtuoi").val('');
                $("#canhtac_caycon_time").val('');
                $("#canhtac_truongthanh_sl").val('');
                $("#canhtac_truongthanh_cachtuoi").val('');
                $("#canhtac_truongthanh_time").val('');
                $("#canhtac_dautrai_sl").val('');
                $("#canhtac_dautrai_cachtuoi").val('');
                $("#canhtac_dautrai_time").val('');
                $("#canhtac_codai").val('');
            }
        });
    }
    function luu_thongtin_canhtac_vungtrong(madonvi, manongho, idvungtrong){
        var canhtac_bobaodebao = $("#canhtac_bobaodebao").val();
        var canhtac_ong_chieucao = $("#canhtac_ong_chieucao").val();
        var canhtac_ong_chieurong = $("#canhtac_ong_chieurong").val();
        var canhtac_ong_sl = $("#canhtac_ong_sl").val();
        var canhtac_ong_duongkinh = $("#canhtac_ong_duongkinh").val();
        var canhtac_cachdat = $("#canhtac_cachdat").val();
        var canhtac_liep_dai = $("#canhtac_liep_dai").val();
        var canhtac_liep_rong = $("#canhtac_liep_rong").val();
        var canhtac_liep_cao = $("#canhtac_liep_cao").val();
        var canhtac_muong_dai = $("#canhtac_muong_dai").val();
        var canhtac_muong_rong = $("#canhtac_muong_rong").val();
        var canhtac_muong_cao = $("#canhtac_muong_cao").val();
        var canhtac_motrong = $("#canhtac_motrong").val();
        var canhtac_time_dap = $("#canhtac_time_dap").val();
        var canhtac_mat_chieucao = $("#canhtac_mat_chieucao").val();
        var canhtac_duongkinh = $("#canhtac_duongkinh").val();
        var canhtac_xuly = $("#canhtac_xuly").val();
        var canhtac_xl_chepham = $("#canhtac_xl_chepham").val();
        var canhtac_xl_mucdich = $("#canhtac_xl_mucdich").val();
        var canhtac_caychangio = $("#canhtac_caychangio").val();
        var canhtac_chieucao = $("#canhtac_chieucao").val();
        var canhtac_donghieng = $("#canhtac_donghieng").val();
        var canhtac_tugoc = $("#canhtac_tugoc").val();
        var canhtac_tuoinuoc = $("#canhtac_tuoinuoc").val();
        var canhtac_caycon_sl = $("#canhtac_caycon_sl").val();
        var canhtac_caycon_cachtuoi = $("#canhtac_caycon_cachtuoi").val();
        var canhtac_caycon_time = $("#canhtac_caycon_time").val();
        var canhtac_truongthanh_sl = $("#canhtac_truongthanh_sl").val();
        var canhtac_truongthanh_cachtuoi = $("#canhtac_truongthanh_cachtuoi").val();
        var canhtac_truongthanh_time = $("#canhtac_truongthanh_time").val();
        var canhtac_dautrai_sl = $("#canhtac_dautrai_sl").val();
        var canhtac_dautrai_cachtuoi = $("#canhtac_dautrai_cachtuoi").val();
        var canhtac_dautrai_time = $("#canhtac_dautrai_time").val();
        var canhtac_codai = $("#canhtac_codai").val();
        if (idvungtrong == '---'){
            alert("Chưa chọn vùng trồng!");
        } else {
            $.ajax({
                type: 'POST',
                url: 'go',
                data: {
                    for: "luu_thongtin_canhtac",
                    madonvi: madonvi,
                    idvungtrong: idvungtrong,
                    canhtac_manongho: manongho,
                    canhtac_bobaodebao: canhtac_bobaodebao,
                    canhtac_ong_chieucao: canhtac_ong_chieucao,
                    canhtac_ong_chieurong: canhtac_ong_chieurong,
                    canhtac_ong_sl: canhtac_ong_sl,
                    canhtac_ong_duongkinh: canhtac_ong_duongkinh,
                    canhtac_cachdat: canhtac_cachdat,
                    canhtac_liep_dai: canhtac_liep_dai,
                    canhtac_liep_rong: canhtac_liep_rong,
                    canhtac_liep_cao: canhtac_liep_cao,
                    canhtac_muong_dai: canhtac_muong_dai,
                    canhtac_muong_rong: canhtac_muong_rong,
                    canhtac_muong_cao: canhtac_muong_cao,
                    canhtac_motrong: canhtac_motrong,
                    canhtac_time_dap: canhtac_time_dap,
                    canhtac_mat_chieucao: canhtac_mat_chieucao,
                    canhtac_duongkinh: canhtac_duongkinh,
                    canhtac_xuly: canhtac_xuly,
                    canhtac_xl_chepham: canhtac_xl_chepham,
                    canhtac_xl_mucdich: canhtac_xl_mucdich,
                    canhtac_caychangio: canhtac_caychangio,
                    canhtac_chieucao: canhtac_chieucao,
                    canhtac_donghieng: canhtac_donghieng,
                    canhtac_tugoc: canhtac_tugoc,
                    canhtac_tuoinuoc: canhtac_tuoinuoc,
                    canhtac_caycon_sl: canhtac_caycon_sl,
                    canhtac_caycon_cachtuoi: canhtac_caycon_cachtuoi,
                    canhtac_caycon_time: canhtac_caycon_time,
                    canhtac_truongthanh_sl: canhtac_truongthanh_sl,
                    canhtac_truongthanh_cachtuoi: canhtac_truongthanh_cachtuoi,
                    canhtac_truongthanh_time: canhtac_truongthanh_time,
                    canhtac_dautrai_sl: canhtac_dautrai_sl,
                    canhtac_dautrai_cachtuoi: canhtac_dautrai_cachtuoi,
                    canhtac_dautrai_time: canhtac_dautrai_time,
                    canhtac_codai: canhtac_codai,
                    tennhanvien: tennhanvien
                }
            }).done(function(data){
                var j_data = JSON.parse(data);
                if (j_data[0].ketqua > 0) {
                    cute_alert_success("Lưu thông tin thành công!");
                } else {
                    cute_alert_error('Lưu thông tin thất bại!');
                }
            });
        }
    }
</script>