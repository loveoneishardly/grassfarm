<div class="app-title">
    <div>
        <h1><i class="fa fa-briefcase"></i> Bón phân và kỹ thuật bón phân</h1>
        <p>Bón phân và kỹ thuật bón phân</p>
    </div>
    <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item"><a href="go?page=_main&subP=controlboard" style="color:black !important"><i class="fa fa-home fa-lg"></i></a></li>
        <li class="breadcrumb-item"><a href="javascript:void(0);">Nhật ký sản xuất</a></li>
        <li class="breadcrumb-item"><a href="go?page=_main&subP=kythuatcanhtac">Bón phân và kỹ thuật bón phân</a></li>
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
                                <?php
                                    foreach ($danhsach_vuntrong as $key) {
                                        echo '<option value="'.$key['ID_VUNG_TRONG'].'">'.$key['TEN_VUNG_TRONG'].' - '.$key['TEN_KHU_VUC'].' - '.$key['DIEN_TICH_DAT'].'</option>';
                                    }
                                ?>
                            </select >
                        </div>
                    </div>
                </div>
            </div>
            <div class="tile mb-4">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="page-header">
                            <h3 class="mb-3">Kỹ thuật bón phân</h3>
                            <input name="phanbon_idct_phanbon" id="phanbon_idct_phanbon" hidden = true/>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Đơn vị tính</label>
                            <select class="form-control" id="phanbon_dvt" name="">
                                <option value="1">kg/ha</option>
                                <option value="2">kg/công</option>
                                <option value="3">kg/1000 m<sub>2</sub></option>
                                <option value="4">kg/1300 m<sub>2</sub></option>
                            </select >
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="control-label">Thời kỳ cây</label>
                            <input id="phanbon_thoikycay" name="" class="form-control" type="text" placeholder="">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Loại phân</label>
                            <input id="phanbon_loaiphan" name="" class="form-control" type="text" placeholder="">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Cách bón</label>
                            <input id="phanbon_cachbon" name="" class="form-control" type="text" placeholder="">
                        </div>
                    </div>
                    <div class="col-lg-6 offset-lg-0">
                        <div class="form-group">
                            <label class="control-label">Thời điểm bón</label>
                            <input id="phanbon_thoidiembon" name="" class="form-control" type="text" placeholder="">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Liều lượng</label>
                            <input id="phanbon_lieuluong" name="" class="form-control" type="text" placeholder="">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Hiệu quả</label>
                            <input id="phanbon_hieuqua" name="" class="form-control" type="text" placeholder="">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <div class="bs-component" style="display: flex !important; justify-content: center !important;">
                                <button id="phanbon_luuthongtin" name="" class="btn btn-primary" type="button" style="margin-bottom:2px !important"><i class="fa fa-fw fa-lg fa-check-circle"></i>LƯU THÔNG TIN</button>
                                &nbsp; &nbsp;
                                <button id="phanbon_xoa_lanbonphan" name="" class="btn btn-danger" type="button" style="margin-bottom:2px !important"><i class="fa fa-fw fa-lg fa-times "></i>XÓA</button>
                            </div>
                        </div>
                        <div id="list_kythuatbonphan"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    var wHeight = $(window).height();
    var wWidht = $(window).width();
    var w_gird = (wWidht/1.29)/7;
    var admin = <?php echo $_SESSION["admin"]; ?>;
    var madonvi = <?php echo $_SESSION["madv"]; ?>;
    var manhanvien = <?php echo $_SESSION["manv"]; ?>;
    var tennhanvien = <?php echo "'".$_SESSION["tennv"]."'"; ?>;
    var source_listkythuatbonphan;
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
            var phanbon_manongho = $("#vungtrong_nongho").val();
            load_ds_kythuatbonphan(madonvi, phanbon_manongho, idvungtrong);
        });
        source_listkythuatbonphan = {
            datatype: "json",
            datafields: [
                { name: 'ID'},
                { name: 'MA_NONG_HO'},
                { name: 'ID_VUNG_TRONG'},
                { name: 'MA_DON_VI'},
                { name: 'DON_VI_TINH'},
                { name: 'DON_VI_TINH_T'},
                { name: 'THOI_KY_CAY'},
                { name: 'THOI_DIEM_BON'},
                { name: 'LOAI_PHAN'},
                { name: 'LIEU_LUONG'},
                { name: 'CACH_BON'},
                { name: 'HIEU_QUA'}
            ],
            url: '',
            cache: false,
            pagesize: 50,
            pager: function (pagenum, pagesize, oldpagenum) {
            }
        };
        var dataAdapter = new $.jqx.dataAdapter(source_listkythuatbonphan);
        $("#list_kythuatbonphan").jqxGrid({
            source: dataAdapter,
            width: '100%',
            height: '400',
            columnsresize: false,
            filterable: true,
            editable: false,
            selectionmode: 'singlerow',
            showstatusbar: true,
            statusbarheight: 32,
            showaggregates: true,
            pagermode: 'simple',
            columns: [
                {
                    text: '#', datafield: '', align: 'center', cellsalign: 'center',
                    columntype: 'number', width: 50,
                    cellsrenderer: function (row, column, value) {
                        return "<div style='margin-top:8px;text-align: center;display: flex;justify-content: center;align-items: center;'>" + (value + 1) + "</div>";
                    }
                },
                { text: 'ID_PHANBON', datafield: 'ID', hidden: true},
                { text: 'MA_NONG_HO', datafield: 'MA_NONG_HO', hidden: true},
                { text: 'ID_VUNG_TRONG', datafield: 'ID_VUNG_TRONG', hidden: true},
                { text: 'MA_DON_VI', datafield: 'MA_DON_VI', hidden: true},
                { text: 'DON_VI_TINH', datafield: 'DON_VI_TINH', hidden: true},
                { text: 'Đơn vị tính', datafield: 'DON_VI_TINH_T', width: w_gird, align: 'center', cellsalign: 'center'},
                { text: 'Thời kỳ cây', datafield: 'THOI_KY_CAY', width: w_gird, align: 'center', cellsalign: 'left'},
                { text: 'Thời điểm bón', datafield: 'THOI_DIEM_BON', width: w_gird, align: 'center', cellsalign: 'left'},
                { text: 'Loại phân', datafield: 'LOAI_PHAN', width: w_gird, align: 'center', cellsalign: 'left'},
                { text: 'Liều lượng', datafield: 'LIEU_LUONG', width: w_gird, align: 'center', cellsalign: 'left'},
                { text: 'Cách bón', datafield: 'CACH_BON', width: w_gird, align: 'center', cellsalign: 'left'},
                { text: 'Hiệu quả', datafield: 'HIEU_QUA', width: w_gird, align: 'center', cellsalign: 'left'}
            ]
        });
        $("#phanbon_luuthongtin").click(function(){
            var idvungtrong = $("#vungtrong_thongtinvungtrong").val();
            var phanbon_manongho = $("#vungtrong_nongho").val();
            luu_thongtin_phanbon(madonvi, phanbon_manongho, idvungtrong);
        });
        $('#list_kythuatbonphan').on('rowclick', function (event) {
            var args = event.args;
            var rowBoundIndex = args.rowindex;
            var selectedRowData_dsphanbon = $('#list_kythuatbonphan').jqxGrid('getrowdata', rowBoundIndex);
            $("#phanbon_dvt").val(selectedRowData_dsphanbon.DON_VI_TINH);
            $("#phanbon_thoikycay").val(selectedRowData_dsphanbon.THOI_KY_CAY);
            $("#phanbon_loaiphan").val(selectedRowData_dsphanbon.LOAI_PHAN);
            $("#phanbon_cachbon").val(selectedRowData_dsphanbon.CACH_BON);
            $("#phanbon_thoidiembon").val(selectedRowData_dsphanbon.THOI_DIEM_BON);
            $("#phanbon_lieuluong").val(selectedRowData_dsphanbon.LIEU_LUONG);
            $("#phanbon_hieuqua").val(selectedRowData_dsphanbon.HIEU_QUA);
            $("#phanbon_idct_phanbon").val(selectedRowData_dsphanbon.ID);
        });
    });
    function load_ds_kythuatbonphan(madonvi, manongho, idvungtrong){
        var url_dsphanbon = "go?for=load_list_kythuatbonphan&madonvi=" + madonvi + "&idvungtrong=" + idvungtrong + "&manongho=" + manongho;
        source_listkythuatbonphan.url = url_dsphanbon;
        $("#list_kythuatbonphan").jqxGrid('updatebounddata');
    }
    function luu_thongtin_phanbon(madonvi, manongho, idvungtrong){
        var phanbon_dvt = $("#phanbon_dvt").val();
        var phanbon_thoikycay = $("#phanbon_thoikycay").val();
        var phanbon_loaiphan = $("#phanbon_loaiphan").val();
        var phanbon_cachbon = $("#phanbon_cachbon").val();
        var phanbon_thoidiembon = $("#phanbon_thoidiembon").val();
        var phanbon_lieuluong = $("#phanbon_lieuluong").val();
        var phanbon_hieuqua = $("#phanbon_hieuqua").val();
        var idct_phanbon = $("#phanbon_idct_phanbon").val()
        if (idvungtrong == '---'){
            alert("Chưa chọn vùng trồng!");
        } else {
            $.ajax({
                type: 'POST',
                url: 'go',
                data: {
                    for: "luu_thongtin_phanbon",
                    madonvi: madonvi,
                    idvungtrong: idvungtrong,
                    phanbon_manongho: manongho,
                    phanbon_dvt: phanbon_dvt,
                    phanbon_thoikycay: phanbon_thoikycay,
                    phanbon_loaiphan: phanbon_loaiphan,
                    phanbon_cachbon: phanbon_cachbon,
                    phanbon_thoidiembon: phanbon_thoidiembon,
                    phanbon_lieuluong: phanbon_lieuluong,
                    phanbon_hieuqua: phanbon_hieuqua,
                    idct_phanbon: idct_phanbon,
                    tennhanvien: tennhanvien
                }
            }).done(function(data){
                var j_data = JSON.parse(data);
                if (j_data[0].ketqua > 0) {
                    cute_alert_success("Lưu thông tin thành công!");
                    load_ds_kythuatbonphan(madonvi, manongho, idvungtrong);
                } else {
                    cute_alert_error('Lưu thông tin thất bại!');
                }
            });
        }
    }
    function load_thongtin_kythuatbonphan(madonvi, manongho, idvungtrong){
        $.ajax({
            type: 'POST',
            url: 'go',
            data: {
                for: "load_thongtin_phanbon",
                madonvi: madonvi,
                idvungtrong: idvungtrong,
                manongho: manongho
            }
        }).done(function(data){
            var j_data = JSON.parse(data);
            if (j_data.length > 0) {
                $("#phanbon_dvt").val();
                $("#phanbon_thoikycay").val();
                $("#phanbon_cachbon").val();
                $("#phanbon_cachbon").val();
                $("#phanbon_thoidiembon").val();
                $("#phanbon_lieuluong").val();
                $("#phanbon_hieuqua").val();
            } else {
                $("#phanbon_dvt").val();
                $("#phanbon_thoikycay").val();
                $("#phanbon_cachbon").val();
                $("#phanbon_cachbon").val();
                $("#phanbon_thoidiembon").val();
                $("#phanbon_lieuluong").val();
                $("#phanbon_hieuqua").val();
            }
        });
    }
</script>